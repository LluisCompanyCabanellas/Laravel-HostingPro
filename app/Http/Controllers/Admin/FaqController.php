<?php


namespace App\Http\Controllers\Admin;


use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Http\Requests\Admin\FaqRequest;
use Debugbar;


class FaqController extends Controller
{
   

    protected $faq;


    public function __construct(Faq $faq)
    {
        
        
        $this->faq = $faq; 
    }
    
    public function index()
    {

        

        $view = View::make('admin.pages.faqs.index')
                ->with('faq', $this->faq)
                ->with('faqs', $this->faq->where('active', 1)->get());

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
       

       $view = View::make('admin.pages.faqs.index')
        ->with('faq', $this->faq)
        ->renderSections();
        Debugbar::info($view['form']);


        

        return response()->json([
            'form' => $view['form']
        ]);
    }

    public function store(FaqRequest $request)
    {            
        

        $faq = $this->faq->updateOrCreate([
                'id' => request('id')],[
                'name' => request('name'),
                'title' => request('title'),
                'description' => request('description'),
                'visible' => 1,
                'active' => 1,
        ]);
            
        $view = View::make('admin.pages.faqs.index')
        ->with('faqs', $this->faq->where('active', 1)->get())  //with va a pasar las variables
        ->with('faq', $faq)
        ->renderSections();        

        return response()->json([
            'table' => $view['table'],
            'form' => $view['form'],
            'id' => $faq->id,
        ]);
    }

    public function edit(Faq $faq) 
    {
        Debugbar::info($faq);

        $view = View::make('admin.pages.faqs.index')
        ->with('faq', $faq)
        ->with('faqs', $this->faq->where('active', 1)->get());   
        
        if(request()->ajax()) {

            $sections = $view->renderSections(); 
    
            return response()->json([
                'form' => $sections['form'],
            ]); 
        }
                
        return $view;
    }

    public function show(Faq $faq){

    }

    public function destroy(Faq $faq)
    {
        $faq->active = 0;
        $faq->save();

        $view = View::make('admin.pages.faqs.index')
            ->with('faq', $this->faq)
            ->with('faqs', $this->faq->where('active', 1)->get())
            ->renderSections();
        
        return response()->json([
            'table' => $view['table'],
            'form' => $view['form']
        ]);
    }
}