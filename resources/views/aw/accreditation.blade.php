@extends('layouts.aw.basic-sub')


@section('description')
    Gain a formal recognition of competence in \"Active Working\".
@endsection

@section('keywords')
    active-working, productive-working, office-productivity, office-work, sit-stand-solutions, advice,
    sit-stand-desk, standing-desk, ergonomic, workstation, movement, height-adjustable-desk,
    variable-height-desk, healthy-office, treadmill-desk, desk-riser, desk-mount, home-office,
    health-and-safety, wellness
@endsection

@section('title')
    Active Working Accreditation
@endsection



@section('content-smallwidth')
    <div class="row-fluid slider-small">

        <div class="span12 module_cont module_layer_slider">

            <div class="module_content slider_type1">

                <div id="banner1" class="OneByOne_container">


                    <div class="oneByOne_item ls_bg1">
                        <img src="{{ url('/') }}/img/getstanding/gb/slider/subpage/survey-sub1.jpg" alt="survey" class="go-to go-to-survey">
                    </div>


                    <div class="oneByOne_item ls_bg1">
                        <img src="{{ url('/') }}/img/getstanding/gb/slider/subpage/survey-sub2.jpg" alt="survey" class="go-to go-to-survey">
                    </div>

                    <!--


                    <div class="oneByOne_item ls_bg2">
                        <img src="{{ url('/') }}/img/aw/slider/subpage/accreditation1.jpg" alt="recommend" class="aw-wheel goto">
                    </div>

                    <div class="oneByOne_item ls_bg2">
                        <img src="{{ url('/') }}/img/aw/slider/subpage/accreditation2.jpg" alt="recommend" class="aw-wheel goto">
                    </div>
                    -->


                </div>

            </div>

        </div>

    </div><!-- .row-fluid -->

    @include('shared.trail')
    <br/>

    <h1 class="activeworking"> Accreditation </h1>


    <div class="link-line">

        <br/>

        In conjunction with a series of leading stakeholders and industry experts we are developing
        an <strong>Active Working Accreditation</strong>™ programme.<br/><br/>

        There are a growing number of companies keen to showcase their success and
        reference Active Working™ as a key element of their standard working practices
        and commitment to staff wellbeing. <br/><br/>

        <strong>Active Working Accreditation</strong>™ will help companies attract and retain staff.
        Eventually it will become the norm as it is in Scandinavia where over 90% of office
        workers have access to sit-stand desks.<br/><br/>

        All companies who join the <strong>Active Working Network</strong> will be invited to apply for accreditation.<br/><br/>

        For more information please <a href="contact"><u>contact us</u></a>.<br/><br/>



        <hr class="light">
    </div>

@endsection


@section('content-restofsmall')
    <!--
    <a href="http://incorpore.co.uk/" class="darken" target="_blank">
        <img src="{{ url('/') }}/img/aw/supporters/incorpore.jpg"  alt="feel after"/>
    </a>
    -->

    <a href="http://onyourfeetday.com/britain" class="darken" target="_blank">
        <img src="{{ url('/') }}/img/getstanding/gb/ads/oyf/oyf18.jpg" alt="oyf"/>
    </a>

    <img src="img/aw/ads/message/feel_alternating1.png" alt="standing great" class="restofsmall-pic"/>

@endsection


@section('footer-scripts')
    @parent
    <script type="text/javascript" src="{{ url('/') }}/js/shared/sliderscript-side.js"></script>
@endsection