@extends('layouts.app')

@section('content')

    <body id="page2">

    <div class="main">
        <!--header -->
        <header>
            <div class="wrapper">
                <h1><a href="/" id="logo">Repuestín</a></h1>
                <h1 style="float: right;">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Ingresar</a></li>
                            <li><a href="{{ url('/register') }}">Registrarse</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Salir</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </h1>
            </div>
            <nav>
                <ul id="menu">
                    <li><a href="{{ url('/') }}"><span>Inicio</span></a></li>
                    <li><a href="{{ url('/product') }}"><span>Productos</span></a></li>
                    <li class="active"><a href="{{ url('/car') }}"><span>Autos</span></a></li>
                    <li><a href="{{ url('/sale') }}"><span>Ventas</span></a></li>
                    <li><a href="{{ url('/repair') }}"><span>Reparaciones</span></a></li>
                </ul>
            </nav>
        </header>

        <article id="content"><div class="ic">More Website Templates @ TemplateMonster.com - November 14, 2011!</div>
            <div class="wrapper">
                <div class="col2 marg_right1">
                    <h2>Autos</h2>
                    <div class="wrapper">

                        @if (count($cars) > 0)
                            <div class="panel panel-default">
                                <div class="panel-heading">

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
                                                    {{ $car->brand }}
                                                </td>

                                                <td>
                                                    {{ $car->model}}
                                                </td>

                                                <td>
                                                    {{ $car->color}}
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
                                <a type="submit" class="button1" href="car/create">
                                    Crear Auto Nuevo
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </article>

    </div>

@endsection