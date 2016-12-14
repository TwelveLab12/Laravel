@extends('default')

@section('content')
    @foreach($posts as $post)
        <h1>{{ $post->title }}</h1>
        <div>{{ $post->content }}</div>
        <div><a href="{{ route('article.show', $post->id)}}"> Voir l'article </a></div>
    @endforeach
@endsection
    