@extends('layouts.app')

@section('content')

    @if (count($repairs) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Servicio de Reparación
            </div>

            <div class="panel-body">
                <table class="table table-striped product-table">

                    <thead>
                    <th>Nombre del cliente</th>
                    <th>Nit del Cliente</th>
                    <th>Precio</th>
                    <th>Precio Total</th>
                    </thead>

                    <tbody>
                    @foreach ($repairs as $repair)
                        <tr>
                            <td class="table-text">
                                <div>{{ $repair->client_name }}</div>
                            </td>

                            <td>
                                <div>{{ $repair->client_nit }}</div>
                            </td>

                            <td>
                                <div>{{ $repair->price }}</div>
                            </td>

                            <td>
                                <div>{{ $repair->total_price }}</div>
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
            <a href="repair/create">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Añadir nueva Reparación
                </button>
            </a>
        </div>
    </div>

@endsection