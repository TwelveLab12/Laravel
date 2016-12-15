<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
//use Validator;
use Illuminate\Support\Facades\Validator;

class ValidatorServiceProvider extends ServiceProvider{
    
    
    //Si on utilise la fonction boot()
    protected $defer = false;
    
    //Si on utilise la fonction register()
//    protected $defer = true;
    
    
     /**
     * Bootstrap any application services.
     *
     * @return void
     */
    
    public function boot(){
        
//        Ajout d'une règle de validation personnalisée
        
//        dd($this);,
        /*
        Validator::extend('nameOfTheRule', function($attributes, $value, $parameters, $validator){
//            Si $value n'est pas égale à aaaa => erreur de validation 
            return $value == 'aaaa';
        });
         * 
         */
    }
    
    
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register(){
        
    }
    
}