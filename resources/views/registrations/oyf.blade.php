@extends('layouts.registrations')

@section('inlinestyle')
    <link rel="stylesheet" type="text/css" href="css/regs.css">
@endsection

@section('description')
    Registrations
@endsection

@section('title')
    {{$country}} Registrations
@endsection

@section('pagetitle')
    {{$country}} Registrations
@endsection


@section('content')


    <table class="table">
        <thead>
        <tr>
            <th>title</th>
            <th>firstname</th>
            <th>last name</th>
            <th>email</th>
            <th>workphone</th>
            <th>mobile</th>
            <th>company</th>
            <th>address1</th>
            <th>address2</th>
            <th>postcode</th>
            <th>city</th>
            <th>county</th>
            <th>country</th>
            <th>job position</th>
            <th>department</th>
            <th>on behalf</th>

            <th>location</th>
            <th>workplace size</th>
            <th>extra workplace</th>
            <th>extra workplace size</th>
            <th>hear from</th>

            <th>extra</th>
            <th>date</th>
        </tr>
        </thead>


        @foreach ($customers as $customer)


            <tr>
                <td>{{$customer->title}}</td>
                <td>{{$customer->fname}}</td>
                <td>{{$customer->lname}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->workphone}}</td>
                <td>{{$customer->mobilephone}}</td>
                <td>{{$customer->ename}}</td>
                <td>{{$customer->address1}}</td>
                <td>{{$customer->address2}}</td>
                <td>{{$customer->postcode}}</td>
                <td>{{$customer->city}}</td>
                <td>{{$customer->county}}</td>
                <td>{{$customer->country}}</td>

                <td>{{$customer->jpos}}</td>
                <td>{{$customer->dep}}</td>
                <td>{{$customer->behalf}}</td>

                <td>{{$customer->event_loc}}</td>
                <td>{{$customer->workplace_size}}</td>
                <td>{{$customer->workplace_extra}}</td>
                <td>{{$customer->workplace_extra_size}}</td>
                <td>{{$customer->hear_from}}</td>

                <td >{{$customer->extras}}</td>
                <td><?php  print date("Y-m-d", strtotime($customer->created_at)); ?></td>
            </tr>

        @endforeach


    </table>


    <div id="media-pagination">
        {!! $customers->render() !!}
    </div>



@endsection

