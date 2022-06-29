<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\DB\Cart;
use App\Models\DB\Sale;
use Debugbar;

class CheckoutController extends Controller
{
    protected $sale;

    public function __construct(Sale $sale, Cart $cart)
    {
        $this->cart = $cart;
        $this->sale = $sale;
      
    }
   
    public function index()
    {

        $view = View::make('admin.pages.checkout')
            ->with('sale', $this->sale)
            ->with('sales', $this->sale->where('active', 1)
            ->get());

        if(request()->ajax()) {
           
            $sections = $view->renderSections();
   
            return response()->json([
                'table' => $sections['table'],
                'form' => $sections['form'],
            ]);
        }

        return $view;
    }

    public function create()
    {

       $view = View::make('admin.pages.checkout')
        ->with('sale', $this->sale)
        ->renderSections();

        return response()->json([
            'form' => $view['form']
        ]);
    }

    public function store(Request $request)
    {
        $sale = $this->sale->updateOrCreate([
            'id' => request('id')],[//id només a updateorcreate
            'name' => request('name'),
            'title' => request('title'),
            'description' => request('description'),
            'active' => 1,
        ]);
           
        $view = View::make('admin.pages.checkout')
        ->with('sales', $this->sale->where('active', 1)->get())
        ->with('sale', $sale)
        ->renderSections();        


    }

    public function edit(Request $request, Sale $sale, Cart $cart)
    {
        $carts = $sale->carts;

        $product = $this->sale
        ->with('customer', 'payment', 'carts')
        ->join('carts', 'carts.sale_id', '=', 'sales.id')
        ->join('prices', 'carts.price_id', '=', 'prices.id')
        ->join('products', 'prices.product_id', '=', 'products.id')
        ->select('products.*')
        ->get();

        $products = $this->cart
        ->groupByRaw('price_id')
        ->where('active', 1)
        ->where('fingerprint', $request->cookie('fp'))
        ->where('sale_id', $sale->id)
        ->select(DB::raw('count(price_id) as quantity'),'price_id')
        ->get();

        $view = View::make('admin.pages.checkout')
        ->with('product', $product->first())
        ->with('sale', $sale)
        ->with('products', $products)
        ->with('sales', $this->sale->where('active', 1)->get())
        ;

        if(request()->ajax()) {

            $sections = $view
            ->renderSections();
   
            return response()->json([
                'form' => $sections['form'],
            ]);
        }
               
        return $view;
    }

    
}
