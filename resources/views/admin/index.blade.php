@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    <h1>villatoro.dev</h1>
@stop

@section('content')
    <p>Bienvenido administrador</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
