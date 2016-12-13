@extends('default')
@section('content')

<div>
    <a href="{{ route('categorie.index')}}"> Retour aux catégories </a>
</div>
<div>
    <h1>Editer l'article</h1>
    {!! Form::open(['method' => 'PUT', 'url' => route('categorie.update', $category)]) !!}

        <div class="form-group">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', $category->name, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('slug', 'Slug') !!}
            {!! Form::text('slug', $category->slug, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Valider', ['class' => 'btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}
</div>
@endsection