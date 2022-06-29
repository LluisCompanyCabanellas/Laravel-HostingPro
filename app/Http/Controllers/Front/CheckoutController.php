<?php   

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Models\DB\Sell;
=======
use App\Http\Requests\Front\ClientRequest;
use App\Models\Sell;
use App\Models\Cart;
use App\Models\Client;
use Illuminate\Support\Facades\DB;
>>>>>>> 1d34f0da2f5cd8aedfcc2b7425db09a45b72ca93

class CheckoutController extends Controller
{

<<<<<<< HEAD
    public function __construct(Sell $sell, Cart $cart)
=======
<<<<<<< HEAD
    public function __construct(Sale $sale, Cart $cart)
>>>>>>> 1d34f0da2f5cd8aedfcc2b7425db09a45b72ca93
    {
        $this->sell = $sell;
        $this->cart = $cart;
      
    }

    public function index()
=======
    protected $checkout;

    public function __construct( Cart $cart, Sell $sell,Client $client)
>>>>>>> 010376c8a59fa3a80a50e255101079f4c73c5b14
    {
        $this->cart = $cart;
        $this->sell = $sell;
        $this->client = $client;
    }

<<<<<<< HEAD

    public function store(Request $request)
    {

        $totals = $this->cart
        ->where('carts.active', 1)
        ->where('carts.sell_id', null)
        ->where('carts.fingerprint', $request->cookie('fp'))
        ->first();

        $ticket_number = $this->sell->latest()->first()->ticket_number;

        if(str_contains($ticket_number, date('Ymd'))) {
            $ticket_number += 1;
        } else {
            $ticket_number = date('Ymd') . '001';
        }

        
        $client = $this->client->create([
            'name' => request('name'),
            'surnames' => request('surnames'),
            'country' => request('country'),
            'province' => request('province'),
            'email' => request('email'),
            'active' => 1,

        ]);

        $sell = $this->sell->create([
            'client_id' => $client->id,
            'ticket_number' => $ticket_number,
            'total_tax_price' => $totals->total,
            'total_price' => $totals->total,
            'date_emission' => date('Y-m-d'),
            'time_emission' => date('H:i:s'),
            'active' => 1,
        ]);
    

    

        $sections = View::make('front.pages.buyconfirmation.index');



        return response()->json([

            'content' => $sections->render(),
        ]);
    }
}



    





=======
    public function index($fingerprint)
    {

        $totals = $this->cart
            ->where('carts.fingerprint', 1)
            ->where('carts.active', $fingerprint)
            ->where('carts.sell_id', null)
            ->join('prices', 'prices.id', '=', 'carts.price_id')
            ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
            ->select(DB::raw('sum(prices.base_price) as base_total'), DB::raw('sum(prices.base_price * taxes.multiplicator) as total') )
            ->first();  

        $taxes = $this->cart
            ->where('carts.fingerprint', $fingerprint)
            ->where('carts.active', 1)
            ->where('carts.sell_id', null)
            ->join('prices', 'prices.id', '=', 'carts.price_id')
            ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
            ->select(DB::raw('taxes.type as type'))
            ->first();

        $sections = View::make('front.pages.checkout.index')
            ->with('fingerprint', $fingerprint)
            ->with('base_total', $totals->base_total)
            ->with('total', $totals->total)
            ->with('tax_total', ($totals->total - $totals->base_total))
            ->with('type', $taxes->type)
            ->renderSections();
            
            return response()->json([
                'content' => $sections['content'],
            ]);

     
    }

    public function store(ClientRequest $client) 
    {

        $totals = $this->cart
            ->where('carts.fingerprint', request('fingerprint'))
            ->where('carts.active', 1 )
            ->where('carts.sell_id', null)
            ->join('prices', 'prices.id', '=', 'carts.price_id')
            ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
            ->select(DB::raw('sum(prices.base_price) as base_total'), DB::raw('sum(prices.base_price * taxes.multiplicator) as total') )
            ->first();  

        $client = $this->client->create([
                'name' => request('name'),
                'surnames' => request('surnames'),
                'telephone' => request('telephone'),
                'email' => request('email'),
                'address' => request('address'),
                'country' => request('country'),
                'postal_code' => request('postal_code'),
                'province' => request('province'),
                'active' => '1',
            ]
        );

        $sell = $this->sell->latest()->first();
        $todayDate = date('Ymd');

        if (isset($sell->ticket_number) && str_contains($sell->ticket_number, $todayDate)) {
            $ticket_number = $sell->ticket_number +1;
        }else{
            $ticket_number = $todayDate.'0001';
        }

        $sell = $this->sell->create([
                'ticket_number' => $ticket_number,
                'date_emission' => date('Y-m-d'),
                'time_emission' => date('H:i:s'),
                'payment_method_id' => request('payment'),
                'total_base_price' => $totals->base_total,
                'total_tax_price' => $totals->total - $totals->base_total,
                'total_price' => $totals->total ,
                'client_id' => $client->id,
                'active' => 1,
            ]
        );

        $cart = $this->cart
            ->where('fingerprint', request('fingerprint'))
            ->where('carts.active', 1)
            ->where('carts.sell_id', null)
            ->update([
                'sell_id' => $sell->id,
            ]);
    

        $view = View::make('front.pages.buyconfirmate.index');

        if(request()->ajax()) {
            
            $sections = $view->renderSections(); 

            return response()->json([
                'content' => $sections['content'],
            ]);
        }

        return $view;
    }
    
}
>>>>>>> 010376c8a59fa3a80a50e255101079f4c73c5b14
