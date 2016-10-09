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
    Active Working Summit 2017. Contact Us.
@endsection


@section('aw-maincontent')
    <br/>

    <h1>Send us an email</h1>
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


    {!!  Form::open(array('url' => 'summit_message','class' => 'summit-contact')) !!}

    {!!  Form::token() !!}

    <ul>
        <li>
            {!!   Form::label('fname', 'Your Name:') !!}
            {!!   Form::text('fname', old('fname'), array('id' => 'fname')) !!}
            <div style="clear: both;"></div>
        </li>

        <li>
            {!!   Form::label('email', 'Email address:') !!}
            {!!   Form::email('email', old('email'), array('id' => 'email')) !!}
            <div style="clear: both;"></div>
        </li>

        <li>
            {!!   Form::label('mess', 'Message:') !!}
            {!!   Form::textarea('mess', null, ['size' => '30x5']) !!}
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
            $("#fname").attr("required", "true");
            $("#email").attr("required", "true");
            $("#mess").attr("required", "true");
        });
    </script>
@endsection