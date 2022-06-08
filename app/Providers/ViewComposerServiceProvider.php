<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer([
            'admin.pages.products.index'],//html donde esten disponibles las categorias
            'App\Http\ViewComposers\Admin\ProductCategories'
    );

        view()->composer([
            'front.pages.products.index'],
            'App\Http\ViewComposers\Front\ProductCategories'
        );



    }
}
