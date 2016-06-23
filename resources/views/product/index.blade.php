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
                    <li class="active"><a href="{{ url('/product') }}"><span>Productos</span></a></li>
                    <li><a href="{{ url('/car') }}"><span>Autos</span></a></li>
                    {{--<li><a href="{{ url('/products_list') }}"><span>Lista de Productos</span></a></li>--}}
                    {{--<li><a href="{{ url('/product_products_list') }}"><span>Producto Lista de Productos :v</span></a></li>--}}
                    <li><a href="{{ url('/sale') }}"><span>Ventas</span></a></li>
                    <li><a href="{{ url('/repair') }}"><span>Reparaciones</span></a></li>
                </ul>
            </nav>
        </header>

        <article id="content"><div class="ic">More Website Templates @ TemplateMonster.com - November 14, 2011!</div>
            <div class="wrapper">
                <div class="col2 marg_right1">
                    <h2>Productos</h2>
                    <div class="wrapper">

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
                                                    {{ $product->name }}
                                                </td>

                                                <td>
                                                    {{ $product->price }}
                                                </td>

                                                <td>
                                                    {{ $product->brand }}
                                                </td>

                                                <td>
                                                    {{ $product->description }}
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
                                <a type="submit" class="button1" href="product/create">
                                    Añadir Producto Nuevo
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </article>

    </div>

@endsection