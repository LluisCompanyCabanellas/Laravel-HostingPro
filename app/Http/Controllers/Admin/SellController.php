<?php


namespace App\Http\Controllers\Admin;


use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Sell;
use App\Http\Requests\Admin\SellRequest;
use Debugbar;


class SellController extends Controller
{
   

    protected $sell;


    public function __construct(Sell $sell)
    {
        
        
        $this->sell = $sell; 
    }
    
    public function index()
    {

        

        $view = View::make('admin.pages.sells.index')
                ->with('sell', $this->sell)
                ->with('sells', $this->sell->where('active', 1)->get());

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
       

       $view = View::make('admin.pages.sells.index')
        ->with('sell', $this->sell)
        ->renderSections();
        Debugbar::info($view['form']);


        

        return response()->json([
            'form' => $view['form']
        ]);
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
            ->where('fingerprint', $sell->fingerprint)
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

    public function edit(Sell $sell) 
    {
        Debugbar::info($sell);

        $view = View::make('admin.pages.faqs.index')
        ->with('sell', $sell)
        ->with('products', $this->sell->where('active', 1)->get());   
        
        if(request()->ajax()) {

            $sections = $view->renderSections(); 
    
            return response()->json([
                'form' => $sections['form'],
            ]); 
        }
                
        return $view;
    }

    public function show(Sell $sell){

    }

    public function destroy(Sell $sell)
    {
        $sell->active = 0;
        $sell->save();

        $view = View::make('admin.pages.sell.index')
            ->with('sell', $this->sell)
            ->with('products', $this->sell->where('active', 1)->get())
            ->renderSections();
        
        return response()->json([
            'table' => $view['table'],
            'form' => $view['form']
        ]);
    }
}