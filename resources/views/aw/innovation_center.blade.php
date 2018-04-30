@extends('layouts.aw.basic-sub')


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
    <div class="row-fluid nonavarrows">
        <img src="{{ url('/') }}/img/aw/slider/subpage/accreditation1.jpg" alt="microsoft" class="aw-wheel goto">
    </div><!-- .row-fluid -->

    @include('shared.trail')
    <br/>

    <h1>Innovation Centre</h1>
    <br/>

    <div class="gbsintro">

        The <strong>Active Working Innovation Center </strong>has been established in partnership with EY (formerly Ernst & Young) to build the evidence
        and articulate the arguments for “optimum change alternatives” to reduce sedentary time in the office.

        <br/><br/>

        <ul>
            <li>Build the business case to support key performance indicators </li>
            <li>Design emerging guidance, accreditation, & qualifications to monitor Active Working</li>
            <li>Expand the breadth and depth of our stakeholder collaboration in the US</li>
        </ul>

        <br/>
        <strong>Active Working Innovation Center </strong> is working across multiple activities with major corporations.
    </div>


    <br/>


    <div class="link-line">
        <a href="mailto:info@activeworking.com">
            Contact us for further information
        </a>
    </div>


    <br/>
    <br/>
    <hr class="light">

@endsection


@section('content-restofsmall')
     <a href="http://onyourfeetday.com/britain" class="darken" target="_blank">
        <img src="{{ url('/') }}/img/getstanding/gb/ads/oyf/oyf19-gb.png" alt="oyf"/>
    </a>

    <a href="careers" target="_blank">
        <img src="{{ url('/') }}/img/aw/ads/message/careers.jpg" target="_blank" alt="bhwa" /> <br/>
    </a>

@endsection


@section('footer-scripts')
    @parent
    <script type="text/javascript" src="{{ url('/') }}/js/shared/sliderscript-side.js"></script>
@endsection

