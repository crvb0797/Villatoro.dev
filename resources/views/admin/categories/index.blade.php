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

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@stop

@section('js')
    @livewireScripts

    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    {{-- CERRAR MODAL LUEGO DE CREAR EL POST --}}
    <script type="text/javascript">
        window.livewire.on('userStore', () => {
            $('#new_category').modal('hide');
        });
    </script>

    {{-- ALERTA --}}
    <script>
        Livewire.on('alert', function(message) {
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
            }
            toastr.success(message)
        });
    </script>
@stop
