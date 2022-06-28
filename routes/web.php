<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin'], function () {

    /*
    Dentro de resource( 'faqs') "faqs" significa lo que tendremos que escribir en la url para entrar en la página, 
    en este caso tendremos que escribir www.dev-asociacion-mascotas.com/admin/faqs
    Tendremos que decir también que controlador queremos cargar, en este caso el controlador que estamos cargando se llama
    "FaqController" y se encuentra dentro de la carpeta /app/http/controllers/admin
    
    En Internet una web es enviada desde el servidor al usuario a través de un protocolo llamado 
    HTTP/S. La información enviada a través de este protocolo llega a los puertos 80 (no-seguro) o al 443 (seguro). Cuando instalamos
    en el servidor un programa para convertirlo en un servidor web (por ejemplo, Nginx o Apache) estos se van a responsabilizar de
    gestionar esos puertos para detectar si hay llamadas o hay que hacer envios de datos. 
    Las llamadas que hacemos por HTTP tiene principalmente 4 métodos (verbos) que son:
    - GET: Esto significa que hacemos una llamada que va a pedir datos al servidor. 
    - POST: Esto significa que hacemos una llamada que va a enviar datos al servidor.
    - PUT: Esto signifca que hacemos una llamada que va a actualizar datos en el servidor.
    - DELETE: Esto significa que hacemos una llamada que va a eliminar datos en el servidor. 
    Estos métodos HTTP se corresponden con los métodos que vamos a tener en el controlador:
    - index, create, edit show  serán llamadas de tipo GET
        -- En index pediremos todos los datos de una tabla de la base de datos
        -- En create pediremos que nos limpie el formulario.
        -- En edit o show pediremos que nos pase sólo un registro de la tabla (por una id)
    - store será una llamada de tipo POST
        -- En store guardaremos los datos que hayamos añadido en el formulario, nos servirá tanto para guardar datos nuevos como actualizarlos
    - destroy será una llamada de tipo DELETE
        -- En destroy lo que haremos es borrar un dato de la base de datos 
    */

    Route::resource('faqs', 'App\Http\Controllers\Admin\FaqController', [
        'parameters' => [
            'faqs' => 'faq', 
        ],
        'names' => [
            'index' => 'faqs', //get
            'create' => 'faqs_create', //get
            'edit' => 'faqs_edit', //get
            'store' => 'faqs_store', //post
            'destroy' => 'faqs_destroy', //delay
            'show' => 'faqs_show', //get
        ]
    ]);
    

    Route::resource('usuarios', 'App\Http\Controllers\Admin\UserController', [
        'parameters' => [
            'usuarios' => 'user', 
        ],
        'names' => [
            'index' => 'users', 
            'create' => 'users_create', 
            'edit' => 'users_edit', 
            'store' => 'users_store',
            'destroy' => 'users_destroy', 
            'show' => 'users_show', 
        ]
    ]);


    Route::resource('clientes', 'App\Http\Controllers\Admin\ClienteController', [
        'parameters' => [
            'clientes' => 'cliente',    
        ],
        'names' => [
            'index' => 'clientes', //get
            'create' => 'clientes_create', //get
            'edit' => 'clientes_edit', //get
            'store' => 'clientes_store', //post
            'destroy' => 'clientes_destroy', //delay
            'show' => 'clientes_show', //get
        ]
    ]);

    Route::resource('productos/categoria', 'App\Http\Controllers\Admin\ProductCategoryController', [
        'parameters' => [
            'categoria' => 'product_category',   
        ],
        'names' => [
            'index' => 'product_categories', //get
            'create' => 'product_categories_create', //get
            'edit' => 'product_categories_edit', //get
            'store' => 'product_categories_store', //post
            'destroy' => 'product_categories_destroy', //delay
            'show' => 'product_categories_show', //get
        ]
    ]);

    Route::resource('productos', 'App\Http\Controllers\Admin\ProductController', [
        'parameters' => [
            'productos' => 'product',  
        ],
        'names' => [
            'index' => 'products', //get
            'create' => 'products_create', //get
            'edit' => 'products_edit', //get
            'store' => 'products_store', //post
            'destroy' => 'products_destroy', //delay
            'show' => 'products_show', //get
        ]
    ]);
} );



Route::get('home', 'App\Http\Controllers\Front\HomeController@index')->name('front_home');

Route::get('contacto', 'App\Http\Controllers\Front\ContactController@index')->name('front_contact');
Route::post('contacto', 'App\Http\Controllers\Front\ContactController@store')->name('front_contact_form');


Route::get('carrito', 'App\Http\Controllers\Front\CarritoController@index')->name('front_carrito');
Route::post('carrito', 'App\Http\Controllers\Front\CarritoController@store')->name('front_add_carrito');
Route::get('carrito/plus/{fingerprint}/{price_id}', 'App\Http\Controllers\Front\CarritoController@plus')->name('front_plus_carrito');
Route::get('carrito/minus/{fingerprint}/{price_id}', 'App\Http\Controllers\Front\CarritoController@minus')->name('front_minus_carrito');


Route::get('checkout', 'App\Http\Controllers\Front\CheckoutController@index')->name('front_checkout');


Route::get('faqs', 'App\Http\Controllers\Front\FaqController@index')->name('front_faqs');

Route::post('productos/buscador', 'App\Http\Controllers\Front\ProductController@search')->name('front_products_search');   
Route::get('productos', 'App\Http\Controllers\Front\ProductController@index')->name('front_products');//todos los datos 
Route::get('productos/{product}', 'App\Http\Controllers\Front\ProductController@show')->name('front_product');// solo un dato

Route::get('productos/categoria/{category}', 'App\Http\Controllers\Front\ProductCategoryController@show')->name('posts_category');
Route::get('productos/order/{order}', 'App\Http\Controllers\Front\ProductController@order')->name('front_order_price');







