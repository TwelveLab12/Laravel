@extends('default')
@section('content')

    <div>
        <a href="{{ route('article.create')}}"> Ajouter un article </a>
    </div>

    @foreach($posts as $post)
        <!--dd($post);-->
        <h1>{{ $post->title }}</h1>
        <div>{{ $post->content }}</div>
        <div><a href="{{ route('article.edit', $post->id)}}"> Editer l'article </a></div>
    @endforeach
    
@endsection