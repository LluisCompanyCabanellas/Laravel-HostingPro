<?php   

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sell;
use App\Models\Cart;
use App\Models\Checkout;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{

    protected $checkout;

    public function __construct(Checkout $checkout, Cart $cart, Sell $sel)
    {
        $this->checkout = $checkout;
        $this->cart = $cart;
        $this->sell = $sell;
    }

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

    public function purchased(ClientRequest $request) 
    {
        $client = $this->client->updateOrCreate([
            'id' => request('id')], [
                'name' => request('name'),
                'surnames' => request('surnames'),
                'telephone' => request('telephone'),
                'email' => request('email'),
                'address' => request('address'),
            ]
        );

        $sell = $this->sell->updateOrCreate([
            'id' => request('id')],[
                'ticket_number' => '123456',
                'client_id' => '1',
                'active' => 1,
                'visible' => 1,
            ]
        );

        $cart = $this->$cart
            ->where('fingerprint', $fingerprint)
            ->where('carts.active', 1)
            ->where('carts.sell_id', null)
            ->create([
                'sell_id' => $sell_id,
                'fingerprint' => $fingerprint,
                'active' => 1,
            ]);
    

        $view = View::make('front.pages.purchased.index');

        if(request()->ajax()) {
            
            $sections = $view->renderSections(); 

            return response()->json([
                'content' => $sections['content'],
            ]);
        }

        return $view;
    }
    
}