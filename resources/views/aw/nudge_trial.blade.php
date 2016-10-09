@extends('layouts.aw.basic')

@section('header-styles')
    @parent
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/shared/nudge.css">
@endsection

@section('description')
    Little Nudge Trial
@endsection

@section('keywords')
    active-working, productive-working, office-productivity, sit-stand, standing-desk, stand-up desk, sit-n-stand,
    wellness, office-wellness, employee-wellness, sedentary-office, wellbeing, physical-activity, employee-engagement,
    staff-resilience, stress-management, productivity, occupational-health, height-adjustable-desk, healthy-office, health-and-safety,
    office-wellbeing, well-being
@endsection

@section('title')
    Little Nudge Trial
@endsection


@section('content')

    @include('shared.trail')
    <br/>

    <div id="nudge-container">
        <div id="nudge-left">
            <div class="nudge-follow">
                <a href="http://activeworking.com/" target="_blank">
                    <img src="{{ url('/') }}/img/general/nudge/trial/aw-logo.jpg" >
                </a>
            </div>
        </div>


        <div id="nudge_center">

            <h1 class="orange">Little Nudge Free Trial</h1>


            <div id="mc_embed_signup">
                <form action="//activeworking.us13.list-manage.com/subscribe/post?u=bdd3859f7a02c0f5ca3452dc2&amp;id=2050931546" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <div id="mc_embed_signup_scroll">


                        <span class="required_notification orange">* denotes required field </span>

                        <br/><br/>


                        <div class="mc-field-group">
                            <label for="mce-FNAME">First Name  <span class="asterisk">*</span>
                            </label>
                            <input type="text" value="" name="FNAME" class="required" id="mce-FNAME">
                        </div>


                        <div class="mc-field-group">
                            <label for="mce-LNAME">Last Name  <span class="asterisk">*</span>
                            </label>
                            <input type="text" value="" name="LNAME" class="required" id="mce-LNAME">
                        </div>


                        <div class="mc-field-group">
                            <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
                            </label>
                            <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                        </div>


                        <div class="mc-field-group">
                            <label for="mce-MMERGE6">Company Name
                            </label>
                            <input type="text" value="" name="MMERGE6" class="" id="mce-MMERGE6">
                        </div>


                        <div class="mc-field-group">
                            <label for="mce-MMERGE4">Where did you hear about us? </label>
                            <input type="text" value="" name="MMERGE4" class="" id="mce-MMERGE4">
                        </div>


                        <div class="mc-field-group">
                            <label for="mce-MMERGE3">Number of office based employees  <span class="asterisk">*</span>
                            </label>
                            <select name="MMERGE3" class="required" id="mce-MMERGE3">
                                <option value="">- Select Option -</option>
                                <option value="1-4">1 - 4</option>
                                <option value="5 - 99">5 - 99</option>
                                <option value="100 - 249">100 - 249</option>
                                <option value="250 - 499">250 - 499</option>
                                <option value="500 - 999">500 - 999</option>
                                <option value="more than 1,000">more than 1,000</option>

                            </select>
                        </div>


                        <div id="mce-responses" class="clear">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true">
                            <input type="text" name="b_bdd3859f7a02c0f5ca3452dc2_2050931546" tabindex="-1" value="">
                        </div>

                        <br/>
                        <div class="clear"><input type="submit" value="Apply Now" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                    </div>

                </form>
            </div>

        </div>


        <div id="nudge-right">

            <div class="nudge-follow">
                <div style="text-align: center">
                    <a href="http://www.littlenudge.com/" target="_blank">
                        <img src="{{ url('/') }}/img/general/nudge/trial/nudge.jpg" >
                    </a>


                    <br/>

                    <div style="margin-bottom:20px">
                        <a href="{{ url('/') }}/littlenudge" class="nudge-button1" target="_blank">Introduction</a>
                    </div>

                    <div style="margin-bottom:20px">
                        <a href="{{ url('/') }}/nudge_trial" class="nudge-button1" target="_blank">Free Trial</a>
                    </div>

                    <div style="margin-bottom:20px">
                        <a href="{{ url('/') }}/nudge_order" class="nudge-button1" target="_blank">Order</a>
                    </div>

                    <div style="margin-bottom:20px">
                        <a href="{{ url('/') }}/nudge_faq" class="nudge-button1" target="_blank">FAQ page</a>
                    </div>

                    <div style="margin-bottom:20px">
                        <a href="{{ url('/') }}/img/general/nudge/instructions.pdf" class="nudge-button1" target="_blank">Installation Guide</a>
                    </div>



                </div>



            </div>

        </div>

    </div>



@endsection

@section('footer-scripts')
    @parent


    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
    <script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[3]='MMERGE3';ftypes[3]='dropdown';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[0]='EMAIL';ftypes[0]='email';fnames[4]='MMERGE4';ftypes[4]='text';fnames[5]='MMERGE5';ftypes[5]='text';fnames[6]='MMERGE6';ftypes[6]='text';fnames[7]='MMERGE7';ftypes[7]='text';fnames[8]='MMERGE8';ftypes[8]='text';fnames[9]='MMERGE9';ftypes[9]='text';fnames[10]='MMERGE10';ftypes[10]='text';fnames[11]='MMERGE11';ftypes[11]='text';fnames[12]='MMERGE12';ftypes[12]='dropdown';fnames[13]='MMERGE13';ftypes[13]='dropdown';fnames[14]='MMERGE14';ftypes[14]='dropdown';}(jQuery));var $mcj = jQuery.noConflict(true);
    </script>


    <script type="text/javascript">
        $(window).bind('scroll', function() {
            if($(window).scrollTop()+215 >= $('.pre_footer').offset().top + $('.pre_footer').outerHeight() - window.innerHeight) {
                $('.nudge-follow').css( "display","none");
            }
            else {
                $('.nudge-follow').css( "display","block");
            }
        });
    </script>
@endsection

