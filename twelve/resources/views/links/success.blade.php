<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

@extends('default')
@section('content')
<a href="{{ route('link.show', $link]) }}" class="btn btn-primary">
    {{ route('link.show', $link]) }}
</a>
@stop