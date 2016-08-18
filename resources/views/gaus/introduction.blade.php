@extends('layouts.gaus.basic-sub')


@section('description')
    Advice on how to reduce your health risks. Minor changes, exercises or movement will significantly
    reduce your health risks.
@endsection

@section('keywords')
    active-working, productive-working, office-productivity, office-work, sit-stand-solutions, advice,
    sit-stand-desk, standing-desk, ergonomic, workstation, movement, height-adjustable-desk,
    variable-height-desk, healthy-office, treadmill-desk, desk-riser, desk-mount, home-office,
    health-and-safety, wellness
@endsection

@section('title')
    Active Working, Productive Working, Healthy Office, Sit-Stand Solutions, Minor Changes,
    Exercises or Movement Reduce Health Risks.
@endsection



@section('content-smallwidth')
    <div class="row-fluid slider-small">

        <div class="span12 module_cont module_layer_slider">

            <div class="module_content slider_type1">

                <div id="banner1" class="OneByOne_container">

                    <div class="oneByOne_item ls_bg2">
                        <img src="img/aw/slider/subpage/benefits.jpg" alt="benefits" class="aw-wheel goto">
                    </div>


                </div>

            </div>

        </div>

    </div><!-- .row-fluid -->

    @include('shared.trail')
    <br/>

    <h1 class="activeworking">Introduction to Active Working</h1>


    <div class="gbsintro">
        Active Working is a partnership of workplace experts committed to inform, educate and guide employers to the
        optimum active working solution for their workplace to deliver: <br/><br/>

        <ol>
            <li>Well-being improvements to your staff</li>
            <li>Productivity benefits</li>
            <li>Engagement increases</li>
            <li>Absenteeism reductions</li>
            <li>Cost savings to your business</li>
        </ol>

        70% of sedentary behaviour takes place at work. Active Working’s mission is to:
        <br/><br/>


        <ul>
            <li>Promote simple, concise and effective campaigns to key stakeholders on the health risks caused
                by prolonged sitting and excessive sedentary behaviour</li>
            <li>Articulate the business case for change towards Active Working for employers</li>
            <li>Build an international hub for evidence based workplace research</li>
        </ul>

    </div>



    <div class="gbs-expert activeworking">
        <br/><br/>

        In January 2015 <strong>Public Health England </strong> and  <strong>Active Working C.I.C </strong>
        (owners of the Get Britain Standing campaign) jointly commissioned an
        <a href="expert_statement">Expert Statement</a> on the status and impact of prolonged sitting in the office
        <a href="pdfs/gbs/expert_statement.pdf">(Download)</a>.
        <br/><br/><br/>
    </div>

    <br/>
    <hr class="light">

@endsection


@section('content-restofsmall')
    <img src="img/aw/ads/message/productivity.png" class="restofsmall-pic" alt="feel after"/>

    <img src="img/aw/ads/message/calorie_burn.png" class="restofsmall-pic" alt="who"/>


    <a href="aw_summit" class="darken">
        <img src="img/getstanding/aus/ads/summit2016-aw.jpg" alt="summit 2016"/>
    </a>

@endsection


@section('footer-scripts')
    @parent
    <script type="text/javascript" src="js/shared/sliderscript-side.js"></script>
@endsection

