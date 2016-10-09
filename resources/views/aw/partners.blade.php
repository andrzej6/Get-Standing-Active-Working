@extends('layouts.gcan.basic')

@section('header-styles')
    @parent
    <link rel="stylesheet" type="text/css" href="css/gcan/supporters.css">
@endsection

@section('description')
    Get Canada Standing is a campaign to educate on Active Working. Regular minor movement whilst at work is
    essential for us to keep our bodies healthy, prevent illness and relieve stress. Sit-Stand workstations
    enabling us to mix it up between periods of sitting with standing.
@endsection

@section('keywords')
    get-canada-standing, active-working, productive-working, office-productivity, sit-stand, sit-stand-desk,
    standing-desk, height-adjustable-desk,variable-height-desk, healthy-office, treadmill-desk, desk-riser,
    desk-mount, home-office, health-and-safety, wellness
@endsection

@section('title')
    Get Canada Standing. Active and Productive working. Sit-stand solutions. Partners
@endsection




@section('content')
    <div class="contentarea">
        <div class="row-fluid">


            <div class="span_full module_cont module_text_area">

                @include('shared.trail')

                <br/>

                <h1>Partners</h1>
                <br/>


                <div class="gb-partners-title">Get Canada Standing is delighted to be working with the following organisations:</div>
                <br/><br/><br/>





                <div class="aw-partners-row-s">

                    <div class="aw-partners-logo-s">
                        <a href="http://www.canadawalks.ca/" target="_blank"><img src="img/getstanding/can/partners/canada_walks.jpg"/></a>
                    </div>

                    <div class="aw-partners-text-s">
                        Canada Walks - promoting walking and walkable communities (a culture of walking),  because it's
                        healthy, good for the environment, sociable, and good for business. For program
                        overview visit  <a href="http://www.canadawalks.ca"><u>www.canadawalks.ca</u></a>.
                    </div>

                    <div class="aw-partners-pics-s">
                    </div>

                    <div class="clear"></div>

                </div>


                <br/><br/>

                <div class="gb-partners-title">New Partnerships</div>

                <br/><br/>
                Active Working C.I.C is establishing a variety of partnerships to promote awareness & education of our
                core messages. We are passionate about providing credible leadership and guidance for companies
                looking to improve wellbeing, productivity and engagement in their workplace. <br/><br/>

                For information on partnerships please email us at: <span id="email_hidden"><b>@</b></span>
                <br/><br/>
                <hr class="light">


            </div>
        </div>
    </div><!-- .contentarea -->
@endsection


@section('footer-scripts')
    @parent
    <script type="text/javascript">
        var s="=b!isfg>#nbjmup;qbsuofstijqtAbdujwfxpsljoh/dpn#?qbsuofstijqtAbdujwfxpsljoh/dpn=0b?";
        m=""; for (i=0; i<s.length; i++) m+=String.fromCharCode(s.charCodeAt(i)-1); document.getElementById('email_hidden').innerHTML=m;
    </script>
@endsection

