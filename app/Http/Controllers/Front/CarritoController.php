<?php   

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;

class CarritoController extends Controller
{

    protected $cart;

    public function __construct(Cart $cart)
    {
        $this->cart = $cart;

    }

    public function index()
    {
<<<<<<< HEAD
        return view('front.pages.carrito.index');

        if(request()->ajax()) {
            
            $sections = $view->renderSections(); 

            return response()->json([
                'content' => $sections['content'],
            ]);
        }

        return $view;
    }
=======
        $view = View::make('front.pages.cart.index');
>>>>>>> 010376c8a59fa3a80a50e255101079f4c73c5b14

        if(request()->ajax()){

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
                'fingerprint' => '1',
                'active' => '1',
            ]);
        }

        $carts = $this->cart->select(DB::raw('count(price_id) as quantity'), 'price_id')
            ->groupByRaw('price_id')
<<<<<<< HEAD
            ->where('fingerprint', 1)
            ->where('fingerprint', $cart->fingerprint)
            ->get();
            
            $sections = View::make('front.pages.cart.index')
            ->with('carts', $carts)
            ->with('fingerprint', $cart->fingerprint)
            ->renderSections();
              
=======
            ->where('active', '1')
            ->where('fingerprint', $cart->fingerprint)
            ->where('sell_id', null)
            ->get();


        $totals = $this->cart
            ->where('carts.fingerprint', 1)
            ->where('carts.active', $cart->fingerprint)
            ->where('carts.sell_id', null)
            ->join('prices', 'prices.id', '=', 'carts.price_id')
            ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
            ->select(DB::raw('sum(prices.base_price) as base_total'), DB::raw('round(sum(prices.base_price * taxes.multiplicator),2) as total') )
            ->first();   

        $taxes = $this->cart
            ->where('carts.fingerprint', $cart->fingerprint)
            ->where('carts.active', 1)
            ->where('carts.sell_id', null)
            ->join('prices', 'prices.id', '=', 'carts.price_id')
            ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
            ->select(DB::raw('taxes.type as tax'))
            ->first();
                
        $view = View::make('front.pages.carrito.index')
            ->with('carts', $carts)
            ->with('fingerprint', $cart->fingerprint)
            ->with('base_total', $totals->base_total)
            ->with('tax_total', ($totals->total - $totals->base_total))
            ->with('total', $totals->total)
            ->renderSections();  
                

        return response()->json([
            'content' => $view['content'],
        ]);
    }



    public function plus($fingerprint, $price_id)
    {

        $cart = $this->cart->create([
            'price_id' => $price_id,
            'fingerprint' => $fingerprint,
            'active' => 1,
        ]);

        $carts = $this->cart->select(DB::raw('count(price_id) as quantity'), 'price_id')
            ->groupByRaw('price_id')
            ->where('active', '1')
            ->where('fingerprint', $cart->fingerprint)
            ->where('sell_id', null)
            ->get();


        $totals = $this->cart
            ->where('carts.fingerprint', 1)
            ->where('carts.active', $cart->fingerprint)
            ->where('carts.sell_id', null)
            ->join('prices', 'prices.id', '=', 'carts.price_id')
            ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
            ->select(DB::raw('sum(prices.base_price) as base_total'), DB::raw('round(sum(prices.base_price * taxes.multiplicator),2) as total') )
            ->first();   

        $taxes = $this->cart
            ->where('carts.fingerprint', $cart->fingerprint)
            ->where('carts.active', 1)
            ->where('carts.sell_id', null)
            ->join('prices', 'prices.id', '=', 'carts.price_id')
            ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
            ->select(DB::raw('taxes.type as tax'))
            ->first();
                
        $view = View::make('front.pages.carrito.index')
            ->with('carts', $carts)
            ->with('fingerprint', $cart->fingerprint)
            ->with('base_total', $totals->base_total)
            ->with('tax_total', ($totals->total - $totals->base_total))
            ->with('total', $totals->total)
            ->renderSections();  

        return response()->json([
            'content' => $view['content'],
        ]);
    }

    public function minus($fingerprint, $price_id)
    {
        $cart = $this->cart->create([
            'price_id' => $price_id,
            'fingerprint' => $fingerprint,
            'active' => 1,
        ]);
        
        $cart = $this->cart
        ->where('fingerprint', $fingerprint)
        ->where('price_id', $price_id)
        ->where('sell_id', null)
        ->where('active', 1)
        ->first();

        $cart->active = 0;
        $cart->save();

        $carts = $this->cart->select(DB::raw('count(price_id) as quantity'),'price_id')
            ->groupByRaw('price_id')
            ->where('active', 1)
            ->where('fingerprint', $fingerprint)
            ->where('sell_id', null)
            ->orderBy('price_id', 'desc')
            ->get();

        $totals = $this->cart
            ->where('fingerprint', $fingerprint)
            ->where('carts.active', 1)
            ->where('carts.sell_id', null)
            ->join('prices', 'prices.id', '=', 'carts.price_id')
            ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
            ->select(DB::raw('sum(prices.base_price) as base_total'), DB::raw('sum(prices.base_price * taxes.multiplicator) as total') )
            ->first();

        $view = View::make('front.pages.carrito.index')
            ->with('fingerprint', $fingerprint)
            ->with('carts', $carts)
            ->with('base_total', $totals->base_total)
            ->with('total', $totals->total)
            ->with('tax_total', ($totals->total - $totals->base_total))
            ->renderSections();
>>>>>>> 010376c8a59fa3a80a50e255101079f4c73c5b14

        return response()->json([
            'content' => $view['content'],
        ]);
    }


    public function add($price_id, $fingerprint)
    {

        $cart = $this->cart->create([
            'price_id' => $price_id,
            'fingerprint' => '1',
            'active' => 1,
        ]);

        $carts = $this->cart->select(DB::raw('count(price_id) as amount'), 'price_id')
            ->groupByRaw('price_id')
            ->where('active', '1')
            ->where('fingerprint', $fingerprint)
            ->get();

        $sections = View::make('front.pages.cart.index')
            ->with('carts', $carts)
            ->with('fingerprint', $fingerprint)
            ->renderSections();

        return response()->json([
            'content' => $sections['content'],
        ]);
    }

    public function remove(Request $request)
    {
        $cart = $this->cart->where('fingerprint', '1')->where('price_id', request('price_id'))->first()->delete();
    }
}


<<<<<<< HEAD



=======
>>>>>>> 010376c8a59fa3a80a50e255101079f4c73c5b14
