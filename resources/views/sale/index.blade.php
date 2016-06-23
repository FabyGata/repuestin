@extends('layouts.app')

@section('content')

    @if (count($sales) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Ventas
            </div>

            <div class="panel-body">
                <table class="table table-striped product-table">

                    <thead>
                    <th>Nombre del cliente</th>
                    <th>Nit del cliente</th>
                    <th>Precio Total</th>
                    </thead>

                    <tbody>
                    @foreach ($sales as $sale)
                        <tr>
                            <td class="table-text">
                                <div>{{ $sale->client_name }}</div>
                            </td>

                            <td>
                                <div>{{ $sale->client_nit }}</div>
                            </td>

                            <td>
                                <div>{{ $sale->total_price }}</div>
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
            <a href="sale/create">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Añadir Venta Nueva
                </button>
            </a>
        </div>
    </div>

@endsection