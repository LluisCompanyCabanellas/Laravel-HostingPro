<?php   

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{

    public function __construct(Sale $sale, Cart $cart)
    {
        $this->sale = $sale;
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
        ->where('carts.sale_id', null)
        ->where('carts.fingerprint', $request->cookie('fp'))
        ->first();

        $ticket_number = $this->sale->latest()->first()->ticket_number;

        if(str_contains($ticket_number, date('Ymd'))) {
            $ticket_number += 1;
        } else {
            $ticket_number = date('Ymd') . '001';
        }

        
        $customer = $this->customer->create([
            'name' => request('name'),
            'surnames' => request('surnames'),
            'country' => request('country'),
            'province' => request('province'),
            'email' => request('email'),
            'active' => 1,

        ]);

        $sale = $this->sale->create([
            'customer_id' => $customer->id,
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



    





