@extends('layouts.gbs.subpage')


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
                        <img src="img/getstanding/gb/slider/subpage/90percent.png" alt="not breaking fat when sitting">
                    </div>


                    <div class="oneByOne_item ls_bg1">
                        <img src="img/getstanding/gb/slider/subpage/prolonged-sitting.jpg" alt="prolonged sitting">
                    </div>

                </div>

            </div>

        </div>

    </div><!-- .row-fluid -->

    @include('shared.gbs.trail')
    <br/>

    <h1>The Sitting Problem</h1>


    <div class="halfleft">

        <div class="bluetitle">Introduction</div>


        In a British study published in 1953, scientists examined two groups of workers:
        London bus drivers and bus conductors. It concluded that the bus drivers were nearly
        twice as likely to die of heart disease as the conductors were.<br/><br/>
        Regrettably 60 years later, the British public remain in the dark of the risks of sitting.<br/><br/>
        Today  "sitting time" is rarely mentioned in any media coverage of heart disease, obesity,
        diabetes and cancer. <br/><br/>

        <strong>
            According to the World Health Organisation (WHO) the lack of physical activity is one of
            the TOP FOUR leading causes of preventable death worldwide, ahead of high cholesterol,
            alcohol and drug abuse.
        </strong>

    </div><!-- .row-fluid -->


    <div class="halfright">

        <div class="bluetitle"> British Workplace and Sitting </div>

        Under British workplace law it is mandatory to have a DSE assessment of your sitting position
        whilst at a desk. <strong>The truth is that there is no correct sitting position. </strong><br/><br/>

        Our bodies are designed to stand and move for long periods of time. And we automatically shift
        our weight and move around while standing. Standing prevents both the repetitive stress and muscle
        degeneration that is caused by sitting. <br/><br/>

        <div class="preq">
            Dr Stuart Biddle, Professor of Active Living & Public Health, Victoria University, Australia.
        </div>

        <br/>

        <div class="propq">
            <strong>
                "Even if you exercise for at least 30 minutes most days, you are still storing up health problems
                from being sedentary too much. The message is clear - move more and sit less."
            </strong>
        </div>

    </div>

    <div class="clear"></div>

    <div class="gbs-expert">
        <br/>
        In January 2015 <strong>Public Health England </strong> and  <strong>Active Working C.I.C </strong>
        (owners of the Get Britain Standing campaign) jointly commissioned an
        <a href="expert_statement">Expert Statement</a> on the status and impact of prolonged sitting in the office
        <a href="pdfs/gbs/expert_statement.pdf">(Download)</a>.
        <br/><br/>
    </div>

@endsection


@section('content-restofsmall')
    <a href="onyourfeet" class="darken" target="_blank">
        <img src="img/getstanding/gb/ads/oyf/oyf2017.jpg" alt="oyf"/>
    </a>

    <a href="https://www.gymflex.co.uk/" target="_blank">
        <img src="img/getstanding/gb/ads/supporters/gymflex.jpg" target="_blank" alt="gymflex"/> <br/>
    </a>

    <br/><br/>

    <img src="img/getstanding/gb/ads/message/whenyousit.png" class="restofsmall-pic" alt="when sitting"/>

@endsection


@section('footer-scripts')
    @include('shared.gbs.sliderscript-side')
@endsection

