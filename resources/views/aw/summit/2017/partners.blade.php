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
    Active Working Summit 2017. Partners
@endsection


@section('aw-maincontent')
    <br/>


    <div class="aw-bluetext-big">New Partnerships</div>

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


    <div class="aw-partners-title">PLATINUM PARTNERS</div>
    <hr class="light">


    <div class="aw-partners-row-l">

        <div class="aw-partners-logo-l">
            <a href="https://www.sit-stand.com/" target="_blank"><img src="{{ url('/') }}/img/aw/summit/partners/sitstand.png"/></a>
        </div>

        <div class="clear"></div>

        <div class="aw-partners-text-l">
            Sit.Stand.Com <sup>®</sup> - the Standing Desk Megastore. We offer free trial, exclusive offers, free posters &
            corporate discounts. More Choices. Best prices and quality solutions guaranteed. We are exclusive suppliers of
            the Up/Down DeskPro electric desk series (from only £349 ex VAT), hushdesk and the award winning IMPRINT
            comfort mat. We include educational and training support for new users. Work smart. Work healthy.
        </div>

        <div class="aw-partners-pics-l">
            <a class="fancybox" rel="group3" href="{{ url('/') }}/img/aw/summit/partners/fancybox/sit-stand1.jpg">
                <img src="{{ url('/') }}/img/aw/summit/partners/fancybox/small/sit-stand1.jpg"/>
            </a>

            <a class="fancybox" rel="group10" href="https://sit-stand.com/freetrial" target="_blank">
                <img src="{{ url('/') }}/img/aw/summit/partners/fancybox/small/sit-stand2.jpg"/>
            </a>

            <a class="fancybox" rel="group3" href="{{ url('/') }}/img/aw/summit/partners/fancybox/imprint2.jpg">
                <img src="{{ url('/') }}/img/aw/summit/partners/fancybox/small/imprint2.jpg"/>
            </a>

            <a class="fancybox" rel="group11" href="https://sit-stand.com/electric-desks/95-desk-pro2x.html" target="_blank">
                <img src="{{ url('/') }}/img/aw/summit/partners/fancybox/small/sit-stand3.jpg"/>
            </a>
        </div>


        <div class="clear"></div>

    </div>





    <div class="aw-partners-title">SILVER PARTNERS</div>
    <hr class="light">

    <div class="aw-partners-row-s">

        <div class="aw-partners-logo-s">
            <a href="http://www.aeris.de/en/" target="_blank">
                <img src="{{ url('/') }}/img/aw/summit/partners/aeris.png"/>
            </a>
        </div>


        <div class="aw-partners-text-s">
            Aeris has devoted itself to revolutionising standing and sitting at the workplace. Our philosophy is simple and effective:
            more motion! We call this active-dynamic sitting/standing.
        </div>

        <div class="aw-partners-pics-s">
            <a class="fancybox" rel="group6" href="{{ url('/') }}/img/aw/summit/partners/fancybox/muvman.jpg">
                <img src="{{ url('/') }}/img/aw/summit/partners/fancybox/small/muvman.jpg"/>
            </a>
        </div>
        <div class="clear"></div>
    </div>

    <br/>

    <div class="aw-partners-row-s">

        <div class="aw-partners-logo-s">
            <a href="http://imprintmats.com/products/professional" target="_blank">
                <img src="{{ url('/') }}/img/aw/summit/partners/imprint.png"/>
            </a>
        </div>

        <div class="aw-partners-text-s">
            Imprint® Comfort Mats is passionate about providing consumers with environmentally friendly anti-fatigue mats
            that are proven to make everyday life more comfortable and enjoyable.
        </div>

        <div class="aw-partners-pics-s">
            <a class="fancybox" rel="group15" href="{{ url('/') }}/img/aw/summit/partners/fancybox/imprint1.jpg">
                <img src="{{ url('/') }}/img/aw/summit/partners/fancybox/small/imprint1.jpg"/>
            </a>
        </div>
        <div class="clear"></div>
    </div>

    <br/>

    <div class="aw-partners-row-s">

        <div class="aw-partners-logo-s">
            <a href="http://www.fellowes.com/gb/en/Pages/default.aspx" target="_blank">
                <img src="{{ url('/') }}/img/aw/summit/partners/fellowes.jpg"/>
            </a>
        </div>
        <div class="clear"></div>
    </div>

    <br/>



    <div class="aw-partners-row-s">

        <div class="aw-partners-logo-s">
            <a href="http://www.steppie.dk/" target="_blank">
                <img src="{{ url('/') }}/img/aw/summit/partners/steppie.jpg">
            </a>
        </div>
        <div class="clear"></div>
    </div>

    <br/>



@endsection


@section('footer-scripts')
    @parent
    <script type="text/javascript">
        var s="=b!isfg>#nbjmup;qbsuofstijqtAbdujwfxpsljoh/dpn#?qbsuofstijqtAbdujwfxpsljoh/dpn=0b?";
        m=""; for (i=0; i<s.length; i++) m+=String.fromCharCode(s.charCodeAt(i)-1);
        document.getElementById('email_hidden').innerHTML=m;
    </script>
@endsection
