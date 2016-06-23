
@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->


        <!-- New Task Form -->
        <form action="{{ route('repair.store') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <!-- Task Name -->
            <div class="form-group">
                <label for="car-name" class="col-sm-3 control-label">Nombre p</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="product-name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="price" class="col-sm-3 control-label">Precio</label>

                <div class="col-sm-6">
                    <input type="text" name="price" id="product-price" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="brand" class="col-sm-3 control-label">Marca</label>

                <div class="col-sm-6">
                    <input type="text" name="brand" id="product-brand" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="description" class="col-sm-3 control-label">Descripción</label>

                <div class="col-sm-6">
                    <input type="text" name="description" id="product-description" class="form-control">
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Añadir Producto
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- TODO: Current Tasks -->
@endsection