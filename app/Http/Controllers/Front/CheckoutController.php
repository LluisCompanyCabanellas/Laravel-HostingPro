<?php   

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sell;
use App\Models\Cart;
use App\Models\Client;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{

    protected $cart;

    public function __construct(Cart $cart, Client $client)
    {
        $this->cart = $cart;
        $this->client = $client;
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

        $view = View::make('front.pages.checkout.index')
            ->with('fingerprint', $fingerprint)

            ->with('tax_total', ($totals->total - $totals->base_total))
            ->with('total', $totals->total);

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

        $client = $this->client->create(  [
            'name' => request('name'),
            'surnames' =>request('surnames'),
            'email' =>request('email'),
            'telephone' =>request('telephone'),
            'postal_code' =>request('postal_code'),
            'country' =>request('country'),
            'address' =>request('address'),
            'province' =>request('province'),
            'active' => 1,
        ]);

        $view = View::make('front.pages.buyconfirmate.index');

        $sections = $view->renderSections();

        return response()->json([
            'content' => $sections['content'],
        ]);


        return $view;
    }



      

}