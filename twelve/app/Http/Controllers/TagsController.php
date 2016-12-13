<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tags = TAG::get();
        return view('tags.index', compact('tags'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tag = new Tag();
        $options = array(
            'methods' => 'POST',
            'route' => 'tag.store'
        );
        return view('tags.create', compact('tag', 'options'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $tag = TAG::create($request->all());
        return redirect(route('tag.edit',$tag));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $tag = TAG::findOrFail($id);
        $options = $this->edit_form_options($tag);
        return view('tags.edit', compact('tag', 'options'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $tag = TAG::findOrFail($id);
        $tag->update($request->all());
        return redirect(route('tag.edit', $id));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    
    private function edit_form_options($tag){
        
        return array(
            'method' => 'PUT',
            'url' => route('tag.update', $tag)
        );
        
    }
        
}
