{{-- */
$i = 0;
/* --}}

@extends('layouts.registrations')

@section('inlinestyle')
    <link rel="stylesheet" type="text/css" href="css/regs.css">
@endsection

@section('description')
    Registrations
@endsection

@section('title')
    GBS Popup Registrations
@endsection

@section('pagetitle')
    Get Britain Standing Popup Registrations
@endsection


@section('content')


    <table class="table table-smallwidth table-centered table-smallfont">
        <thead>
        <tr>
            <th>#</th>
            <th>email</th>
            <th>date</th>
        </tr>
        </thead>



        @foreach ($customers as $customer)

             {{-- */
             $i++;
             $counter = ($customers->currentPage()-1)*100+$i;
             /* --}}

            <tr>
                <td>{{$counter}}</td>
                <td>{{$customer->email}}</td>
                <td><?php  print date("Y-m-d", strtotime($customer->time)); ?></td>
            </tr>

        @endforeach


    </table>


    <div id="media-pagination">
        {!! $customers->render() !!}
    </div>



@endsection

