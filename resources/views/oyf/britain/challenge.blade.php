@extends('layouts.oyf.gb')

@section('header-styles')
    @parent
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/oyf/mix.css">
@endsection

@section('description')
    On Your Feet. Regular minor movement whilst at work is essential for us to
    keep our bodies healthy, prevent illness and relieve stress. Sit-Stand workstations
    enabling us to mix it up between periods of sitting with standing.
@endsection

@section('keywords')
    on-your-feet, active-working, productive-working, office-productivity, sit-stand,
    sit-stand-desk, standing-desk, height-adjustable-desk,
    variable-height-desk, healthy-office, treadmill-desk, desk-riser, desk-mount, home-office,
    health-and-safety, wellness
@endsection

@section('title')
    On Your Feet Britain
@endsection



@section('aw-maincontent')

    <h1 class="oyf-newpink">The Challenge</h1>

    On 29th April, Get Britain Standing in association with Active Working are asking the nation to unite
    against prolonged office sitting by taking on the challenge to get on their feet. <br/><br/>

    We want workplaces and individuals across Britain to sit less and move more during their working day.


    <br/><br/><br/>
    <div class="oyf-newblue fbigger fbold">"Get up offa that thing" - ideas to get you moving</div><br/>



    <ul class="oyf-ultabbed">
        <li>Run a lunchtime fitness workshop for the office.</li>
        <li>An alert will sound at random times and everyone must stand up when it does. A fine for those caught napping.</li>
        <li>Take regular breaks from your computer, stand up, stretch and walk around the office. Ignore the bemused looks. </li>
        <li>Make phone calls standing up.</li>
        <li>Use the stairs.</li>
        <li>Have standing or walking meetings.</li>
        <li>Have one less chair than people at meetings.</li>
        <li>Get everyone to move around with each new agenda item.</li>
        <li>Ban internal emails. Everyone must walk to colleagues to discuss work. Be prepared that some people may have aged -
            depending on how long you’ve left it.</li>
        <li>Organise a lunchtime walk. Walk to work, or get off a few stops earlier and walk the rest of the way.</li>


    </ul>

    <br/>
    If you have any questions please email: <span id="email_hidden"><b>@</b></span>.

    <br/><br/>
    Don’t forget to inform your co-workers, other company colleagues and
    external business contacts that you are taking part.

    <br/><br/>

    <strong>#SitLess &nbsp;&nbsp;&nbsp;#MoveMore</strong>

@endsection



@section('footer-scripts')
    @parent
    <script type="text/javascript">

        var s="=b!isfg>#jogpAbdujwfxpsljoh/dpn#?jogpAbdujwfxpsljoh/dpn=0b?";
        m=""; for (i=0; i<s.length; i++) m+=String.fromCharCode(s.charCodeAt(i)-1);
        document.getElementById('email_hidden').innerHTML=m;
    </script>
@endsection

