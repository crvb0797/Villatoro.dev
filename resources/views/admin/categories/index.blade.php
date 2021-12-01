@extends('adminlte::page')

@section('title', 'Categorías')

@section('content_header')
    <h1>Listado de categorías</h1>
@stop

@section('content')
    @livewire('admin.categories')
@stop

@section('css')
    @livewireStyles
@stop

@section('js')
    @livewireScripts
@stop
