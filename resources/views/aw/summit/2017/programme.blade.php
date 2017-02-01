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
    Active Working Summit 2017. Agenda
@endsection


@section('aw-maincontent')
    <br/>

    <div style="color:#3563ae">
        <strong>Dame Carol Black (event ambassador)</strong><br/>
        <span style="font-style: italic">
            Adviser on Health and Work to <strong>Public Health England</strong> and <strong>NHS England</strong> &
            Principal of <strong>Newnham College Cambridge</strong>
        </span>
    </div>

    <br/>

    <div style="font-style: italic">
        "Consistent evidence has shown the health benefits of physical activity.  We also know about the harms resulting
        from the lack of activity, from living a sedentary life.  Being active is good for us, not just
        physically – that is obvious – but also for our state of mind, our mental health, and our overall sense of wellbeing.<br/><br/>

        Being inactive increases the risk of dying early.  It is worse than smoking.  Fortunately it seems that
        moderate physical activity of about an hour a day can remove the increased risk of death associated with
        prolonged sitting time at work.  So there are grounds for adding physical activity to the sedentary life
        in the workplace, where many people are occupied much of the day sitting at a desk.<br/><br/>

        I am pleased that the Active Working Summit will bring this evidence to wider notice, encouraging changes
        in working practice that will help promote and safeguard the health and wellbeing of many people."

        <br/><br/>
        <img src="{{ url('/') }}/img/summit/gb/2017/brochurepic3.jpg" >

        <div style="text-align: center">
            <a href="{{ url('/') }}/pdfs/Summit-Brochure.pdf" style="text-decoration: underline" target="_blank">Download</a>

            <a href="{{ url('/') }}/pdfs/Summit-Brochure.pdf" target="_blank">
                <img src="{{ url('/') }}/img/general/icons/pdficon.png"/>
            </a>

        </div>
        

    </div>

@endsection
