@extends('layouts.oyf.us')

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
    On Your Feet America
@endsection


@section('aw-maincontent')

    <h1 class="oyf-newpink">New Partnerships</h1>
    <br/>

    <div class="">
        Active Working C.I.C is interested in establishing a variety of partnerships to promote awareness &amp; education of our
        core messages. We are passionate about providing credible leadership and guidance for companies looking to improve wellbeing,
        productivity and engagement in their workplace.
    </div>
    <br/>

    <div class="">
        For information on sponsorship of this event or longer term strategic partnerships with Active Working C.I.C  please email us at:
        <span id="email_hidden"><b>@</b></span>
    </div>

    <br/><br/>



    <div class="aw-partners-title">PLATINUM PARTNERS</div>
    <hr class="light">

    <div class="aw-partners-row-m">

        <div class="aw-partners-logo">
            <a href="http://yo-yodesk.com/" target="_blank" >
                <img src="{{ url('/') }}/img/aw/summit/partners/yoyo-long.jpg" width="250px"/>
            </a>
        </div>



        <div class="aw-partners-text-m">
            <a href="http://yo-yodesk.com/" target="_blank" style="text-decoration:underline">Yo-Yo Desk</a><sup>®</sup> – the best-selling range of 
			sit-stand workstations from £249 (inc VAT / Shipping). Transition simply between sitting / standing at your existing desk with:
            <ul>
                <li>
                    <strong>Yo-Yo Desk® CLASSIC: </strong>simply smooth height adjustment.
                    <a href="http://yo-yodesk.com/yoyo-classic" target="_blank" style="text-decoration: underline">Available in 3 sizes</a>
                </li>

                <li><strong>Yo-Yo Desk® GO:</strong>  affix a <a href="http://yo-yodesk.com/yoyo-go1" style="text-decoration: underline" target="_blank">Single</a> or
                    <a href="http://yo-yodesk.com/yoyo-go2" target="_blank" style="text-decoration: underline">Double Monitor Screen</a> for unrivalled
                    ergonomic positioning and comfort.

                </li>
            </ul>


        </div>

        <div class="aw-partners-pics-m">
            <a class="fancybox" rel="group1a" href="{{ url('/') }}/img/aw/summit/partners/fancybox/90-large.jpg">
                <img src="{{ url('/') }}/img/aw/summit/partners/fancybox/small/90-small.jpg"/>
            </a>

            <a class="fancybox" rel="group1a" href="{{ url('/') }}/img/aw/summit/partners/fancybox/go2-large.jpg">
                <img src="{{ url('/') }}/img/aw/summit/partners/fancybox/small/go2-small.jpg"/>
            </a>
        </div>
        <div class="clear"></div>
    </div>




    <div class="aw-partners-title">GOLD PARTNERS</div>
    <hr class="light">

	
	
	
	
	<div class="aw-partners-row-l">

        <div class="aw-partners-logo-l">
            <a href="https://www.sit-stand.com/" target="_blank"><img src="{{ url('/') }}/img/aw/summit/partners/sitstand-1.jpg"/></a>
        </div>

        <div class="clear"></div>

        <div class="aw-partners-text-l">
            <a href="https://sit-stand.com" target="_blank" style="text-decoration:underline">Sit-Stand.Com</a><sup>®</sup> - the Standing Desk Megastore. 
			Europe’s # 1 exclusive supplier of quality office wellness and productivity solutions including:  
			sit-stand desks, desk risers, active seating and accessories. Our Up/Down DeskPro® electric desk series 
			starts from only £399 (ex VAT) and the Yo-YoDesk® range from only £183 (ex VAT). We offer FREE Trial, 
			Special  Offers, Free Posters, Corporate Discounts, Educational and Training Support to embed best practice. 
			More Choices. Best Prices. Work Smart. Work Healthier.
        </div>

        <div class="aw-partners-pics-l">
            <a class="fancybox" rel="group3" href="{{ url('/') }}/img/aw/summit/partners/fancybox/sit-stand1.jpg">
                <img src="{{ url('/') }}/img/aw/summit/partners/fancybox/small/sit-stand1.jpg"/>
            </a>
			
            <a class="fancybox" rel="group3" href="{{ url('/') }}/img/aw/summit/partners/fancybox/imprint2.jpg">
                <img src="{{ url('/') }}/img/aw/summit/partners/fancybox/small/imprint2.jpg"/>
            </a>
        </div>


        <div class="clear"></div>

    </div>
	
	
	

@endsection



@section('footer-scripts')
    @parent
    <script type="text/javascript">
        if ( $(".fancybox"))
            $(".fancybox").fancybox({ prevEffect: 'none',nextEffect: 'none'});



        var s="=b!isfg>#nbjmup;qbsuofstijqtAbdujwfxpsljoh/dpn#?qbsuofstijqtAbdujwfxpsljoh/dpn=0b?";
        m=""; for (i=0; i<s.length; i++) m+=String.fromCharCode(s.charCodeAt(i)-1);
        document.getElementById('email_hidden').innerHTML=m;
    </script>
@endsection

