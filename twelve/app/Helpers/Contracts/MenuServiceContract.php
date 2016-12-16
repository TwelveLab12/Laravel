<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Helpers\Contracts;

interface MenuServiceContract{
    
    public function make($current);
    public function add($name, $route);
    public function tpl(Array $items);
    
}