<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function about() {
//        return 'A propos de moi';
        $title = 'A propos';
        return view('pages/about', ['title' => $title]);
    }
}
