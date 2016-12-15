<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Helpers;

use App\Helpers\Contracts\MenuServiceContract;

class MenuService implements MenuServiceContract{
    
    private $items = array();
    
    public function make($current){
        
        $tmp = "";
        foreach ($this->items as $item){
            $class = ($item["route"] == $current)? "active": "";
            $tmp .= '<li class="'.$class.'"> <a href="' . route($item['route']) . '">' . $item['name'] . '</a><li>';
        } 
        return $tmp;
    }
    
    public function add($name, $route){
        $this->items[] = array(
            'name' => $name,
            'route' => $route,
        );
    }
    
}