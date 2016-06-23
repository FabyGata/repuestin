<!DOCTYPE html>
<html lang="en">
<head>
    <title>Autopartes Repuestín</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{!! asset('site/css/reset.css') !!}" type="text/css" media="all">
    <link rel="stylesheet" href="{!! asset('site/css/layout.css') !!}" type="text/css" media="all">
    <link rel="stylesheet" href="{!! asset('site/css/style.css') !!}" type="text/css" media="all">
    <script type="text/javascript" src="{!! asset('site/js/jquery-1.6.js') !!}" ></script>
    <script type="text/javascript" src="{!! asset('site/js/cufon-yui.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('site/js/cufon-replace.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('site/js/Vegur_300.font.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('site/js/PT_Sans_700.font.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('site/js/PT_Sans_400.font.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('site/js/tms-0.3.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('site/js/tms_presets.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('site/js/jquery.easing.1.3.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('site/js/atooltip.jquery.js') !!}"></script>
    <!--[if lt IE 9] -->
    <script type="text/javascript" src="{!! asset('site/js/html5.js') !!}"></script>
    <link rel="stylesheet" href="{!! asset('site/css/ie.css') !!}" type="text/css" media="all">
    <!-- [endif]-->
    <!--[if lt IE 7] -->
    {{--<div style=' clear: both; text-align:center; position: relative;'>--}}
        {{--<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a>--}}
    {{--</div>--}}
    <!-- [endif]-->
</head>
<body id="page1">

    @yield('content')

    <div class="main">
        <!--content end-->
        <!--footer -->
        <footer>
            <ul id="icons">
                <li class="first">Siguenos:</li>
                <li><a href="https://www.facebook.com/cristian.salinas.7921?fref=ts" class="normaltip" title="Facebook"><img src="{!! asset('site/images/icon1.jpg') !!}" alt=""></a></li>
                <li><a href="#" class="normaltip" title="Twitter"><img src="{!! asset('site/images/icon2.jpg') !!}" alt=""></a></li>
                <li><a href="#" class="normaltip" title="Picasa"><img src="{!! asset('site/images/icon3.jpg') !!}" alt=""></a></li>
                <li><a href="#" class="normaltip" title="YouTube"><img src="{!! asset('site/images/icon4.jpg') !!}" alt=""></a></li>
            </ul>
            CAVAR &copy; 2016 <br>Website Template by <a href="http://www.templatemonster.com/" target="_blank">TemplateMonster.com</a><br>
            <!-- {%FOOTER_LINK} -->
        </footer>
        <!--footer end-->
    </div>

    <script type="text/javascript"> Cufon.now(); </script>
    <script>
        $(window).load(function(){
            $('#slider')._TMS({
                banners:true,
                waitBannerAnimation:false,
                preset:'diagonalFade',
                easing:'easeOutQuad',
                pagination:true,
                duration:400,
                slideshow:8000,
                bannerShow:function(banner){
                    banner.css({marginRight:-500}).stop().animate({marginRight:0}, 600)
                },
                bannerHide:function(banner){
                    banner.stop().animate({marginRight:-500}, 600)
                }
            })
        })
    </script>

</body>
</html>
