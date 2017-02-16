@extends('layouts.aw.basic-sub')


@section('description')
    Advice on how to reduce your health risks. Minor changes, exercises or movement will significantly
    reduce your health risks.
@endsection

@section('keywords')
    active-working, productive-working, office-productivity, office-work, sit-stand-solutions, advice,
    sit-stand-desk, standing-desk, ergonomic, workstation, movement, height-adjustable-desk,
    variable-height-desk, healthy-office, treadmill-desk, desk-riser, desk-mount, home-office,
    health-and-safety, wellness
@endsection

@section('title')
    Careers
@endsection



@section('content-smallwidth')

    @include('shared.trail')
    <br/>

    <div class="gbsintro link-line">


        <h1 class="activeworking">Working with us</h1>

        Active Working Group is a growing international company comprised of high calibre individuals
        based in a variety of countries. Clear vision, passion and dedication to excellence are the
        trademarks of the way we approach our work.<br/><br/>


        We offer extraordinary opportunity for talented individuals to become important catalysts for
        major change. We promote a culture of integrity, accountability, innovation, open
        communications and teamwork. We believe in the power of ideas, and welcome them from
        all parts of the company.<br/><br/>

        We are an equal opportunity employer and provide equal employment opportunities to all employees and applicants.
        <br/><br/><br/>

        <div class="bluetitle activeworking">Careers</div>

        We are keen to talk to talented and high calibre individuals who share our principals and will
        make outstanding contribution and deliver results. We are an equal opportunity employer and
        provide equal employment opportunities to all employees and applicants.<br/><br/>

        If you would like us to take the first step please send your CV and covering
        letter to: <span id="email_hidden1"></span><br/><br/><br/>


        <div class="bluetitle activeworking">Volunteers</div>

        If you share our passion and would like to offer 4 – 6 hours per week of your time, we would also be very keen
        to speak to you. Depending on your country of interest, background and skillsets we should be able to find a
        role for you.<br/><br/>

        If you would like us to take the first step please send your CV and covering letter
        to: <span id="email_hidden2"></span>


        <br/><br/>
        <hr class="light">
    </div>
@endsection


@section('content-restofsmall')
    <a href="http://onyourfeetday.com/britain" class="darken" target="_blank">
        <img src="{{ url('/') }}/img/getstanding/gb/ads/oyf/oyf5.jpg" alt="oyf"/>
    </a>

    <img src="{{ url('/') }}/img/aw/ads/message/who.png" class="restofsmall-pic"  alt=""/>

@endsection

@section('footer-scripts')
    @parent
    <script type="text/javascript">
        var s1="=b!isfg>#nbjmup;dbsffstAbdujwfxpsljoh/dpn#?dbsffstAbdujwfxpsljoh/dpn=0b?";
        m=""; for (i=0; i<s1.length; i++) m+=String.fromCharCode(s1.charCodeAt(i)-1);
        document.getElementById('email_hidden1').innerHTML=m;


        var s2="=b!isfg>#nbjmup;wpmvouffstAbdujwfxpsljoh/dpn#?wpmvouffstAbdujwfxpsljoh/dpn=0b?";
        n=""; for (i=0; i<s2.length; i++) n+=String.fromCharCode(s2.charCodeAt(i)-1);
        document.getElementById('email_hidden2').innerHTML=n;
    </script>
@endsection