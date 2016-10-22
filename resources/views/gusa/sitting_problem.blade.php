@extends('layouts.gusa.basic-sub')

@section('description')
    Major health risks result from excessive sitting. Sitting time at work and leisure has increased
    dramatically in recent decades.
@endsection

@section('keywords')
    health-risks, sedentary, sitting, lifestyles, heart-disease, diabetes, cancer, obesity, dementia, depression,
    back-ache, active-working, productive-working, office-productivity, sit-stand, healthy-office, health-and-safety,
    wellness
@endsection

@section('title')
    The Sitting Problem. Excessive sitting.
@endsection



@section('content-smallwidth')
    <div class="row-fluid slider-small">

        <div class="span12 module_cont module_layer_slider">

            <div class="module_content slider_type1">

                <div id="banner1" class="OneByOne_container">

                    <div class="oneByOne_item ls_bg1">
                        <img src="img/getstanding/usa/slider/subpage/90percent.png" alt="not breaking fat when sitting">
                    </div>


                    <div class="oneByOne_item ls_bg1">
                        <img src="img/getstanding/usa/slider/subpage/90min-allred.png" alt="prolonged sitting">
                    </div>

                </div>

            </div>

        </div>

    </div><!-- .row-fluid -->

    @include('shared.trail')
    <br/>

    <h1>The Sitting Problem</h1>


    <div class="halfleft">

        <div class="bluetitle">Introduction</div>


        <strong>
            The World Health Organization now ranks physical inactivity as 4th largest killer globally, behind obesity.
        </strong><br/><br/>
        Throughout America we continue to sit more at every stage in life; as kids, working adults and in care homes.
        In the 1960’s over 50% of us had moderate physical activity incorporated in our work places,
        but today that the figure is less than 15%.
        <br/><br/>
        Modern technology and computer based working has made us more sedentary, we barely questioned the
        thought that technical advance could be reversing our health. <br/><br/>
        Furthermore it turns out that even if you are hitting all your physical activity goals but remain
        seated 8 or more hours a day you can’t undo the negative effects of too much sitting.
        Accordingly, we must create ways for all of us to be continually moving more throughout the day.
        <br/><br/>

        <strong>In recent years a new kid has emerged on the science block. That kid is called "Sedentary
            Behavior", and it’s beginning to get noticed for all the right reasons. </strong>


    </div><!-- .row-fluid -->


    <div class="halfright">

        <div class="bluetitle"> American Workplace and Sitting </div>
        Under American workplace law there is no current guidance on how to reduce sitting time in the office.
        The Division of Occupational Health and Safety’s (DOHS) focus is on the sitting position whilst at a desk.

        <strong>But the simple fact is that there is NO correct prolonged sitting position.  </strong><br/><br/>


        Our bodies are designed to stand and move for long periods of time. And we automatically shift our
        weight and move around while standing. Standing initiates key physiological processes and prevents
        both the repetitive stress and muscle degeneration that is caused by sitting. <br/><br/>

        At their 2013 annual meeting, the American Medical Association adopted policy recognizing potential
        risks of prolonged sitting and encouraging employers, employees and others to make available
        alternatives to sitting, such as sit-stand desks.<br/><br/>
        <div class="preq">
            Dr Stuart Biddle, Professor of Active Living & Public Health, Victoria University, Australia.
        </div>

        <br/>

        <div class="propq">
            <strong> "Even if you exercise for at least 30 minutes most days, you are still storing up
                health problems from being sedentary too much. The message is clear - move more and sit less"</strong>
        </div>
    </div>

    <div class="clear"></div>

    <div class="gbs-expert">
        <br/>
        In January 2015 <strong>Public Health England </strong> and  <strong>Active Working C.I.C </strong>
        (owners of the Get America Standing campaign) jointly commissioned an
        <a href="expert_statement">Expert Statement</a> on the status and impact of prolonged sitting in the office
        <a href="pdfs/gbs/expert_statement.pdf">(Download)</a>.
        <br/><br/>
    </div>

@endsection


@section('content-restofsmall')
    <img src="img/getstanding/usa/ads/message/avoid.png" class="restofsmall-pic" alt="avoid"/>


    <a href="http://imprintmats.com/" target="_blank" class="sup-nobg">
        <img src="img/getstanding/usa/ads/supporters/imprint.jpg" alt="advert" /> <br/>
    </a>


    <a href="http://onyourfeetday.com/america" target="_blank" class="darken">
        <img src="img/getstanding/usa/ads/oyf.jpg" alt="advert" />
    </a>


    <a href="aw_summit" class="darken">
        <img src="img/getstanding/usa/ads/summit2016-aw.jpg" alt="summit 2016"/>
    </a>


@endsection


@section('footer-scripts')
    @parent
    <script type="text/javascript" src="js/shared/sliderscript-side.js"></script>
@endsection

