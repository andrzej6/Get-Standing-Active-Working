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

    <h1 class="orange">Little Nudge FAQ</h1>


    <div id="nudge-list" class="link-line">

        <div class="shortcode_toggles_shortcode toggles">


            <div class="bluetitle">All your questions answered by us</div>

            <div clas="nudge-bold">Here are some of the most frequently asked questions and answers. For any
                other questions, please <a href="{{ url('/') }}/contact" target="_blank">Contact Us</a>.</div>

            <br/><br/>


            <h5 class="shortcode_toggles_item_title expanded_no" data-count="1">
                What is Little Nudge?
                <span class="ico"></span>
            </h5>

            <div class="shortcode_toggles_item_body">
                <div class="ip">

                    <div class="darkgreytext">
                        Little Nudge is computer software with simple evidence-based reminders ('nudges') to do healthy activities
                        during the course of the day.
                    </div>

                    <div class="darkgreytext">
                        <br/>
                    </div>
                </div>
            </div>


            <h5 class="shortcode_toggles_item_title expanded_no" data-count="1">
                How do I install Little Nudge?
                <span class="ico"></span>
            </h5>

            <div class="shortcode_toggles_item_body">
                <div class="ip">

                    <div class="bluetext">
                        <ol>
                            <li>
                                Download the ‘Free Trial’ installer from the website.
                                <a href="{{ url('/') }}/nudge_trial" target="_blank">Start here</a>.
                            </li>

                            <li>
                                Download and open the installer. Click ‘Little Nudge.exe’ (you may need to extract
                                this file).
                            </li>

                            <li>
                                Run the Installer. This requires you to be an administrator for the computer
                                you wish to install Little Nudge on.
                            </li>

                            <li>
                                Follow the steps of the installer by clicking the ‘Next’ button.
                            </li>

                            <li>
                                When the installer asks you to choose between ‘typical’ or ‘custom’ installation,
                                we recommend you click <strong>‘typical’</strong>.
                            </li>

                            <li>
                                You may need to grant the installer permission to change files if prompted by Windows.
                            </li>

                            <li>
                                Click ‘Run Little Nudge’ at the end of the installation. Little Nudge will then
                                run for 30 days.
                            </li>

                            <li>
                                To activate your copy of Little Nudge, simply click ‘Activate’ when prompted at
                                startup and browse to your unique license file which you are given upon purchase.
                                For detailed installation instructions, follow this
                                <a href="{{ url('/') }}/img/general/nudge/instructions.pdf" target="_blank">
                                    step-by-step guide</a>.

                            </li>


                        </ol>


                    </div>

                    <div class="darkgreytext">
                        <br/>
                    </div>

                </div>
            </div>



            <h5 class="shortcode_toggles_item_title expanded_no" data-count="1">
                What are the system requirements for Little Nudge?
                <span class="ico"></span>
            </h5>

            <div class="shortcode_toggles_item_body">
                <div class="ip">


                    <div class="darkgreytext">
                        <ul>
                            <li>
                                Windows XP or a more recent version of windows

                            </li>

                            <li>
                                Microsoft.NET framework 4.5 (if you don’t have this on your computer,
                                it will be installed during installation of Little Nudge)
                            </li>

                        </ul>

                    </div>


                    <div class="darkgreytext">
                        <br/>
                    </div>

                </div>
            </div>



            <h5 class="shortcode_toggles_item_title expanded_no" data-count="1">
                How do I purchase Little Nudge?
                <span class="ico"></span>
            </h5>

            <div class="shortcode_toggles_item_body">
                <div class="ip">

                    <div class="darkgreytext">

                        <ol>
                            <li>
                                Complete an <a href="{{ url('/') }}/nudge_order" target="_blank">Order Form</a>.
                            </li>

                            <li>
                                Following this, we will send you details for how to make your payment.
                            </li>

                            <li>
                                Once we have received payment, we will email you an instructions for how to activate Little Nudge.
                            </li>

                        </ol>

                    </div>

                    <div class="darkgreytext">
                        <br/>
                    </div>

                </div>
            </div>




            <h5 class="shortcode_toggles_item_title expanded_no" data-count="1">
                How do I activate Little Nudge after purchasing a single license?
                <span class="ico"></span>
            </h5>

            <div class="shortcode_toggles_item_body">
                <div class="ip">

                    <div class="darkgreytext">
                        You will receive an email within 1 working day after
                        purchasing Little Nudge with activation instructions.
                        <a href="{{ url('/') }}/img/general/nudge/activation.pdf" target="_blank">Follow this link for detailed instructions</a>.
                    </div>

                    <div class="darkgreytext">
                        <br/>
                    </div>

                </div>
            </div>

            <br/><br/>



            <div class="bluetitle">Using Little Nudge</div>


            <h5 class="shortcode_toggles_item_title expanded_no" data-count="1">
                How do I find out more about a particular nudge?
                <span class="ico"></span>
            </h5>

            <div class="shortcode_toggles_item_body">
                <div class="ip">

                    <div class="darkgreytext">
                        Click on the nudge when it appears on your screen. This will take you to a page
                        with more information.
                    </div>

                </div>
            </div>



            <h5 class="shortcode_toggles_item_title expanded_no" data-count="1">
                How do I add my own nudges?
                <span class="ico"></span>
            </h5>

            <div class="shortcode_toggles_item_body">
                <div class="ip">

                    <div class="darkgreytext">
                        Right- click on the orange Little Nudge icon on your tool-bar and
                        click ‘open Little Nudge’. This will open the settings menu.
                        Click on ‘Nudges’ (on the left side of the settings menu).
                        This will open a tab where you can type in your own reminders.
                    </div>

                </div>
            </div>



            <h5 class="shortcode_toggles_item_title expanded_no" data-count="1">
                How do I remove nudges?
                <span class="ico"></span>
            </h5>

            <div class="shortcode_toggles_item_body">
                <div class="ip">

                    <div class="darkgreytext">
                        Right-click the orange Little Nudge icon on your tool-bar and click ‘open Little Nudge’.
                        This will open the settings menu. Click on the ‘Nudges’ (on the left side of the settings menu).
                        Click on the nudge you want to delete and press ‘delete’.
                    </div>

                </div>
            </div>



            <h5 class="shortcode_toggles_item_title expanded_no" data-count="1">
                How do I switch Little Nudge off?
                <span class="ico"></span>
            </h5>

            <div class="shortcode_toggles_item_body">
                <div class="ip">

                    <div class="darkgreytext">
                        Right-click the orange Little Nudge icon on your tool-bar and click ‘close’.
                    </div>

                </div>
            </div>



            <h5 class="shortcode_toggles_item_title expanded_no" data-count="1">
                Little Nudge is switched off, how do I get it to work again?
                <span class="ico"></span>
            </h5>

            <div class="shortcode_toggles_item_body">
                <div class="ip">

                    <div class="darkgreytext">
                        Double-click the icon on your desktop. If you cannot see an icon on your desktop,
                        go to the ‘start’ menu and find Little Nudge in ‘all programs’.
                        Click on ‘Little Nudge’. Right-click on ‘Little Nudge’ and press open.
                    </div>

                </div>
            </div>



            <h5 class="shortcode_toggles_item_title expanded_no" data-count="1">
                Does Little Nudge work on macs, phones or iPads?
                <span class="ico"></span>
            </h5>

            <div class="shortcode_toggles_item_body">
                <div class="ip">

                    <div class="darkgreytext">
                        Not at the moment. If you work in an organisation which would like this to be available
                        on other devices, do get in touch at info@littlenudge.com.
                    </div>

                </div>
            </div>



            <h5 class="shortcode_toggles_item_title expanded_no" data-count="1">
                How do I disable Little Nudge for a period of time?
                <span class="ico"></span>
            </h5>

            <div class="shortcode_toggles_item_body">
                <div class="ip">

                    <div class="darkgreytext">
                        Right-click the orange Little Nudge icon on your tool-bar and click
                        ‘disable for an hour’ or ‘disable for the rest of the day’.
                    </div>

                </div>
            </div>



            <h5 class="shortcode_toggles_item_title expanded_no" data-count="1">
                Can I disable Little Nudge during presentations?
                <span class="ico"></span>
            </h5>

            <div class="shortcode_toggles_item_body">
                <div class="ip">

                    <div class="darkgreytext">
                        Yes. Right-click the orange Little Nudge icon on your tool-mbar and click
                        ‘open Little Nudge’. This will open the settings menu. Click on the appearance
                        menu (on the left side of the settings panel). Click the box next to
                        ‘Do not show nudges if in full-screen’.
                    </div>

                </div>
            </div>



            <br/><br/>

            <div class="bluetitle">Information for organisations and IT Professionals</div>

            <h5 class="shortcode_toggles_item_title expanded_no" data-count="1">
                What data is collected?
                <span class="ico"></span>
            </h5>

            <div class="shortcode_toggles_item_body">
                <div class="ip">

                    <div class="darkgreytext">
                        We collect the following data about each person using Little Nudge.
                        We do not share personally identifiable information with third parties.

                        <ul>
                            <li>General Health</li>
                            <li>Pain</li>
                            <li>Pain in different areas of the body (optional)</li>
                            <li>Stress</li>
                            <li>Frequency of movement</li>
                            <li>Feedback</li>
                        </ul>
                    </div>

                </div>
            </div>



            <h5 class="shortcode_toggles_item_title expanded_no" data-count="1">
                Where is the data stored?
                <span class="ico"></span>
            </h5>

            <div class="shortcode_toggles_item_body">
                <div class="ip">

                    <div class="darkgreytext">
                        It is stored in a secure cloud storage solution, which is managed by Microsoft
                        and based in Ireland.
                    </div>

                </div>
            </div>



            <h5 class="shortcode_toggles_item_title expanded_no" data-count="1">
                Who owns the data?
                <span class="ico"></span>
            </h5>

            <div class="shortcode_toggles_item_body">
                <div class="ip">

                    <div class="darkgreytext">
                        We own the data and have the right to publish and use it. We will ask a clients’
                        permission before publishing data with their company name. And if a client changes
                        their mind later we make it easy to stop sharing their data with us. Clients
                        can use and publish data with our name, with permission.<br/><br/>

                        Security and privacy is fundamental to the design of Little Nudge. We utilise
                        the data to deliver improved product performance and user experience
                        as well as supporting Little Nudge’s business development operations.
                        We will ask a clients’ explicit permission before publishing data with a company’s name.
                    </div>

                </div>
            </div>


            <h5 class="shortcode_toggles_item_title expanded_no" data-count="1">
                What are the Little Nudge Champion Resources?
                <span class="ico"></span>
            </h5>

            <div class="shortcode_toggles_item_body">
                <div class="ip">

                    <div class="darkgreytext">
                        They include posters, example emails and newsletters to support engagement with Little Nudge.
                    </div>

                </div>
            </div>


            <h5 class="shortcode_toggles_item_title expanded_no" data-count="1">
                How can we access the Little Nudge Champion Resources?
                <span class="ico"></span>
            </h5>

            <div class="shortcode_toggles_item_body">
                <div class="ip">

                    <div class="darkgreytext">
                        Following purchasing Little Nudge, you will be given access to the Champion
                        Resources area of the Little Nudge website.
                    </div>

                </div>
            </div>

        </div><!--.shortcode_toggles_shortcode-->


    </div>

@endsection


@section('content-restofsmall')

    <a href="http://activeworking.com/pdfs/survey_results.pdf" class="darken" target="_blank">
        <img src="{{ url('/') }}/img/getstanding/gb/ads/message/survey-ad3.jpg" alt="oyf"/>
    </a>

    <a href="{{ url('/') }}/nudge_trial" class="darken" target="_blank">
        <img src="{{ url('/') }}/img/general/nudge/ads/nudge1.jpg"  alt="feel after"/>
    </a>

    <a href="http://onyourfeetday.com/britain" class="darken" target="_blank">
        <img src="{{ url('/') }}/img/getstanding/gb/ads/oyf/oyf19-gb.png" alt="oyf"/>
    </a>


    <a href="{{ url('/') }}/nudge_trial" class="darken" target="_blank">
        <img src="{{ url('/') }}/img/general/nudge/ads/nudge2.jpg"  alt="feel after"/>
    </a>

@endsection


@section('footer-scripts')
    @parent
    <script type="text/javascript" src="{{ url('/') }}/js/shared/sliderscript-side.js"></script>
    <script type="text/javascript">
        $(".go-to-nudge").click(function(event){
            window.open('http://activeworking.com/nudge_trial','_blank');
        });
    </script>
@endsection