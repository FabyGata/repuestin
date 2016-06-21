@extends('layouts.app')

@section('content')

@if (count($products) > 0)
    <div class="panel panel-default">
        <div class="panel-heading">
            Productos
        </div>

        <div class="panel-body">
            <table class="table table-striped product-table">

                <thead>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Marca</th>
                <th>Descripción</th>
                </thead>

                <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td class="table-text">
                            <div>{{ $product->name }}</div>
                        </td>

                        <td>
                            <div>{{ $product->price }}</div>
                        </td>

                        <td>
                            <div>{{ $product->brand }}</div>
                        </td>

                        <td>
                            <div>{{ $product->description }}</div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endif

<div class="form-group">
    <div class="col-sm-6">
        <a href="product/create">
            <button type="submit" class="btn btn-default">
                <i class="fa fa-plus"></i> Añadir Producto Nuevo
            </button>
        </a>
    </div>
</div>

@endsection