@extends('default')
@section('content')

<div>
    <a href="{{ route('categorie.index')}}"> Retour au catégories </a>
    <h1>Créer une catégorie</h1>

    {!! Form::open(['url' => route('categorie.store')]) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('slug', 'Slug') !!}
            {!! Form::text('slug', null, ['class' => 'form-control']) !!}
        </div>
    
        <div class="form-group">
            {!! Form::submit('Valider', ['class' => 'btn btn-primary']) !!}
        </div>
    
    {!! Form::close() !!}
</div>
    
@endsection