<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class ValidatorServiceProvider extends ServiceProvider{
    
    public function boot(){
        
//        Ajout d'une règle de validation personnalisée
        Validator::extend('aaaa', function($attributes, $value, $parameters){
            var_dump($attributes);
            var_dump($value);
            var_dump($parameters);
            die; 
        });
    }
    
    public function register(){
        
    }
    
}