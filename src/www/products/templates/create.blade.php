@extends('templates::base')

@section('title')
    Productos
@endsection

@section('subtitle')
    Crear
@endsection

@section('content')

    <form class="form-horizontal" method="POST" role="form">
        {{ csrf_field() }}

        @include('templates::forms.horizontal.string', [
            'id' => 'name',
            'name' => 'Nombre: *',
            'placeholder' => 'Nombre'
        ])

        @include('templates::forms.horizontal.string', [
    'id' => 'reference',
    'name' => 'Referencia: *',
    'placeholder' => 'Referencia'
])


        @include('templates::forms.horizontal.number', [
'id' => 'price',
'name' => 'Precio: *',
'placeholder' => 'Precio'
])

        @include('templates::forms.horizontal.number', [
'id' => 'cost',
'name' => 'Costo: *',
'placeholder' => 'Costo'
])

        @include('templates::forms.horizontal.number', [
'id' => 'amount',
'name' => 'Cantidad: *',
'placeholder' => 'Cantidad'
])


        @include('templates::forms.horizontal.buttonPrimary', [
          'name' => 'Crear',
        ])
    </form>

@endsection