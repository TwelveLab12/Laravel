<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

@extends('default')
@section('content')
<form action="{{ route('link.store') }}" method="POST" >
    <div class="form-group">
        <label for="url"> Lien à raccourcir </label>
        <input type="text" name="params[url]" id="params_url" placeholder="http://..." class="form-control" />
        <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}"  />
    </div>
    <div class="form-group">
        <button class="btn btn-primary">
            Valider
        </button>
    </div>
</form>
    
@endsection