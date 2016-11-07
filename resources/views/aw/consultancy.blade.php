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

    <h1 class="activeworking">Learn from us. Start your journey.</h1>

    <div class="gbsintro">
        New research, new guidance, nascent policy, emerging commitment from business, government and 3rd  sector mean that
        Active Working and you have the opportunity to trigger a major (or minor) change with extraordinary benefits.
        <br/><br/>

        <ol>
            <li>Well-being improvements to your staff</li>
            <li>Productivity benefits</li>
            <li>Engagement increases</li>
            <li>Absenteeism reductions </li>
            <li>Cost savings to your business</li>
        </ol>


        <br/>
        We can assist your organisation in a number of ways:
        <br/>
        <br/>
        <ul>
            <li>Stakeholder education</li>
            <li>Business case for change towards Active Working </li>
            <li>Complement and support additional strategic priorities of your business</li>
            <li>Identify and evaluate the most appropriate solution for your people and organisation</li>
            <li>Provide pre and post installation support, evaluation and training</li>
            <li>Best practises to ensure maximum returns from Active Working</li>
        </ul>
    </div>



@endsection


@section('content-restofsmall')
    <img src="{{ url('/') }}/img/aw/ads/message/productivity.png" class="restofsmall-pic" alt=""/>

    <!--
    <a href="http://onyourfeetday.com" class="darken" target="_blank">
        <img src="{{ url('/') }}/img/getstanding/gb/ads/oyf/oyf2017.jpg" alt="oyf"/>
    </a>
    -->


    <a href="http://activeworking.com/summit/2017/book" class="darken" target="_blank">
        <img src="{{ url('/') }}/img/aw/ads/summit/awsummit2017.jpg" alt="oyf"/>
    </a>

    <img src="{{ url('/') }}/img/aw/ads/message/feel_alternating3.png" class="restofsmall-pic" alt=""/>




@endsection


@section('footer-scripts')
    @parent
    <script type="text/javascript" src="{{ url('/') }}/js/shared/sliderscript-side.js"></script>
@endsection

