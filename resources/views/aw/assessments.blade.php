@extends('layouts.aw.basic-sub')


@section('description')
    Designed to achieve good posture whilst both sitting and standing at a desk.
@endsection

@section('keywords')
    active-working, productive-working, office-productivity, office-work, sit-stand-solutions, advice,
    sit-stand-desk, standing-desk, ergonomic, workstation, movement, height-adjustable-desk,
    variable-height-desk, healthy-office, treadmill-desk, desk-riser, desk-mount, home-office,
    health-and-safety, wellness
@endsection

@section('title')
    Active Working Assessment
@endsection



@section('content-smallwidth')
    <div class="row-fluid slider-small">

        <div class="span12 module_cont module_layer_slider">

            <div class="module_content slider_type1">

                <div id="banner1" class="OneByOne_container">

                    <div class="oneByOne_item ls_bg2">
                        <img src="{{ url('/') }}/img/aw/slider/subpage/benefits.jpg" alt="recommend" class="aw-wheel goto">
                    </div>


                </div>

            </div>

        </div>

    </div><!-- .row-fluid -->

    @include('shared.trail')
    <br/>

    <h1 class="activeworking"> Assessments </h1>
    <br/>

    <div style="font-size: 22px;">Active Working Assessment™</div><br/><br/>

    <ul class="ul-awlist">
        <li>
            A standard Display Screen Equipment (DSE) assessment typically only provides seated position postural
            analysis and is designed in order to prevent any existing problems from getting worse.
        </li>

        <li>
            An <strong>Active Working Assessment</strong>™ is designed to achieve good posture whilst BOTH sitting
            and standing at your desk / office workstation. The <strong>Active Working Assessment</strong>™ also covers
            basic education on the wider health and productivity benefits of breaking up and reducing
            prolonged sedentary behaviour in particular the effective usage of sit-stand solutions.
        </li>

        <li>
            An <strong>Active Working Assessment</strong>™  therefore delivers better results in the following ways:


            <ol class="ol-awlist">
                <li>
                    Focus is on improving office worker’s general occupational  health and reducing the risks of common DSE problems occurring in the first place
                </li>

                <li>
                    Reduce the risks of existing problems persisting and the risks of further problems developing
                </li>

                <li>
                    More likely to result in resolution of  an existing problem
                </li>
            </ol>
        </li>
    </ul>

    <br/>
    <div class="bluetitle activeworking">Companies</div>
    To find out more about our <strong>Active Working Assessment</strong>™ please
    <a href="contact"><u>contact us</u></a>.<br/><br/>


    <div class="bluetitle activeworking">Suppliers</div>
    If you are interested in completing a qualification of the <strong>Active Working Assessment</strong>™ and providing a licensed assessments to companies
    <a href="contact"><u>contact us</u></a>.<br/><br/>

    <hr class="light">

@endsection


@section('content-restofsmall')
    <a href="http://onyourfeetday.com" class="darken" target="_blank">
        <img src="{{ url('/') }}/img/getstanding/gb/ads/oyf/oyf2017.jpg" alt="oyf"/>
    </a>

    <!--
    <img src="{{ url('/') }}/img/aw/ads/message/feel_alternating1.png" class="restofsmall-pic"  alt=""/>
    -->

    <a href="http://activeworking.com/summit/2017/book" class="darken" target="_blank">
        <img src="{{ url('/') }}/img/aw/ads/summit/awsummit2017.jpg" alt="oyf"/>
    </a>


        <img src="{{ url('/') }}/img/aw/ads/message/who.png" class="restofsmall-pic"  alt=""/>


@endsection


@section('footer-scripts')
    @parent
    <script type="text/javascript" src="{{ url('/') }}/js/shared/sliderscript-side.js"></script>
@endsection