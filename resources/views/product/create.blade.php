
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
                <h2>Contact Form</h2>
                <form id="ContactForm" action="{{ route('product.store') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                <div>
                        <div  class="wrapper">
                            <span>Nombre:</span>
                            <div class="bg"><input type="text" class="input" name="name"></div>
                        </div>
                        <div  class="wrapper">
                            <span>Precio:</span>
                            <div class="bg"><input type="text" class="input" name="price" ></div>
                        </div>
                        <div  class="wrapper">
                            <span>Marca:</span>
                            <div class="bg"><input type="text" class="input" name="brand" ></div>
                        </div>
                        <div  class="textarea_box">
                            <span>Descripción:</span>
                            <div class="bg"><input type="text" class="input" name="description" ></div>
                        </div>
                        <button type="submit" class="button1">
                            Añadir Producto
                        </button>
                    </div>
                </form>



            </div>
        </article>

@endsection