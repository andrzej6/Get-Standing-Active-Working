<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">

    <title>
        @yield('title')
    </title>

    <link rel="shortcut icon" type="image/x-icon" href="img/getstanding/gb/favicon.ico">

    <!-- FONTS FROM GBS-->
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    @yield('header-fonts')

            <!-- Styles
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    -->
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <link rel="stylesheet" type="text/css" href="css/shared/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/shared/bootstrap-responsive.css">
    <link rel="stylesheet" type="text/css" href="css/shared/theme.css">
    <link rel="stylesheet" type="text/css" href="css/shared/colors/color-default.css" id="theme_color">

    <link rel="stylesheet" type="text/css" href="css/shared/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/shared/jquery-ui.css">


    <!-- STYLES FROM GBS TO CLEAN UP -->
    <link rel="stylesheet" type="text/css" href="css/gbs/main.css">
    <link rel="stylesheet" type="text/css" href="css/gbs/mix.css">
    <link rel="stylesheet" type="text/css" href="css/gbs/popup.css">

    @yield('header-styles')

    <style>
        body {
        }
    </style>
</head>


<body id="app-layout">
<!-- H E A D E R -->
<header>

    <div class="header_wrapper container">

        @include('shared.gbs.international_block')

        <a href="{{ url('/') }}" class="logo"><img src="img/getstanding/gb/logos/main.png" alt=""  width="122" height="43" class="logo_def"></a>
        <nav>


            <div id="oyf-shortcut">
                <a href="onyourfeet" ><img src="img/oyf/gb/oyf-shortcut.png"></a>
            </div>

            {!! $mainMenuOutput !!}

        </nav>

        <nav class="mobile_header">
            <select id="mobile_select"></select>
        </nav>

    </div><!-- .header_wrapper -->

    <div class="clear"></div>

</header>

@include('shared.gbs.popup')


<div class="content_wrapper">

    <div class="container">

        <div class="content_block no-sidebar row">

            <div class="fl-container span12">

                <div class="row">

                    <div class="posts-block span12">

                        <div class="contentarea">


                            <div class="smallwidth">
                                @yield('content-smallwidth')
                            </div>

                            <div class="restofsmall">
                                @yield('content-restofsmall')
                            </div>

                            <div class="clear"></div>
                        </div> <!--contentarea-->

                    </div>  <!--post block span12-->

                    <div class="left-sidebar-block span3">
                        <!-- Left Sidebar Text -->
                    </div><!-- .left-sidebar -->
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



@include('shared.gbs.prefooter')
@include('shared.gbs.footer')

        <!-- JavaScripts below was present 2 lines
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
-->
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

<script type="text/javascript" src="js/shared/1.7.2.jquery.min.js"></script>
<script type="text/javascript" src="css/shared/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<script type="text/javascript" src="js/shared/jquery-ui.js" type="text/javascript"></script>
<script type="text/javascript" src="js/shared/jquery.onebyone.min.js" ></script>
<script type="text/javascript" src="js/shared/theme.js"></script>

<script type="text/javascript" src="js/shared/jquery.cookie.js"></script>
<script type="text/javascript" src="js/gbs/track.js"></script>

<script type="text/javascript" src="js/gbs/popup.js"></script>
<script type="text/javascript" src="js/gbs/main.js"></script>

<!--
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.24/vue.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.7.0/vue-resource.js"></script>
-->

@yield('footer-scripts')


</body>
</html>
