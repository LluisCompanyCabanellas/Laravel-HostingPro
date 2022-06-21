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
        return view('front.pages.carrito.index');
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
            ->where('active', '1')
            ->where('fingerprint', $cart->fingerprint)
            ->get();
            
        $view = View::make('front.pages.carrito.index')
        ->with('carts', $carts)
        ->with('fingerprint', $cart->fingerprint)
        ->renderSections();  

        Debugbar::info($carts);
              

        return response()->json([
            'content' => $view['content'],
        ]);
    }



}
