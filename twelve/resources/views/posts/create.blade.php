@extends('default')
@section('content')

<div>
    <a href="{{ route('article.index') }}"> Retour aux articles </a>
    <h1>Créer un article</h1>
    @include('posts.form')
</div>
@endsection