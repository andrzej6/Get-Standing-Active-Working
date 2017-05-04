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
        <img src="{{ url('/') }}/img/aw/slider/subpage/seminars.jpg" alt="active" class="aw-wheel goto">
    </div><!-- .row-fluid -->


    @include('shared.trail')
    <br/>

    <h1 class="activeworking">Contact us today to host an Active Working Seminar</h1>
    <br/>

    <strong>Content</strong><br/><br/>
    Tailored to educate your choice of specific target audiences i.e. employees, senior professionals,
    facilities managers, human resources and occupational health staff.
    <br/><br/>

    <strong>Venue</strong><br/><br/>
    Hosted at your premises or a designated location.
    <br/><br/>

    <strong>Duration</strong>
    <br/><br/>
    30 - 45 minute content provided by Active Working CIC / Get Australia Standing.
    <br/><br/>

    <strong>Co-branding</strong><br/><br/>
    The Active Working Seminar may be co-branded with Get Australia Standing and a host or sponsor partner.


    <br/><br/><br/>
    <div class="link-line">
        <a class="link-underlined" href="mailto:info@activeworking.com">
            For more information contact us today.
        </a>
    </div>
    <br/>

    <hr class="light">

@endsection


@section('content-restofsmall')



    <img src="{{ url('/') }}/img/aw/ads/message/calorie_burn.png" class="restofsmall-pic" alt="who"/>

    <!--
    <img src="{{ url('/') }}/img/aw/ads/message/feel_alternating2.png" class="restofsmall-pic" alt="who"/>

     <a href="http://activeworking.com/summit/2017/introduction" class="darken" target="_blank">
        <img src="{{ url('/') }}/img/aw/ads/summit/awsummit17.jpg" alt="oyf"/>
    </a>

    -->

    <img src="{{ url('/') }}/img/aw/ads/message/productivity.png" class="restofsmall-pic" alt="who"/>

    <a href="http://onyourfeetday.com/britain" class="darken" target="_blank">
        <img src="{{ url('/') }}/img/getstanding/gb/ads/oyf/oyf18.jpg" alt="oyf"/>
    </a>




@endsection


@section('footer-scripts')
    @parent
    <script type="text/javascript" src="{{ url('/') }}/js/shared/sliderscript-side.js"></script>
@endsection

