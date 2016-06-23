
@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->


        <!-- New Task Form -->
        <form action="{{ route('sale.store') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <!-- Task Name -->
            <div class="form-group">
                <label for="client-name" class="col-sm-3 control-label">Nombre del Cliente</label>

                <div class="col-sm-6">
                    <input type="text" name="client_name" id="client-name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="client-nit" class="col-sm-3 control-label">Nit del Cliente</label>

                <div class="col-sm-6">
                    <input type="text" name="client_nit" id="client-nit" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="total_price" class="col-sm-3 control-label">Precio Total</label>

                <div class="col-sm-6">
                    <input type="text" name="total_price" id="total-price" class="form-control">
                </div>
            </div>
            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Añadir Venta
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- TODO: Current Tasks -->
@endsection