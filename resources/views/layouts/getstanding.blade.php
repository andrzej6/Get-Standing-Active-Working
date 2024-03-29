<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
     @yield('meta')

    <title>
        @yield('title')
    </title>


    @yield('favicon')

    <!-- FONTS FROM GBS-->
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    @yield('header-fonts')

    <link rel="stylesheet" type="text/css" href="css/shared/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/shared/bootstrap-responsive.css">
    <link rel="stylesheet" type="text/css" href="css/shared/theme.css">
    <link rel="stylesheet" type="text/css" href="css/shared/colors/color-default.css" id="theme_color">

    <link rel="stylesheet" type="text/css" href="css/shared/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/shared/jquery-ui.css">

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

        @include('shared.international_block')
        @yield('mainlogo')


        <nav>
            @yield('oyfshortcut')
            {!! $mainMenuOutput !!}
        </nav>

        <nav class="mobile_header">
            <select id="mobile_select"></select>
        </nav>

    </div><!-- .header_wrapper -->

    <div class="clear"></div>

</header>


@include('shared.popup')


<div class="content_wrapper">

    <div class="container">

        <div class="content_block no-sidebar row">

            <div class="fl-container span12">

                <div class="row">

                    <div class="posts-block span12">

                        @yield('content')

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



@yield('before-scripts')

<script type="text/javascript" src="js/shared/1.7.2.jquery.min.js"></script>
<script type="text/javascript" src="css/shared/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<script type="text/javascript" src="js/shared/jquery-ui.js"></script>
<script type="text/javascript" src="js/shared/jquery.onebyone.min.js" ></script>
<script type="text/javascript" src="js/shared/theme.js"></script>

<script type="text/javascript" src="js/shared/jquery.cookie.js"></script>


@yield('footer-scripts')

</body>
</html>