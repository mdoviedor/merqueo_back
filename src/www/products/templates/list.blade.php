@extends('templates::base')

@section('title')
    Productos
@endsection

@section('subtitle')
    Listar
@endsection

@section('content')


    <a class="btn btn-primary" href="{{ route('products-create') }}">
        Nuevo
    </a>

    <a class="btn btn-primary" href="{{ route('products-csv-load') }}">
        Ejecutar Comandos
    </a>

    <br>

    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Estado</th>
                <th>Creado El</th>
                <th>Actualizado El</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>
                        {{--<a href="{{ route('admin.categories.view', ['id' => $category->id]) }}">--}}
                            {{ $product->id  }}
                        {{--</a>--}}
                    </td>
                    <td>{{ $product->name  }}</td>
                    <td>{{ $product->amount  }}</td>
                    <td>{{ $product->state ? 'Activo' : 'Incativo'  }}</td>
                    <td>{{ $product->created_at->format('Y-m-d H:i')}}</td>
                    <td>{{ $product->updated_at->format('Y-m-d H:i')}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection