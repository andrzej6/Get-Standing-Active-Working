@extends('layouts.gbs.subpage')


@section('description')
    Significant productivity gains and wellness improvements for your employees. Why companies are
    embracing sit-stand especially in Scandinavia
@endsection

@section('keywords')
    active-working, productive-working, office-productivity, productivity-improvements, sit-stand-solutions,
    sit-stand-information, sit-stand-desk, ergonomic, workstation, height-adjustable-desk, variable-height-desk,
    healthy-office, treadmill-desk, wellness
@endsection

@section('title')
    Key Information, Height Adjustable Desk, Productivity Gains, Wellbeing, Health.
@endsection



@section('content-smallwidth')
    <div class="row-fluid slider-small">

        <div class="span12 module_cont module_layer_slider">

            <div class="module_content slider_type1">

                <div id="banner1" class="OneByOne_container">

                    <div class="oneByOne_item ls_bg1">
                        <img src="img/aw/slider/subpage/aw-seminars.png" alt="seminars">
                    </div>

                </div>

            </div>

        </div>

    </div><!-- .row-fluid -->

    <div class="row-fluid">

        @include('shared.gbs.trail')
        <br/>

        <h1 class="activeworking">Key information </h1>

        <div class="keyinfolblue activeworking">
            Across, Norway, Sweden, Finland and Denmark over 90% of office workers using
            computers are working at Sit-Stand desks.
        </div>

        <br/><br/>

        Get Britain Standing believes one day it will be seen as irresponsible for
        Employers <u>not </u> to offer staff a Sit-Stand work-station. For the following reasons:<br/><br/>

        <div class="unorderedl">
            <ul>
                <li>Health insurance premiums will be higher if workers are kept sedentary</li>
                <li>Wellbeing, health and safety implications to office workers of prolonged sitting are getting growing attention</li>
                <li>Productivity improvements and office collaboration and cultural benefits or a more active working environment has a very fast payback</li>
            </ul>

            In Silicon Valley technology companies ranging from multinationals
            (e.g. Google, Facebook, Microsoft and Amazon) to new start-ups are
            increasingly embracing height adjustable desks as mainstream to their working environments.
        </div>



        <div class="gbs-expert activeworking">
            <br/><br/>
            If you need help preparing the business case for Sit-Stand within your company,
            <a href="contact">Contact Us</a> and we will do our best to help.

            <br/><br/>

            In January 2015 <strong>Public Health England </strong> and  <strong>Active Working C.I.C </strong>
            (owners of the Get Britain Standing campaign) jointly commissioned an
            <a href="expert_statement">Expert Statement</a> on the status and impact of prolonged sitting in the office
            <a href="pdfs/gbs/expert_statement.pdf">(Download)</a>.
            <br/><br/><br/>
        </div>

    </div><!-- .row-fluid -->


@endsection


@section('content-restofsmall')


    <img src="img/getstanding/gb/ads/message/standinggreat_green.png" class="restofsmall-pic" alt="standing" />

    <a href="onyourfeet" class="darken" target="_blank">
        <img src="img/getstanding/gb/ads/oyf/oyf2017.jpg" alt="oyf"/>
    </a>

    <img src="img/getstanding/gb/ads/message/feelaftergreen.png" class="restofsmall-pic" alt="feel after" />

@endsection


@section('footer-scripts')
    @include('shared.gbs.sliderscript-side')
@endsection

