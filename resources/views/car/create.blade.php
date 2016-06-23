
@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->


        <!-- New Task Form -->
        <form action="{{ route('car.store') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}  <!-- clave-->

        <!-- Task Name -->
            <div class="form-group">
                <label for="brand" class="col-sm-3 control-label">Marca</label>

                <div class="col-sm-6">
                    <input type="text" name="brand" id="brand-car" class="form-control">
                </div>

            </div>

            <div class="form-group">
                <label for="model" class="col-sm-3 control-label">Modelo</label>

                <div class="col-sm-6">
                    <input type="text" name="model" id="car-model" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="color" class="col-sm-3 control-label">Color</label>

                <div class="col-sm-6">
                    <input type="text" name="color" id="car-color" class="form-control">
                </div>
            </div>


            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Añadir Auto
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- TODO: Current Tasks -->
@endsection