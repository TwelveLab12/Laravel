@extends('default')
@section('content')

    <div>
        <a href="{{ route('tag.create')}}"> Ajouter un tag </a>
    </div>

    @foreach($tags as $tag)
        <!--dd($tag);-->
        <h1>{{ $tag->name }}</h1>
        <div><a href="{{ route('tag.edit', $tag->id)}}"> Editer tag </a></div>
    @endforeach
    
@endsection