@extends('layouts.aw.basic-sub')

@section('header-styles')
    @parent
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/shared/nudge.css">
@endsection


@section('description')
    What you can do and learn about sit-stand. Simple tips on how to sit-stand
@endsection

@section('keywords')
    active-working, productive-working, office-productivity, sit-stand-tips, sit-stand-desk, standing-desk, height-adjustable-desk,
    variable-height-desk, healthy-office, treadmill-desk, desk-riser, desk-mount, home-office, health-and-safety, wellness
@endsection

@section('title')
    Little Nudge
@endsection



@section('content-smallwidth')
    <div class="row-fluid slider-small">

        <div class="span12 module_cont module_layer_slider">

            <div class="module_content slider_type1">

                <div id="banner1" class="OneByOne_container">

                    <div class="oneByOne_item ls_bg2">
                        <img src="{{ url('/') }}/img/general/nudge/slider/nudge_trial1.jpg" alt="recommend" class="go-to-nudge goto">
                    </div>

                    <div class="oneByOne_item ls_bg2">
                        <img src="{{ url('/') }}/img/general/nudge/slider/nudge_trial2.jpg" alt="recommend" class="go-to-nudge goto">
                    </div>

                </div>

            </div>

        </div>

    </div><!-- .row-fluid -->

    @include('shared.trail')
    <br/>

    <h1 class="orange">We all need "Little Nudge"</h1>


    <div class="nudge-brochure">
        <a href="{{ url('/') }}/img/general/nudge/flyer.pdf" target="_blank" class="oyf-newblue fbiggerhalf">
            Brochure
        </a>
        <a href="{{ url('/') }}/img/general/nudge/flyer.pdf" target="_blank">
            <img src="{{ url('/') }}/img/general/icons/pdficon.png"></a>
    </div>

    <br/>


    <div class="nudge-notopmarg">
        Active Working™ is the <strong>Official Online Partner</strong> for <strong>Little Nudge</strong>.
    </div>
    <br/>


    <div class="nudge-register">
        <a href="/free_trial">REGISTER FOR FREE TRIAL TODAY</a>
    </div>

    <br/>


    <span style="font-size:1.4em"><strong>Little Nudge</strong> is a non-intrusive, on-screen reminder to perform easy wellness activities. </span>
    <br/><br/>


    <ul class="nudge-ul">
        <li>
            Clinically designed by physiotherapists and successfully trialled with a global health services provider,
            <strong>Little Nudge</strong> is a proven method of interrupting prolonged sitting of office workers
        </li>

        <li>
            <strong>Little Nudge</strong> prevents and reduces pain as a result of computer work
        </li>

        <li>
            <strong>Little Nudge</strong> can be customised to adjust "where" on the screen the reminder appears, "how often" it pops-up and "how long" it stays
        </li>

        <li>
            <strong>Little Nudge</strong> software licenses are available from as little as
            <span style="color:#FF6600;font-size:1.3em;font-weight:bold">£4.95 per employee per annum*</span>
        </li>



    </ul>


    <br/>

    Register for a 30 day <span class="nudge-register">
        <a href="/free_trial">FREE TRIAL</a></span>
    today.<br/>

    <img src="{{ url('/') }}/img/general/nudge/nudge1.png">
    <img src="{{ url('/') }}/img/general/nudge/nudge2.png">
    <br/><br/>





    <div id="nudge-table">
        <br/>
        <table style="width:60%" class="nudge-table2">
            <tr>
                <th class="col1">Company <br/> Licenses</th>
                <th class="col2" colspan="4">Annual Price per User<br/>(exVAT)</th>
                <th class="col3">Discount</th>
            </tr>

            <tr>
                <td class="col1">1 - 4 users</td>
                <td class="col2a"></td><td class="col2b">£</td><td class="col2c">34.95</td><td class="col2d"></td>
                <td class="col3">&nbsp;</td>
            </tr>

            <tr>
                <td class="col1">5 - 99 users</td>
                <td class="col2a"></td><td class="col2b">£</td><td class="col2c">29.95</td><td class="col2d"></td>
                <td class="col3">14%</td>
            </tr>

            <tr>
                <td class="col1">100 - 249 users</td>
                <td class="col2a"></td><td class="col2b">£</td><td class="col2c">19.95</td><td class="col2d"></td>

                <td class="col3">42%</td>
            </tr>

            <tr>
                <td class="col1">250 - 499 users</td>
                <td class="col2a"></td><td class="col2b">£</td><td class="col2c">14.95</td><td class="col2d"></td>

                <td class="col3">57%</td>
            </tr>

            <tr>
                <td class="col1">500 - 999 users</td>
                <td class="col2a"></td><td class="col2b">£</td><td class="col2c">9.95</td><td class="col2d"></td>

                <td class="col3">71%</td>
            </tr>

            <tr>
                <td class="col1">1,000 + users</td>
                <td class="col2a"></td><td class="col2b">£</td><td class="col2c">4.95</td><td class="col2d"></td>
                <td class="col3">85%</td>
            </tr>

        </table>
    </div>

    <span style="font-size:0.8em">
        *The £4.95 annual price per employee is only valid for purchases of 1,000 licences.
    </span>

    <div class="clear"></div>
    <br/><br/><br/>


    <div style="color:black;font-weight:bold;font-size:1.4em;"> How much will I pay annually?</div>
    <br/><br/>



    <form action="#">
        <div id="nudge-calc">
            <div>
                <div class="nudge-calc-text">Number of Licences: </div>
                <div class="nudge-calc-field">&nbsp;&nbsp;
                    <input type="number" name="numboflic" min="1" max="100000" step="1" value="1" id="numblic"></div>
                <button type="button" id="nudge-calc-button">Calculate</button>
                <div class="clear"></div>
            </div>


            <div>
                <div class="nudge-calc-text">Total annual price: </div>
                <div class="nudge-annual">
                    <div class="nudge-top">£</div> <input type="text" name="nudge-annual-price" disabled> <div class="nudge-top">(ex VAT)</div>
                </div>
                <div class="clear"></div>
            </div>

            <div>
                <div class="nudge-calc-text">Unit price per employee per year: </div>
                <div class="nudge-annual">
                    <div class="nudge-top">£</div> <input type="text" name="nudge-unit-price" disabled> <div class="nudge-top">(ex VAT)</div>
                </div>
                <div class="clear"></div>
            </div>


        </div>
        <div id="nudge-res"></div>
    </form>

@endsection


@section('content-restofsmall')

    <a href="{{ url('/') }}/nudge_trial" class="darken" target="_blank">
        <img src="{{ url('/') }}/img/general/nudge/ads/nudge1.jpg"  alt="feel after"/>
    </a>

    <a href="http://onyourfeetday.com" class="darken" target="_blank">
        <img src="{{ url('/') }}/img/getstanding/gb/ads/oyf/oyf2017.jpg" alt="oyf"/>
    </a>


    <a href="{{ url('/') }}/nudge_trial" class="darken" target="_blank">
        <img src="{{ url('/') }}/img/general/nudge/ads/nudge2.jpg"  alt="feel after"/>
    </a>

@endsection


@section('footer-scripts')
    @parent
    <script type="text/javascript" src="{{ url('/') }}/js/shared/sliderscript-side.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/js/shared/nudge.js"></script>

    <script type="text/javascript">
        $(".go-to-nudge").click(function(event){
            window.open('http://activeworking.com/nudge_trial','_blank');
        });
    </script>

@endsection