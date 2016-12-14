@extends('layouts.aw.summit-2017')

@section('header-styles')
    @parent
@endsection


@section('description')
    Active Working provide thought leadership to reduce prolonged sitting in the workplace. Working with government,
    medical science, health charities and employers.
@endsection

@section('keywords')
    active-working, productive-working, office-productivity, sit-stand, standing-desk, stand-up desk, sit-n-stand,
    wellness, office-wellness, employee-wellness, sedentary-office, wellbeing, physical-activity, employee-engagement,
    staff-resilience, stress-management, productivity, occupational-health, height-adjustable-desk, healthy-office, health-and-safety,
    office-wellbeing, well-being
@endsection

@section('title')
    Active Working Summit 2017. Venue
@endsection


@section('aw-maincontent')
    <br/>
    <div class="aw-tabbed-div">
        <span class="aw-tabbed"><strong>Venue:</strong></span>
        <span>K&L Gates LLP, One New Change, London, EC4M 9AF, United Kingdom</span>
    </div>

    <br/>
    <img src="{{ url('/') }}/img/aw/summit/venue-17.jpg"/>
    <br/><br/><br/>


    <div class="aw-tabbed-div">
        <span class="aw-tabbed"><strong>Location:</strong></span>
        <span>Google Maps <a href="{{ url('/') }}/img/aw/summit/location-17.JPG" download>
                <img src="{{ url('/') }}/img/general/icons/download.png"></a></span>
    </div>

    <br/>

    <div id="map_canvas"></div>

@endsection


@section('footer-scripts')
    @parent
    <script src="{{ url('/') }}/js/aw/maps-17.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXxkSD5LUbLo03kiC-yPN-xLBnNlkKU0s&callback=initialize"></script>


@endsection
