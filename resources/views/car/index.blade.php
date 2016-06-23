@extends('layouts.app')

@section('content')

    @if (count($cars) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Carro
            </div>

            <div class="panel-body">
                <table class="table table-striped product-table">

                    <thead>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Color</th>
                    </thead>

                    <tbody>
                    @foreach ($cars as $car)
                        <tr>
                            <td class="table-text">
                                <div>{{ $car->brand}}</div>
                            </td>
                            <td>
                                <div>{{ $car->model }}</div>
                            </td>
                            <td>
                                <div>{{ $car->color}}</div>
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
            <a href="car/create">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Añadir Carro Nuevo
                </button>
            </a>
        </div>
    </div>

@endsection