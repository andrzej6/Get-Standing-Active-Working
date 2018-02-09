@extends('layouts.gusa.basic-sub')


@section('description')
    Advice on how to reduce your health risks. Minor changes, exercises or movement will significantly
    reduce your health risks
@endsection

@section('keywords')
    active-working, productive-working, office-productivity, office-work, sit-stand-solutions,
    advice, sit-stand-desk, standing-desk, ergonomic, workstation, movement, height-adjustable-desk,
    variable-height-desk, healthy-office, treadmill-desk, desk-riser, desk-mount, home-office,
    health-and-safety, wellness
@endsection

@section('title')
    Active Working, Productive Working, Healthy Office, Sit-Stand Solutions, Minor Changes,
    Exercises or Movement Reduce Health Risks.
@endsection



@section('content-smallwidth')
    <div class="row-fluid nonavarrows">
        <img src="img/aw/slider/subpage/consultancy.jpg" alt="microsoft">
    </div><!-- .row-fluid -->

    @include('shared.trail')
    <br/>

    <h1 class="activeworking">Official Supporters</h1>  <br/>


    If you share our passion about reducing sedentary behaviour why not become an "Official Supporter" of Active Working campaign.
    We have a variety of packages available and would be delighted to discuss these with you. For more information please contact:
    <span id="email_hidden"><b>@</b></span>


    <br/><br/>
    <hr class="light">

@endsection


@section('content-restofsmall')


    <a href="http://onyourfeetday.com/america" class="darken" target="_blank">
        <img src="img/getstanding/usa/ads/oyf/oyf18c.jpg" alt="oyf"/>
    </a>


    <a href="mailto:partnerships@activeworking.com?Subject=Official%20Supporters%20%2D%20Get%20America%20Standing"
       class="darken">
        <img src="img/getstanding/usa/ads/supporters/join-us.png" />
    </a>

@endsection


@section('footer-scripts')
    @parent
    <script type="text/javascript" src="js/shared/sliderscript-side.js"></script>

    <script type="text/javascript">
        var s="=b!isfg>#nbjmup;qbsuofstijqtAbdujwfxpsljoh/dpn#?qbsuofstijqtAbdujwfxpsljoh/dpn=0b?";
        m=""; for (i=0; i<s.length; i++) m+=String.fromCharCode(s.charCodeAt(i)-1);
        document.getElementById('email_hidden').innerHTML=m;
    </script>
@endsection

