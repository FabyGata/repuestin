@extends('layouts.app')

@section('content')

    @if (count($products_list) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Lista de Productos
            </div>

            <div class="panel-body">
                <table class="table table-striped product-table">

                    <thead>
                    <th>Id</th>
                    </thead>

                    <tbody>
                    @foreach ($products_list as $products_list)
                        <tr>
                            <td class="table-text">
                                <div>{{ $products_list->id }}</div>
                            </td>

                        </tr>
                    @endforeach
@endif
    <div class="form-group">
        <div class="col-sm-6">
            <a href="products_list/create">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Añadir Lista de producto Nuevo
                </button>
            </a>
        </div>
    </div>
@endsection