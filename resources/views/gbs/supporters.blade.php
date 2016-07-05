@extends('layouts.gbs.subpage')


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
        <img src="img/aw/slider/subpage/aw-supporters.png" alt="microsoft">
    </div><!-- .row-fluid -->

    @include('shared.gbs.trail')
    <br/>

    <h1 class="activeworking">Official Supporters</h1>  <br/>


    <div class="gb-partners-title">Active Working is delighted to be officially supported by the following companies:</div>

    <br/><br/><br/>



    <div class="partners-table">

        <div class="partners-column2">

            <div class="partnersrow">
                <div class="lpartners">
                    <a href="http://www.linak.com/" target="_blank">
                        <img src="img/getstanding/gb/logos/supporters/linak.png" />
                    </a>
                </div>
                <div class="mpartners"><span>Linak</span></div>
            </div>

            <div class="clear"></div>

            <div class="partnersrow">
                <div class="lpartners">
                    <a href="http://sit-stand.com/" target="_blank">
                        <img src="img/getstanding/gb/logos/supporters/sitstand.png" />
                    </a>
                </div>
                <div class="mpartners"><span>sit-stand.com</span></div>
            </div>

            <div class="clear"></div>

        </div>


        <div class="partners-column2">

            <div class="partnersrow">
                <div class="lpartners">
                    <a href="http://sit-stand.com/electric-desks/75-hushdesk.html" target="_blank">
                        <img src="img/getstanding/gb/logos/supporters/hushdesk.jpg" />
                    </a>
                </div>
                <div class="mpartners"><span>Hushdesk</span></div>
            </div>
            <div class="clear"></div>


            <div class="partnersrow">
                <div class="lpartners">
                    <a href="http://www.stebul.co.uk/" target="_blank">
                        <img src="img/getstanding/gb/logos/supporters/stebul.jpg" />
                    </a>
                </div>
                <div class="mpartners"><span>Stebul</span></div>
            </div>

            <div class="clear"></div>

        </div>

        <div class="clear"></div>

    </div>

    <br/><br/>
    <div class="bluetitle activeworking">New Supporters</div>

    If you share our passion about reducing sedentary behaviour why not become an "Official Supporter" of Active Working campaign.
    We have a variety of packages available and would be delighted to discuss these with you. For more information please contact:
    <span id="email_hidden"><b>@</b></span>


    <br/><br/>
    <hr class="light">

@endsection


@section('content-restofsmall')


    <img src="img/aw/ads/message/standing_great.png" alt="standing great" class="restofsmall-pic"/>

    <a href="onyourfeet" class="darken" target="_blank">
        <img src="img/getstanding/gb/ads/oyf/oyf2017.jpg" alt="oyf"/>
    </a>

    <img src="img/aw/ads/message/productivity.png" class="restofsmall-pic" alt="productivity"/>

@endsection


@section('footer-scripts')
    @include('shared.gbs.sliderscript-side')

    <script type="text/javascript">
        var s="=b!isfg>#nbjmup;qbsuofstijqtAbdujwfxpsljoh/dpn#?qbsuofstijqtAbdujwfxpsljoh/dpn=0b?";
        m=""; for (i=0; i<s.length; i++) m+=String.fromCharCode(s.charCodeAt(i)-1);
        document.getElementById('email_hidden').innerHTML=m;
    </script>
@endsection

