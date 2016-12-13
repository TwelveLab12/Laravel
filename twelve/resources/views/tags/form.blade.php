<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

{!! Form::model($tag, $options) !!}

    <div class="form-group">
        {!! Form::label('name', 'Tag') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Valider', ['class' => 'btn btn-primary']) !!}
    </div>

{!! Form::close() !!}