<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">

    <meta name="google-site-verification" content="ngVJhr0N-DOfuKoyY_D9uexFyJyUE25hVfS0IdkZ34E" />


    <title>
        @yield('title')
    </title>


    <!-- FONTS FROM GBS-->
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    @yield('header-fonts')

    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/shared/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/shared/bootstrap-responsive.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/shared/theme.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/shared/colors/color-default.css" id="theme_color">

    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/shared/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/shared/jquery-ui.css">

    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/oyf/main.css">

    @yield('header-styles')

    <style>
        body {
        }
    </style>
</head>


<body id="app-layout">
<!-- H E A D E R -->
<header style="min-height: 50px">

    <div class="header_wrapper container" style="min-height: 50px">
        @include('shared.oyf.oyf_international_block')
    </div><!-- .header_wrapper -->

    <div class="clear"></div>

</header>


<div class="content_wrapper">

    <div class="container">

        <div class="content_block no-sidebar row">

            <div class="fl-container span12">

                <div class="row">

                    <div class="posts-block span12" id="cont-width">

                        <div class="contentarea">

                            <div class="aw-smallwidth">
                                <div class="row-fluid content_text">


                                    <div class="aw-button-cont">
                                        <a class="aw-menu-button" id="aw-menub" href="">
                                            <img src="{{ url('/') }}/img/general/toggle-button.png"/> &nbsp; <strong>MENU</strong>
                                        </a>
                                    </div>


                                    <div id="main-sidemenu">

                                        <div class="left-sidemenu">
                                            <ul class="left-sidemenu-list" id="aw-navig">
                                                @yield('left-sidemenu')
                                            </ul>

                                            <div class="aw-partnersleft">
                                                <div class="aw-partnersleft1">
                                                    @yield('partnersleft')
                                                </div>
                                            </div>
                                        </div>

                                        <div class="slider-sidemenu" id="slidersub">

                                            <div class="row-fluid">
                                                @yield('oyf-slider')
                                            </div><!-- .row-fluid -->


                                            <div class="aw-maincontent">
                                                @yield('aw-maincontent')
                                            </div> <!-- aw-maincontent-->
                                        </div>


                                        <div class="clear"></div>
                                    </div>



                                </div>

                            </div>

                            <div class="aw-restofsmall" id="oyf-follow">
                                @yield('aw-restofsmall')
                            </div>

                        </div>  <!--post block span12-->


                        <div class="left-sidebar-block span3">
                            <!-- Left Sidebar Text -->
                        </div><!-- .left-sidebar -->
                    </div>

                </div>  <!-- row -->

            <div class="clear"><!-- ClearFix --></div>

        </div><!-- .fl-container -->

            <div class="right-sidebar-block span3">
                <aside class="sidebar">
                </aside>

            </div><!-- .right-sidebar -->

            <div class="clear"><!-- ClearFix --></div>


        </div>  <!-- content-block no-sidebar row -->

    </div><!-- .container -->

</div><!-- .content_wrapper -->


@include('shared.oyf.footer')




@yield('before-scripts')

<script type="text/javascript" src="{{ url('/') }}/js/shared/1.7.2.jquery.min.js"></script>
<script type="text/javascript" src="{{ url('/') }}/css/shared/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<script type="text/javascript" src="{{ url('/') }}/js/shared/jquery-ui.js"></script>
<script type="text/javascript" src="{{ url('/') }}/js/shared/jquery.onebyone.min.js" ></script>
<script type="text/javascript" src="{{ url('/') }}/js/shared/theme.js"></script>

<script type="text/javascript" src="{{ url('/') }}/js/oyf/main.js"></script>

@yield('footer-scripts')

</body>
</html>