@extends('default')
@section('content')

    <div>
        <a href="{{ route('categorie.create')}}"> Ajouter une categorie </a>
    </div>

    @foreach($categories as $category)
        <!--dd($post);-->
        <h1>{{ $category->name }}</h1>
        <div><a href="{{ route('categorie.edit', $category->id)}}"> Editer la categorie </a></div>
    @endforeach
    
@endsection