<?php   

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Checkout;

class CheckoutController extends Controller
{

    public function index()
    {
        return view('front.pages.checkout.index');

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
        $checkout = new Checkout();

        ////////////////////
        $sections = View::make('front.pages.checkout.index')->renderSections();

        return response()->json([
    
            'content' => $sections['content'],
    
        ]);
      
    }

}
