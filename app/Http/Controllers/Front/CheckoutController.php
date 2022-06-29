<?php   

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DB\Sell;

class CheckoutController extends Controller
{

    public function __construct(Sell $sell, Cart $cart)
    {
        $this->sell = $sell;
        $this->cart = $cart;
      
    }

    public function index()
    {
        return view('front.pages.checkout.index');
    }


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



    





