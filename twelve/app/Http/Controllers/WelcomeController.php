<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use \Request;
use Input;

class WelcomeController extends Controller
{
    //
    public function __construct() {
        $this->middleware('ip');
    }
    
    public function index(){
//        dd(Request::ip());
//        dd(Input::get('q'));
//        dd(Input::getFacadeRoot());
        return view('welcome');
    }
}
