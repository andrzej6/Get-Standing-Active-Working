@extends('layouts.gusa.basic')

@section('header-styles')
    @parent
    <link rel="stylesheet" type="text/css" href="css/gusa/mix.css">

    <style>
        .go-to {
            cursor:pointer;
        }
    </style>

@endsection

@section('description')
    Advice on how to reduce your health risks. Different ergonomic solutions to enable office
    worker to stand at desk. Height-adjustable-desk, Variable-height-desk, Treadmill-desk, Desk-riser, Desk-mount
@endsection

@section('keywords')
    active-working, productive-working, office-productivity, sit-stand-solutions, advice, sit-stand-desk,
    standing-desk, ergonomic, workstation, height-adjustable-desk, variable-height-desk, healthy-office,
    treadmill-desk, desk-riser, desk-mount, home-office, health-and-safety, wellness
@endsection

@section('title')
    Sit-Stand Solutions. Height Adjustable Desk, Variable Hight Desk, Treadmill Desk, Desk Riser, Desk Mount
@endsection



@section('content')
    <div class="contentarea freejustified">

        <div class="row-fluid">

            <div class="span12 module_cont module_layer_slider">
                <div class="module_content slider_type1">
                    <div id="banner1" class="OneByOne_container">


                        <div class="oneByOne_item ls_bg8">
                            <img src="img/getstanding/usa/slider/big/ergotron.jpg" alt="slide" class="go-to go-to-ergotron">
                        </div>


                    </div>
                </div>

            </div>

        </div>





        <div class="row-fluid">

            <div class="sitstandsol3 link-line">

                @include('shared.trail')
                <br/>

                <h1>JustStand</h1>

                Seeing a gap in public understanding of sedentary behaviour and its impact on individuals,
                businesses and organizations, Ergotron launched
                <a href="http://www.juststand.org/">JustStand.org</a> in 2010.

                The aim of the website was to provide tools and resources for people, media,
                businesses, schools and researchers to help raise awareness of the dangers of
                prolonged sitting; and secondly, draw attention to the simple remedy of standing
                and moving more throughout one’s day.<br/><br/>


                In 2011, Ergotron recognized the need to engage key influencers involved in
                research and thus launched the first
                <a href="http://www.juststand.org/tabid/805/language/en-US/Default.aspx">JustStand® Wellness Summit</a>, formally

                introducing the notion that affordable sit-stand solutions exist to change
                the sedentary behavior that researchers were observing. <br/><br/>


                To get a finger on the pulse of public opinion, Ergotron published the first
                <a href="http://www.juststand.org/tabid/816/llanguage/en-US/default.aspx">JustStand Index</a>
                in 2013. The Index revealed that only 7% of the population were
                aware of sitting disease. We are watching this index grow as constant media
                attention would indicate the topic is growing globally. <br/><br/>


                <a href="http://www.juststand.org/tabid/990/default.aspx">JustStand.Org For Kids</a>
                is also focusing on making the classroom an active place.
                To help schools "roll out" an active classroom, Ergotron have assembled this
                <a href="http://www.ergotron.com/portals/0/literature/other/learnfitkit.pdf">Start Up Guide</a>
                .<br/><br/>


                <div style="font-style:italic;color:#0066CB">Ergotron has engaged in influencing healthy computing behavior for over
                    three decades. The Get America Standing campaign has been inspired by all
                    the efforts
                    <a href="http://www.juststand.org/" style="color:#0066CB">JustStand.org</a>. Great work Ergotron!</div>


            </div>

            <div class="sitstandsol2">

                <a href="http://www.juststand.org/" target="_blank">
                    <img src="img/getstanding/usa/ads/supporters/juststand.jpg" alt="advert" /> <br/>
                </a>
                <br/><br/>

				<!--
                <a href="http://www.ergotron.com/" target="_blank" class="darken">
                    <img src="img/getstanding/usa/ads/supporters/ergotron.jpg" alt="advert" />
                </a>
				-->

            </div>

            <div class="clear"></div>

        </div>



    </div><!-- .contentarea -->
@endsection



@section('footer-scripts')
    @parent
    <script type="text/javascript" src="js/shared/sliderscript-main.js"></script>
    <script type="text/javascript">

        $(".go-to-ergotron").click(function(event){
            window.open('http://www.ergotron.com/','_blank');
        });
    </script>

@endsection

