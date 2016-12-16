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
    private $tpl = '<li class="{{ class }}"> <a href="{{ route }}"> {{ name }} </a><li>';
        
    public function make($current){
        $tmp = "";
        foreach ($this->items as $item){
            $item['class'] = ($item["route"] == $current)? "active": "";
            $tmp .= $this->tpl($item);
        } 
        return $tmp;
    }
    
    public function add($name, $route){
        $this->items[] = array(
            'name' => $name,
            'route' => $route,
        );
    }
    
    public function tpl(Array $items){
        
        $subject = $this->tpl;
        $pattern = '/(\{{2})([a-z\s]+)(\}{2})/';
        preg_match_all($pattern, $subject, $matches);
            
        foreach($matches[2] as $k => $vars){
            $flag = trim($vars);
            $toReplace  = $matches[0][$k];
            $subject = str_replace($toReplace, $items[$flag], $subject);
        }    
        
        return $subject;
        
    }
    
}