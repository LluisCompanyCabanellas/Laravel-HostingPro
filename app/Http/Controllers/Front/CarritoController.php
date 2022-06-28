<?php   

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;



class CarritoController extends Controller
{

    public function __construct(Cart $cart)
    {
        $this->cart = $cart;

    }


    public function index()
    {
        return view('front.pages.carrito.index');

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
                'fingerprint' => '1',
                'active' => '1',
            ]);
        }

        $carts = $this->cart->select(DB::raw('count(price_id) as quantity'), 'price_id')
            ->groupByRaw('price_id')
            ->where('fingerprint', 1)
            ->where('fingerprint', $cart->fingerprint)
            ->get();
            
            $sections = View::make('front.pages.cart.index')
            ->with('carts', $carts)
            ->with('fingerprint', $cart->fingerprint)
            ->renderSections();
              

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





