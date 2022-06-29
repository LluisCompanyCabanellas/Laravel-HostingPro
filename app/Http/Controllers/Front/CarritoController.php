<?php   

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Debugbar;

class CarritoController extends Controller
{

    protected $cart;

    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }

    public function index()
    {
        
        $carts = $this->cart->select(DB::raw('count(price_id) as quantity'), 'price_id')
            ->groupByRaw('price_id')
            ->where('fingerprint', 1)
            ->where('fingerprint', $cart->fingerprint)
            ->get();
        
        $totals = $this->cart
            ->where('carts.fingerprint', $request->cookie('fp'))
            ->where('carts.active', 1)
            ->where('carts.sell_id', null)
            ->join('prices', 'prices.id', '=', 'carts.price_id')
            ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
            ->select(DB::raw('sum(prices.base_price) as base_total'), DB::raw('sum(prices.base_price * taxes.multiplicator) as total') )
            ->first();  

        $taxes = $this->cart
            ->where('carts.fingerprint', $request->cookie('fp'))
            ->where('carts.active', 1)
            ->where('carts.sell_id', null)
            ->join('prices', 'prices.id', '=', 'carts.price_id')
            ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
            ->select(DB::raw('taxes.type as type'))
            ->first();

        $view = View::make('front.pages.carrito.index')
            ->with('carts', $carts)
            ->with('fingerprint', $request->cookie('fp'))
            ->with('base_total', $totals->base_total)
            ->with('total', $totals->total)
            ->with('tax_total', $totals->total - $totals->base_total)
            ->with('type', $taxes->type);
            

        if(request()->ajax()) {
            
            $sections = $view->renderSections(); 

            return response()->json([
                'content' => $sections['content'],
            ]);
        }

        return $view;
    }


    public function store(Request $request)
    {            
        for($i = 0; $i<request('quantity'); $i++)
        {
            $cart = $this->cart->create([
                'price_id' => request('price_id'),
                'fingerprint' => $request->cookie('fp'),
                'active' => '1',
            ]);
        }

        $carts = $this->cart->select(DB::raw('count(price_id) as quantity'),'price_id')
        ->groupByRaw('price_id')
        ->where('active', 1)
        ->where('fingerprint',  1)
        ->where('sell_id', null)
        ->orderBy('price_id', 'desc')
        ->get();

        $totals = $this->cart
        ->where('carts.fingerprint', 1)
        ->where('carts.active', 1)
        ->where('carts.sell_id', null)
        ->join('prices', 'prices.id', '=', 'carts.price_id')
        ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
        ->select(DB::raw('sum(prices.base_price) as base_total'), DB::raw('sum(prices.base_price * taxes.multiplicator) as total') )
        ->first();

        $sections = View::make('front.pages.carrito.index')
        ->with('carts', $carts)
        ->with('base_total', $totals->base_total)
        ->with('tax_total', ($totals->total - $totals->base_total))
        ->with('total', $totals->total)
        ->with('fingerprint', $request->cookie('fp'))
        ->renderSections();

        return response()->json([
            'content' => $sections['content'],
        ]);
    }


    public function plus($price_id, $fingerprint)
    {

        $cart = $this->cart->create([
            'price_id' => $price_id,
            'fingerprint' => 1,
            'active' => 1,
        ]);

        $carts = $this->cart->select(DB::raw('count(price_id) as quantity'),'price_id')
        ->groupByRaw('price_id')
        ->where('active', 1)
        ->where('fingerprint', $request->cookie('fp'))
        ->where('sell_id', null)
        ->orderBy('price_id', 'desc')
        ->get();

        $totals = $this->cart
        ->where('carts.fingerprint', 1)
        ->where('carts.active', 1)
        ->where('carts.sell_id', null)
        ->join('prices', 'prices.id', '=', 'carts.price_id')
        ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
        ->select(DB::raw('sum(prices.base_price) as base_total'), DB::raw('sum(prices.base_price * taxes.multiplicator) as total') )
        ->first();

        $sections = View::make('front.pages.carrito.index')
        ->with('carts', $carts)
        ->with('base_total', $totals->base_total)
        ->with('tax_total', ($totals->total - $totals->base_total))
        ->with('total', $totals->total)
        ->renderSections();

        return response()->json([
            'content' => $sections['content'],
        ]);
    }

    public function minus($fingerprint, $price_id)
    {
        $product = $this->cart
        ->where('active', 1)
        ->where('fingerprint', $request->cookie('fp'))
        ->where('price_id', $price_id)
        ->first();

        $product->active = 0;
        $product->save();
        
        $carts = $this->cart->select(DB::raw('count(price_id) as quantity'),'price_id')
        ->groupByRaw('price_id')
        ->where('active', 1)
        ->where('fingerprint', $request->cookie('fp'))
        ->where('sell_id', null)
        ->orderBy('price_id', 'desc')
        ->get();

        $totals = $this->cart
        ->where('carts.fingerprint', $request->cookie('fp'))
        ->where('carts.active', 1)
        ->where('carts.sell_id', null)
        ->join('prices', 'prices.id', '=', 'carts.price_id')
        ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
        ->select(DB::raw('sum(prices.base_price) as base_total'), DB::raw('sum(prices.base_price * taxes.multiplicator) as total') )
        ->first();

        $sections = View::make('front.pages.carrito.index')
        ->with('carts', $carts)
        ->with('base_total', $totals->base_total)
        ->with('tax_total', ($totals->total - $totals->base_total))
        ->with('total', $totals->total)
        ->renderSections();

        return response()->json([
            'content' => $sections['content'],
        ]);
    }
 
}





