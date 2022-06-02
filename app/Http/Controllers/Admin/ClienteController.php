<?php


namespace App\Http\Controllers\Admin;


use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Http\Requests\Admin\ClienteRequest;
use Debugbar;


class ClienteController extends Controller
{
   

    protected $cliente;


    public function __construct(Cliente $cliente)
    {
        
        
        $this->cliente = $cliente; 
    }
    
    public function index()
    {

        

        $view = View::make('admin.pages.clientes.index')
                ->with('cliente', $this->cliente)
                ->with('clientes', $this->cliente->where('active', 1)->get());

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
       

       $view = View::make('admin.pages.clientes.index')
        ->with('cliente', $this->cliente)
        ->renderSections();
        Debugbar::info($view['form']);


        

        return response()->json([
            'form' => $view['form']
        ]);
    }

    public function store(ClienteRequest $request)
    {            
        

        $cliente = $this->cliente->updateOrCreate([
                'id' => request('id')],[
                'name' => request('name'),
                'surname' => request('surname'),
                'title' => request('title'),
                'telefono' => request('telefono'),
                'description' => request('description'),
                'email' => request('email'),
                'visible' => 1,
                'active' => 1,
        ]);
            
        $view = View::make('admin.pages.clientes.index')
        ->with('clientes', $this->cliente->where('active', 1)->get())  //with va a pasar las variables
        ->with('cliente', $cliente)
        ->renderSections();        

        return response()->json([
            'table' => $view['table'],
            'form' => $view['form'],
            'id' => $cliente->id,
        ]);
    }

    public function edit(Cliente $cliente) 
    {
        Debugbar::info($cliente);

        $view = View::make('admin.pages.clientes.index')
        ->with('cliente', $cliente)
        ->with('clientes', $this->cliente->where('active', 1)->get());   
        
        if(request()->ajax()) {

            $sections = $view->renderSections(); 
    
            return response()->json([
                'form' => $sections['form'],
            ]); 
        }
                
        return $view;
    }

    public function show(Cliente $cliente){

    }

    public function destroy(Cliente $cliente)
    {
        $cliente->active = 0;
        $cliente->save();

        $view = View::make('admin.pages.clientes.index')
            ->with('cliente', $this->cliente)
            ->with('clientes', $this->cliente->where('active', 1)->get())
            ->renderSections();
        
        return response()->json([
            'table' => $view['table'],
            'form' => $view['form']
        ]);
    }
}       