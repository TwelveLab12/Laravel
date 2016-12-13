<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Input;
use \App\Link;

class LinksController extends Controller
{
    //
    public function index() {
        return 'false';
    }
        
    public function show($id) {
        $link = Link::findOrFail($id);
        return redirect($link->url, 301);
    }
        
    public function create() {
        return view('links.create');
    }
    public function store($param = false) {
        
        $params = Input::get('params');
        
        
        $link = Link::firstOrCreate(['url' => $params['url']]);

//         * Equivalent à :
//         
//        $link = Link::where('url', $params['url'])->first();
//        if(!$link){
//            $link = Link::create(Input::get('params'));
//        }

//        $url  = $params['url'];
//        $link = new Link();
//        $link->url = $url;
        
        return view('links.success', compact('link'));
    }
}
