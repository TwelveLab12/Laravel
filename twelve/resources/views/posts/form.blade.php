<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

@include('errors')

{!! Form::model($post, $options) !!}

    <div class="form-group">
        {!! Form::label('title', 'Titre') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('slug', 'Slug') !!}
        {!! Form::text('slug', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('content', 'Contenu') !!}
        {!! Form::textArea('content', null, ['class' => 'form-control']) !!}
    </div>

    <!--//  select($name, $list = [], $selected = null, $options = [])-->
    @if($categories) 
        <div class="form-group">
            {!! Form::label('categories', 'Categorie') !!}
            {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
        </div>
    @endif
    
    @if($tags) 
        <div class="form-group">
            
            {!! Form::label('tags_list[]', 'Tag') !!}
            {!! Form::select('tags_list[]', $tags, null, ['class' => 'form-control', 'multiple' => true]) !!}
        </div>
    @endif

    <div class="form-group">
        <label>
            {!! Form::checkbox('online', 1, null) !!}
            En ligne ?
        </label>
    </div>

    <div class="form-group">
        {!! Form::submit('Valider', ['class' => 'btn btn-primary']) !!}
    </div>

{!! Form::close() !!}