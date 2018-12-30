@extends('templates::base')

@section('title')
    Productos
@endsection

@section('subtitle')
    Ejecutar Comandos
@endsection

@section('content')

    <form class="form-horizontal" method="POST" role="form">
        {{ csrf_field() }}

        @include('templates::forms.horizontal.area', [
            'id' => 'csv',
            'name' => 'Csv: *',
            'placeholder' => ''
        ])


        @include('templates::forms.horizontal.buttonPrimary', [
          'name' => 'Ejecutar',
        ])
    </form>

@endsection