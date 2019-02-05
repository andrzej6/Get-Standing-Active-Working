@extends('layouts.aw.summit-2018')

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
    Active Working Summit 2019. Book Now.
@endsection


@section('aw-maincontent')
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


    <!--
    <div style="font-weight: bold;color:red;">
        Book <span style="text-decoration: underline;font-weight: bold;">before 28th February 2017</span> and receive a
        <span style="text-decoration: underline;font-weight: bold;">10% discount </span> to Active Working Summit 2017.<br/><br/>
    </div>

    <div class="">
        The Active Working Summit is officially supported by Dame Sally Davies, Chief Medical Officer of England.
    </div>
    <br/>
    <span style="font-size: 16px;font-weight:bold">The programme is now available for
            <a href="{{ url('/') }}/pdfs/Summit-Brochure.pdf" style="font-weight:bold;text-decoration: underline" target="_blank">DOWNLOAD HERE.</a></span>


    -->

        <div class="" style="font-weight: bold">
            The Active Working Summit is officially supported by Dame Sally Davies, Chief Medical Officer of England.
        </div>
		<!--
        <br/>
        <span style="color:red;font-weight:bold">EARLY BIRD DISCOUNT 30% (valid until July 31st 2018)</span>
		

        <br/><br/>
        The 2019 programme will be published in November 2018.
		-->

    <br/><br/>

    <span style="font-size: 14px;font-weight: bold">
        After completing our registration, please can confirm your booking by
        <span style="text-decoration:underline; font-weight:bold">requesting an invoice</span>
        or <span style="text-decoration:underline; font-weight:bold">making a card payment</span>.
    </span>

     <br/>


    {!!  Form::open(array('url' => 'summit_reg','class' => 'summit-contact')) !!}



    <ul>

        <br/><br/>
        <h1>2019 Registration Form</h1>

        <li>
            Please also send me details on the following:<br/>
            {!!  Form::checkbox('details[1]', 'exhibiting/sponsoring') !!}
               <div class="checkboxtext">Exhibiting at or sponsoring of this event</div><br/>
            {!!  Form::checkbox('details[2]', 'media partner') !!}
               <div class="checkboxtext">Becoming a media partner</div>
        </li>


        <li>
            <br/>
            <span class="required_notification">* denotes required field </span>
        </li>

        <br/>

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
            {!!   Form::label('first_name', '(*)First Name:') !!}
            {!!   Form::text('first_name', old('first_name'), array('id' => 'fname')) !!}
            <div style="clear: both;"></div>
        </li>

        <li>
            {!!   Form::label('last_name', '(*)Last Name:') !!}
            {!!   Form::text('last_name', old('last_name'), array('id' => 'lname')) !!}
            <div style="clear: both;"></div>
        </li>


        <li>
            {!!   Form::label('email', '(*)Email address:') !!}
            {!!   Form::email('email', old('email'), array('id' => 'email')) !!}
            <div style="clear: both;"></div>
        </li>


        <li>
            {!!   Form::label('phone', '(*)Telephone:') !!}
            {!!   Form::text('phone', old('phone'), array('id' => 'workphone')) !!}
            <div style="clear: both;"></div>
        </li>

        <li>
            {!!   Form::label('organization', '(*)Institution/Organization:') !!}
            {!!   Form::text('organization', old('organization'), array('id' => 'ename')) !!}
            <div style="clear: both;"></div>
        </li>

        <li>
            {!!   Form::label('street', '(*)Street Address:') !!}
            {!!   Form::text('street', old('street'), array('id' => 'address1')) !!}
            <div style="clear: both;"></div>
        </li>

        <li>
            {!!   Form::label('town', '(*)Town:') !!}
            {!!   Form::text('town', old('town'), array('id' => 'city')) !!}
            <div style="clear: both;"></div>
        </li>

        <li>
            {!!   Form::label('county', 'County:') !!}
            {!!   Form::text('county', old('county'), array('id' => 'county')) !!}
            <div style="clear: both;"></div>
        </li>

        <li>
            {!!   Form::label('postcode', '(*)Post code:') !!}
            {!!   Form::text('postcode', old('postcode'), array('id' => 'postcode')) !!}
            <div style="clear: both;"></div>
        </li>


        <li>
            {!!   Form::label('country', 'Country:') !!}
            {!!   Form::text('country', old('country'), array('id' => 'country')) !!}
            <div style="clear: both;"></div>
        </li>

        <li>
            {!!   Form::label('jobposition', '(*)Job Position:') !!}
            {!!   Form::text('jobposition', old('jobposition'), array('id' => 'jpos')) !!}
            <div style="clear: both;"></div>
        </li>

        <li>
            {!!   Form::label('department', 'Department:') !!}
            {!!   Form::text('department', old('department'), array('id' => 'dep')) !!}
            <div style="clear: both;"></div>
        </li>


        <li>
            {!!   Form::label('furniture_supplier', '(*) I am a SUPPLIER DELEGATE (ie I work / represent a company which supplies office furniture or office wellness solutions)', array('class' => 'supplier')) !!}
            {!!  Form::radio('furniture_supplier', 'YES', true,  array('id' => 'supplier1')) !!}<div class="checkboxtext"> YES</div>
            {!!  Form::radio('furniture_supplier', 'NO',  false, array('id' => 'supplier2')) !!}<div class="checkboxtext"> NO </div>
        </li>



        <li>
            <label>Dietary Requirements:</label>
            <div style="clear:both"></div>
            <div>

            <div class="checkbox-quarter">
            {!!  Form::checkbox('dietary[0]', 'Vegan') !!} Vegan <br/>
            {!!  Form::checkbox('dietary[1]', 'Vegeterian') !!} Vegeterian
            </div>

            <div class="checkbox-quarter">
            {!!  Form::checkbox('dietary[2]', 'No beef') !!} No beef <br/>
            {!!  Form::checkbox('dietary[3]', 'No pork') !!} No pork
            </div>

            <div class="checkbox-quarter">
            {!!  Form::checkbox('dietary[4]', 'No seafood') !!} No seafood <br/>
            {!!  Form::checkbox('dietary[5]', 'No fish') !!} No fish
            </div>

            <div class="checkbox-quarter">
            {!!  Form::checkbox('dietary[6]', 'No Diary') !!} No diary <br/>
            {!!  Form::checkbox('dietary[7]', 'Allergy/Other') !!} Allergy/Other
            </div>
            </div>
        </li>


        <li>
            {!!   Form::label('allergy', 'Care has been taken to source locally produced products and to use only sustainable fish stock. If allergy / other please state here:', array('class' => 'label-smalltext')) !!}
            {!!   Form::text('allergy', old('allergy'), array('id' => 'allergy')) !!}
            <div style="clear: both;"></div>
        </li>

        <li>
            {!!   Form::label('assistance', 'Please tick for contact to discuss access needs or special assistance',array('class' => 'label-smalltext')) !!}
            {!!  Form::checkbox('assistance', 'assistance', false,  array('id' => 'assistance')) !!}
            <div style="clear: both;"></div>
        </li>


        <li>
            {!!   Form::label('correspondence', 'Some sit-stand and office furniture third party suppliers offer discounted product via this website. If you would like to receive third party supplier correspondence please tick this box.', array('class' => 'label-smalltext')) !!}
            {!!  Form::checkbox('correspondence', 'correspondence', false,  array('id' => 'correspondence')) !!}
            <div style="clear: both;"></div>
        </li>



        <li>
            {!!   Form::label('terms', ' I have read & agree to the Terms & Conditions',array('class' => 'label-redt')) !!}
            {!!  Form::checkbox('terms', 'terms', false,  array('id' => 'terms')) !!}
            <a href="{{ url('/') }}/pdfs/aw/terms.pdf" class="terms-link" target="_blank"><img src="{{ url('/') }}/img/general/icons/pdficon.png"/></a>

        </li>




        <li style="width:75%;margin-top:10px">
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
            $("#city").attr("required", "true");
            $("#postcode").attr("required", "true");
            $("#jpos").attr("required", "true");
            $("#terms").attr("required", "true");
        });
    </script>
@endsection