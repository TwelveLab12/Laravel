@extends('default')
@section('content')

<div>
    <h1>Editer l'article</h1>
    <!--{   !! Form::open(['method' => 'PUT', 'url' => route('article.update', $post)]) !!}-->
    @include('tags.form')
</div>
@endsection