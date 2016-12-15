<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EditPostRequest;
//use App\Http\Request;
use Illuminate\Support\Facades\App;
use Validator;

use App\Post;
use App\Category;
use App\Tag;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::get();
        return view('posts.index', compact('posts'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $post = new Post();
        $categories = Category::pluck('name', 'id');
        $tags = Tag::pluck('name', 'id');
        
        $options = array(
            'method' => 'POST',
            'url' => route('article.store'),
        );
        
        return view('posts.create', compact('post', 'categories', 'tags', 'options'));
        
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
        $post = Post::Create($request->all());
        return redirect(route('article.edit', $post));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);;
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //  with('category')->
        
        
        $post = POST::findOrFail($id);
        $categories = Category::pluck('name', 'id');
        $tags = Tag::pluck('name', 'id');
        
        $options = array(
            'method' => 'PUT',
            'url' => route('article.update', $post),
        );
        
        return view('posts.edit', compact('post', 'categories', 'tags', 'options'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditPostRequest $request, $id)
    {
        
        //  Post::$rules => PostModel : public static $rules
        $this->validate($request, Post::$rules);
        
        $post = Post::findOrFail($id);
        return redirect(route('article.edit', $id));
        
        
        //  Equivalent de $this->validate($request, Post::$rules);
        
        /*
         
        $validators  = Validator::make($request->all(), Post::$rules);
        
        if($validators->fails()){
            return redirect(route('article.edit', $id))->withErrors($validators->errors());
        }
        else{
            $post->update($request->all());
            return redirect(route('article.edit', $id));
        }
        */
        
        
        
        
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
}
