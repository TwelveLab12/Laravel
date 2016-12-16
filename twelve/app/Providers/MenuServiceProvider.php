<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helpers\Menu;

class MenuServiceProvider extends ServiceProvider
{
    
    // Mettre à true pour le lazy loading
    protected $defer = true;
    
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Helpers\Contracts\MenuServiceContract', function(){

            return new MenuService();

        });
        
        //
//        $menu = array(
//            
//                ['route' => 'article.index', 'label' => 'articles'], 
//                ['route' => 'categorie.index','label' => 'categories'],
//                ['route' => 'tag.index', 'label' => 'tags'],
//                ['route' => 'about', 'label' => 'A propos'],
//                
//        );
        
        dd(Route::current()->getName());
        
    }
    
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['App\Helpers\Contracts\MenuServiceContract'];
    }

}
