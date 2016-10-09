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
                        <img src="img/aw/slider/subpage/accreditation2.jpg" alt="microsoft" class="aw-wheel goto">
                    </div>


                </div>

            </div>

        </div>

    </div><!-- .row-fluid -->

    @include('shared.trail')
    <br/>

    <div class="gbs-psupport">


        <div>
            <strong>If your organisation needs assistance and advice to secure the <span class="gbs-boldnu">optimum sit-stand solutions</span> at the
            <span class="gbs-boldnu">most competitive pricing</span> then we are here to help:</strong>
        </div>


        <br/>
        <ol>
            <li>Define trial objectives, methodology and requirements</li>
            <li>Select ONE or more product solutions for duration of trial</li>
            <li>Follow guidelines for user recruitment, rotation and selection</li>
            <li>Provide induction training and awareness materials</li>
            <li>It may be appropriate to include health management staff in the monitoring programme (i.e. test blood sugar levels, weight before / after one month etc.)</li>
            <li>Support the business case for further roll-out of Sit-Stand equipment</li>
            <li>Ensure that any Sit-Stand product procurement will be at best available terms</li>
            <li>Provide alternative purchase financing options</li>
            <li>Provide full training guidelines to users</li>
        </ol>


        <br/>
        We can support you at three levels:

        <br/><br/>
        <div><span class="gbs-tabsupport">Basic Trial</span> Educational support and guidelines. </div>
        <div><span class="gbs-tabsupport">Extensive Trial </span> Multiple solutions with educational support and guidelines.</div>
        <div><span class="gbs-tabsupport">Full Project </span> RFP design and response appraisal.</div>

    </div>

    <br/>
    <hr class="light">

@endsection


@section('content-restofsmall')
    <img src="img/aw/ads/message/standing_great.jpg" class="restofsmall-pic" alt=""/>

    <a href="mailto:partnerships@activeworking.com?Subject=Official%20Supporters%20%2D%20Get%20Australia%20Standing"
       class="darken">
        <img src="img/getstanding/aus/ads/supporters/join-us.png" />
    </a>


    <img src="img/aw/ads/message/feel_alternating1.png" class="restofsmall-pic" alt=""/>

@endsection


@section('footer-scripts')
    @parent
    <script type="text/javascript" src="js/shared/sliderscript-side.js"></script>
@endsection

