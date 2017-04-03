@extends('layouts.aw.basic')

@section('header-styles')
    @parent
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/aw/summit.css">
@endsection


@section('content')
    <div  id="cont-width">

        <div class="contentarea">

            <div class="aw-smallwidth">

                @include('shared.trail')
                <br/>

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
                                    @yield('partnersleft')
                            </div>
                        </div>

                        <div class="slider-sidemenu" id="slidersub">

                            <div class="row-fluid">
                                @yield('top-content')
                            </div><!-- .row-fluid -->


                            <div class="aw-maincontent">
                                @yield('aw-maincontent')
                            </div> <!-- aw-maincontent-->
                        </div>


                        <div class="clear"></div>
                    </div>



                </div>

            </div>

            <div class="aw-restofsmall" id="oyf-follow" >
                @yield('partnersright')
            </div>

        </div>  <!--post block span12-->


    </div>
@endsection


@section('footer-scripts')
    @parent
    <script type="text/javascript" src="{{ url('/') }}/js/aw/summit.js"></script>
@endsection