@extends('layouts.gaus.basic')

@section('header-styles')
    @parent
    <link rel="stylesheet" type="text/css" href="css/gaus/contact.css">
	
	<script type="text/javascript">
			var allowSubmit = false;
			function capcha_filled () {
				allowSubmit = true;
			}
			function capcha_expired () {
				allowSubmit = false;
			}
			var onloadCallback = function() {
				grecaptcha.render('html_element', {
					'sitekey':'6LenhkcUAAAAAPJPkm-N_Z2e7Jh_R0RayRjHPtDX',
					'callback': capcha_filled,
					'expired-callback': capcha_expired
				});
			};
			function check_if_capcha_is_filled () {
				if(allowSubmit) return true;
				alert('Please check the capcha!');
				return false;
			}
			</script>
	 <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
	
@endsection

@section('description')
    Registration Form
@endsection

@section('keywords')
    get-australia-standing, active-working, productive-working, office-productivity, sit-stand,
    sit-stand-desk, standing-desk, height-adjustable-desk, healthy-office
@endsection

@section('title')
    Enquiry form. Free trial of Sit-Stand Solutions for Companies
@endsection


@section('content')

        @include('shared.trail')
        <br/>

        <h1>Please fill in our enquiry form / free trial enquiry</h1>
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


        {!!  Form::open(array('url' => 'gaus_reg','class' => 'register_form','onsubmit' => 'return check_if_capcha_is_filled();')) !!}

        {!!  Form::token() !!}

        <ul>

            <li>
                <span class="required_notification">* denotes required field </span>

                <div class="checkbox-group">
                    <div class="checkbox-tabbed">
                        <div class="checkbox-inline">
                            {!!  Form::checkbox('offer', 'free_trial') !!}
                            I would like to apply for a 30 day FREE TRIAL offer<br/>


                            {{--
                            implementing array of checkboxes
                            {!!  Form::checkbox('offer[0]', 'free_trial') !!}
                            I would like to apply for a 30 day FREE TRIAL offer<br/>
                            {!!  Form::checkbox('offer[1]', 'free_product') !!}
                            free product<br/>
                            --}}

                        </div>
                    </div>
                </div>

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
                {!!   Form::label('postcode', '(*)Post code:') !!}
                {!!   Form::text('postcode', old('postcode'), array('id' => 'postcode')) !!}
                <span class="form_hint">BLOCK CAPITALS please</span>
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
			 <li style="margin-top: 10px;">
                <label for="fquest"></label>
                <div id="html_element" style="display:inline-block"></div>			
                <div style="clear: both;"></div>
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

