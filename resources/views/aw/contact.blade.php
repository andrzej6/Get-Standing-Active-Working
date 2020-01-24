@extends('layouts.aw.basic')

@section('header-styles')
    @parent
    <link rel="stylesheet" type="text/css" href="css/aw/contact.css">
@endsection

@section('description')
    Enquiry Form
@endsection

@section('keywords')
    active-working, productive-working, office-productivity, sit-stand, standing-desk, stand-up desk, sit-n-stand,
    wellness, office-wellness, employee-wellness, sedentary-office, wellbeing, physical-activity, employee-engagement,
    staff-resilience, stress-management, productivity, occupational-health, height-adjustable-desk, healthy-office, health-and-safety,
    office-wellbeing, well-being
@endsection

@section('title')
    Enquiry form
@endsection


@section('content')

        @include('shared.trail')
        <br/>

        {{ $page }}


        <h1>Please fill in our enquiry form</h1>
        <br/>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    <li>
                        <strong>Correct following errors: </strong>
                    </li>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (Session::has('status'))
            <div class="alert alert-{{Session::get('level')}}">
                <strong>{{Session::get('status')}}</strong>
            </div>
        @endif


        {!!  Form::open(array('url' => 'aw_reg','class' => 'register_form')) !!}

        {!!  Form::token() !!}

        <ul>

            <li>
                If you wish to speak with someone directly, please call us at
                <span class="active-working-blue"><a href="tel:+44 20 8255 6091">+44 20 8255 6091</a></span>.
                <br/>

                <span class="required_notification">* denotes required field </span>
            </li>

            <li>
                {!!   Form::label('title', '(*)Title:') !!}
                {!!   Form::select('title',
                                    array('' => 'Select Your Title',
                                          'Mr.' => 'Mr.',
                                          'Mrs.' => 'Mrs.',
                                          'Miss' => 'Miss',
                                          'Ms.' => 'Ms.'),
                                    array('id' => 'title')) !!}
                <div style="clear: both;"></div>
            </li>

            <li>
                {!!   Form::label('fname', '(*)First Name:') !!}
                {!!   Form::text('fname', old('fname'), array('id' => 'fname')) !!}
                <div style="clear: both;"></div>
            </li>

            <li>
                {!!   Form::label('lname', '(*)Last Name:') !!}
                {!!   Form::text('lname', old('lname'), array('id' => 'lname')) !!}
                <div style="clear: both;"></div>
            </li>

            <li>
                {!!   Form::label('email', '(*)Email address:') !!}
                {!!   Form::email('email', old('email'), array('id' => 'email')) !!}
                <span class="form_hint">Proper format: "name@domain.com"</span>
                <div style="clear: both;"></div>
            </li>

            <li>
                {!!   Form::label('workphone', '(*)Work phone number:') !!}
                {!!   Form::text('workphone', old('workphone'), array('id' => 'workphone')) !!}
                <span class="form_hint">include AREA CODE please</span>
                <div style="clear: both;"></div>
            </li>

            <li>
                {!!   Form::label('mobilephone', 'Mobile phone number:') !!}
                {!!   Form::text('mobilephone', old('mobilephone'), array('id' => 'mobilephone')) !!}
                <div style="clear: both;"></div>
            </li>

            <li>
                {!!   Form::label('ename', '(*)Company Name:') !!}
                {!!   Form::text('ename', old('ename'), array('id' => 'ename')) !!}
                <div style="clear: both;"></div>
            </li>

            <li>
                {!!   Form::label('address1', '(*)Company address line1:') !!}
                {!!   Form::text('address1', old('address1'), array('id' => 'address1')) !!}
                <div style="clear: both;"></div>
            </li>

            <li>
                {!!   Form::label('address2', 'Address line2:') !!}
                {!!   Form::text('address2', old('address2'), array('id' => 'address2')) !!}
                <div style="clear: both;"></div>
            </li>

            <li>
                {!!   Form::label('postcode', '(*)Zip code:') !!}
                {!!   Form::text('postcode', old('postcode'), array('id' => 'postcode')) !!}
                <div style="clear: both;"></div>
            </li>

            <li>
                {!!   Form::label('city', '(*)City:') !!}
                {!!   Form::text('city', old('city'), array('id' => 'city')) !!}
                <div style="clear: both;"></div>
            </li>

            <li>
                {!!   Form::label('county', 'County:') !!}

                {!!   Form::text('county', old('county'), array('id' => 'county')) !!}
                <div style="clear: both;"></div>
            </li>

            <li>
                {!!   Form::label('jpos', 'Job Position:') !!}
                {!!   Form::text('jpos', old('jpos'), array('id' => 'jpos')) !!}
                <div style="clear: both;"></div>
            </li>

            <li>
                {!!   Form::label('dep', 'Department:') !!}
                {!!   Form::text('dep', old('dep'), array('id' => 'dep')) !!}
                <span class="form_hint">"e.g. Human Resources, Procurement, Facilities, Health \& Safety or General Management"</span>
                <div style="clear: both;"></div>
            </li>


            <li>
                {!!   Form::label('behalf', '(*)This Registration is on behalf of:') !!}
                {!!   Form::select('behalf',
                                    array('' => 'Select Option',
                                          'practisioner' => 'Practisioner',
                                          'exercise professional' => 'Exercise Professional',
                                          'company 1-10' => 'Company 1-10',
                                          'company 11-25' => 'Company 11-25',
                                          'company 26-99' => 'Company 26-99',
                                          'company 100-499' => 'Company 100-499',
                                          'company 500 and more employees' => 'Company (>500 employees)',
                                          'public sector org' => 'Public Sector Organization',
                                          'private individual' => 'Private Individual'),
                                    array('id' => 'behalf')) !!}
                <div style="clear: both;"></div>
            </li>

            <li>
                {!!   Form::label('fquest', 'Question:') !!}
                {!!   Form::textarea('fquest', old('fquest'), array('id' => 'fquest','cols'=>40,'rows'=>6)) !!}
                <div style="clear: both;"></div>
            </li>


            <li>
                <div class="active-working-big active-working-blue">
                    <i>I would like to enquire about:</i>:<br/>
                    <div class="checkbox-block">
                        {!!  Form::checkbox('offer[0]', 'Introductory CALL BACK') !!}
                        Introductory CALL BACK to discuss my specific needs
                    </div>

                    <div class="checkbox-block">
                        {!!  Form::checkbox('offer[1]', 'sit-stand solutions trial') !!}
                        FREE TRIAL of Sit-Stand solutions
                    </div>

                    <!--
                    <div class="checkbox-block">
                        {!!  Form::checkbox('offer[2]', 'nudge trial') !!}
                        FREE TRIAL of Little Nudge software
                    </div>
                    -->

                    <div class="checkbox-block">
                        {!!  Form::checkbox('offer[2]', 'active working seminar') !!}
                        Book Active Working SEMINAR
                    </div>
                </div>

                <br/>
                <span style="font-size:14px;">A representative will respond to you within 24 working hours. </span>

            </li>



            <li>
                <button class="submit" type="submit" id="yellsub">Submit</button>
            </li>


        </ul>

        {!!  Form::close() !!}

@endsection

@section('footer-scripts')
    @parent
    <script type="text/javascript">
        $( document ).ready(function() {
            $("#title").attr("required", "true");
            $("#fname").attr("required", "true");
            $("#lname").attr("required", "true");
            $("#email").attr("required", "true");
            $("#workphone").attr("required", "true");
            $("#ename").attr("required", "true");
            $("#address1").attr("required", "true");
            $("#postcode").attr("required", "true");
            $("#city").attr("required", "true");
            $("#behalf").attr("required", "true");
        });
    </script>
@endsection

