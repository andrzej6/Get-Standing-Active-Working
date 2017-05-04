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
        <img src="{{ url('/') }}/img/aw/slider/subpage/consultancy.jpg" alt="microsoft" class="aw-wheel goto">
    </div><!-- .row-fluid -->

    @include('shared.trail')
    <br/>

    <h1 class="activeworking">Educational content that delivers</h1>


    <div class="gbsintro">

        We receive regular feedback that education has been a key issue for companies
        trying to promote Active Working. There are often many hurdles to overcome
        with often quite simple solutions and advice.<br/><br/>

        Active Working™ provide a series of resources which will assist you with education
        in your workplace.

        <br/><br/><br/>


        <div class="bluetitle activeworking">Posters</div>

        <strong>The following posters are available FREE to members of the Active
            Working Network™. They may be customised to include your company Logo.</strong>
        <span class="gbs-bunderline"><a href="contact">Apply to join today</a></span>.
        <br/><br/>

        <div class="activeworking-posters">

            <img src="{{ url('/') }}/img/aw/posters/b1-10-ways.jpg" class="darken border">
            <img src="{{ url('/') }}/img/aw/posters/b2-health-risks.jpg"  class="darken border">
            <img src="{{ url('/') }}/img/aw/posters/b3-calculator.jpg"  class="darken border">


            <img src="{{ url('/') }}/img/aw/posters/b4-benefits.jpg"  class="darken border">
            <img src="{{ url('/') }}/img/aw/posters/b5-stand-deliver.jpg"  class="darken border">
            <img src="{{ url('/') }}/img/aw/posters/b6-get-up.jpg"  class="darken border">



            <img src="{{ url('/') }}/img/aw/posters/b8-walking-meeting.jpg"  class="darken border">
            <img src="{{ url('/') }}/img/aw/posters/b9-take-stairs.jpg"  class="darken border">
            <img src="{{ url('/') }}/img/aw/posters/b10-take-opportunity.jpg"  class="darken border">


        </div>

        <br/>


        <div class="bluetitle activeworking">Webinars</div>
        We are planning a series of webinars for members of Active Working Network™.
        Webinars enable members to learn more about “Best Practise” and ask key questions to our experts.
        <br/><br/><br/>


        <div class="bluetitle activeworking">Seminars and Workshops</div>
        Why not host an Active Working Seminar™ or Active Working Workshop™, in your workplace. These
        can be tailored according to your specific needs. <a href="contact"><u>Contact us</u></a> for more information.
        <br/><br/>


        <hr class="light">
    </div>



@endsection


@section('content-restofsmall')
    <img src="{{ url('/') }}/img/aw/ads/message/who.png" class="restofsmall-pic" alt=""/>

    <a href="http://onyourfeetday.com/britain" class="darken" target="_blank">
        <img src="{{ url('/') }}/img/getstanding/gb/ads/oyf/oyf18.jpg" alt="oyf"/>
    </a>

    <img src="{{ url('/') }}/img/aw/ads/message/feel_alternating1.png" class="restofsmall-pic" alt=""/>




@endsection


@section('footer-scripts')
    @parent
    <script type="text/javascript" src="{{ url('/') }}/js/shared/sliderscript-side.js"></script>
@endsection

