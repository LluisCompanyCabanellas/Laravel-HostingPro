<?php

namespace App\Http\ViewComposers\Front;

use Illuminate\View\View;
use App\Models\ProductCategory;//traer el modelo

class ProductCategories//esto siempre tiene que ser igual al nombre del archivo
{
    static $composed;//variable estatica para que no se repita el codigo


    //instanciar el objecto mediante inyeccion de dependencias
    public function __construct(ProductCategory $product_categories)
    {
        $this->product_categories = $product_categories;
    }
    //

    public function compose(View $view)
    {

        if(static::$composed)
        {
            return $view->with('product_categories', static::$composed);
        }
        //una query que te da todas las categorias activas de product_category
        static::$composed = $this->product_categories->where('active', 1)->orderBy('title', 'asc')->get();

        $view->with('product_categories', static::$composed);

    }
}