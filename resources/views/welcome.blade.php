@extends('layouts.app')

@section('content')

    <body id="page1">

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
                    <li class="active"><a href="{{ url('/') }}"><span>Inicio</span></a></li>
                    <li><a href="{{ url('/product') }}"><span>Productos</span></a></li>
                    <li><a href="{{ url('/car') }}"><span>Autos</span></a></li>
                    {{--<li><a href="{{ url('/products_list') }}"><span>Lista de Productos</span></a></li>--}}
                    {{--<li><a href="{{ url('/product_products_list') }}"><span>Producto Lista de Productos :v</span></a></li>--}}
                    <li><a href="{{ url('/sale') }}"><span>Ventas</span></a></li>
                    <li><a href="{{ url('/repair') }}"><span>Reparaciones</span></a></li>
                </ul>
            </nav>
            <div id="slider">
                <ul class="items">
                    <li>
                        <img src="{!! asset('site/images/img1.jpg') !!}" alt="">
                        <div class="banner">
                            <span class="title"><span class="color2">We Have</span><span class="color1">Propositions</span><span>For Everybody</span></span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor.</p>
                            <a href="#" class="button1">Read More</a>
                        </div>
                    </li>
                    <li>
                        <img src="{!! asset('site/images/img2.jpg') !!}" alt="">
                        <div class="banner">
                            <span class="title"><span class="color2">Fresh Ideas</span><span class="color1">For Growing</span><span>Your Business</span></span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor.</p>
                            <a href="#" class="button1">Read More</a>
                        </div>
                    </li>
                    <li>
                        <img src="{!! asset('site/images/img3.jpg') !!}" alt="">
                        <div class="banner">
                            <span class="title"><span class="color2">The Best</span><span class="color1">You Can Find</span><span>On The Web</span></span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor.</p>
                            <a href="#" class="button1">Read More</a>
                        </div>
                    </li>
                </ul>
            </div>
        </header>
        <article id="content"><div class="ic">More Website Templates @ TemplateMonster.com - November 14, 2011!</div>
            <div class="wrapper">
                <div class="col1 marg_right1">
                    <h2>Consulting</h2>
                    <p>Superior.com is one of <a href="http://blog.templatemonster.com/free-website-templates/" target="_blank">free website templates</a> created by TemplateMonster.com. It is also XHTML & CSS valid.</p>
                </div>
                <div class="col1 marg_right1">
                    <h2>Analysis</h2>
                    <p>This website template has sev- eral pages: <a href="index.html">Home</a>, <a href="Company.html">Company</a>, <a href="Solutions.html">Solutions</a>, <a href="Services.html">Services</a>, <a href="Contacts.html">Contact Us</a> (contact form – doesn’t work).</p>
                </div>
                <div class="col1 marg_right1">
                    <h2>Strategy</h2>
                    <p>This <a href="http://blog.templatemonster.com/2011/11/14/free-website-template-jquery-slider-business-project/" target="_blank">Superior Template</a> goes with two packages. PSD source files are available for the registered members.</p>
                </div>
                <div class="col1">
                    <h2>Services</h2>
                    <ul class="list1">
                        <li><a href="#">Sed ut perspiciatis unde </a></li>
                        <li><a href="#">Omnis iste natus errorsitvo</a></li>
                        <li><a href="#">Uptatem acusantium domque </a></li>
                        <li><a href="#">Laudantium totam rem</a></li>
                    </ul>
                </div>
            </div>
        </article>
    </div>

@endsection
