<?php


namespace App\Http\Controllers\Front;


use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Http\Requests\Front\ContactRequest;
use Debugbar;


class ContactController extends Controller
{
   

    protected $contact;


    public function __construct(Contact $contact)
    {
        
        
        $this->contact = $contact; 
    }
    
    public function index()
    {

        

        $view = View::make('front.pages.contact.index')
                ->with('contact', $this->contact)
                ->with('contact', $this->contact->where('active', 1)->get());

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
       

       $view = View::make('front.pages.contact.index')
        ->with('contact', $this->contact)
        ->renderSections();
        Debugbar::info($view['form']);


        

        return response()->json([
            'form' => $view['form']
        ]);
    }

    public function store(ContactRequest $request)
    {            
        

        $contact = $this->contact->updateOrCreate([
                'id' => request('id')],[
                'name' => request('name'),
                'codepostal' => request('codepostal'),
                'tel' => request('tel'),
                'email' => request('email'),
                'visible' => 1,
                'active' => 1,
        ]);
            
        $view = View::make('front.pages.contact.index')
        ->with('contact', $this->contact->where('active', 1)->get())  //with va a pasar las variables
        ->with('contact', $contact)
        ->renderSections();        

        return response()->json([
            'table' => $view['table'],
            'form' => $view['form'],
            'id' => $contact->id,
        ]);
    }

    public function edit(Contact $contact) 
    {
        Debugbar::info($contact);

        $view = View::make('front.pages.contact.index')
        ->with('contact', $contact)
        ->with('contact', $this->contact->where('active', 1)->get());   
        
        if(request()->ajax()) {

            $sections = $view->renderSections(); 
    
            return response()->json([
                'form' => $sections['form'],
            ]); 
        }
                
        return $view;
    }

    public function show(Contact $contact){

    }

    public function destroy(Contact $contact)
    {
        $contact->active = 0;
        $contact->save();

        $view = View::make('front.pages.contact.index')
            ->with('contact', $this->contact)
            ->with('contact', $this->contact->where('active', 1)->get())
            ->renderSections();
        
        return response()->json([
            'table' => $view['table'],
            'form' => $view['form']
        ]);
    }
}       