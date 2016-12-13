<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


namespace app\Helpers;

use App\Helpers\Contracts\MenuContract;

class MenuShip implements MenuContract
{

    public function make()
    {

        return 'Houston, we have ignition';

    }

}