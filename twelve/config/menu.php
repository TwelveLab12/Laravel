<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

return [
    
    'menuHome' => [
        'tpl' => '<a class="navbar-brand {{ class }}" href=" {{ route }}"> {{ name }} </a>',
        'add' => [
            'name'=> 'Home',
            'route' =>'home'
        ],
    ],
        
];