@extends('layouts.registrations')

@section('inlinestyle')
    <link rel="stylesheet" type="text/css" href="css/regs.css">
@endsection

@section('description')
    Registrations
@endsection

@section('title')
    Overview
@endsection

@section('pagetitle')
    Overview
@endsection


@section('content')


    <table class="table smallcells">
        <thead>
        <tr>
            <th>Database</th>

            {{--

            --}}

            @foreach ($dates as $date)
                @if ($date !='2018-01')
                  <th>{{$date}}</th>
                @endif
            @endforeach



            {{--
            <th>2016 (01-03)</th>
            <th>2016 (04-06)</th>
            <th>2016 (07-09)</th>
            <th>2016 (10-12)</th>
            --}}
        </tr>
        </thead>



        <tr>
            <td>GBS Registrations</td>

            @foreach ($filtered_gbs as $item)
                <td>{{$item}}</td>
            @endforeach

        </tr>

        <tr>
            <td>AUS Registrations</td>

            @foreach ($filtered_aus as $item)
                <td>{{$item}}</td>
            @endforeach

        </tr>

        <tr>
            <td>CAN Registrations</td>

            @foreach ($filtered_can as $item)
                <td>{{$item}}</td>
            @endforeach

        </tr>

        <tr>
            <td>USA Registrations</td>

            @foreach ($filtered_us as $item)
                <td>{{$item}}</td>
            @endforeach

        </tr>

        <tr><td></td></tr>


        <tr>
            <td>AW Registrations</td>

            @foreach ($filtered_aw as $item)
                <td>{{$item}}</td>
            @endforeach

        </tr>

        <tr>
            <td>Summit Registrations</td>

            @foreach ($filtered_summit as $item)
                <td>{{$item}}</td>
            @endforeach

        </tr>


        <tr>
            <td>OYF Registrations</td>

            @foreach ($filtered_oyf as $item)
                <td>{{$item}}</td>
            @endforeach

        </tr>


        <tr><td></td></tr>


        <tr>
            <td>GBS Popups</td>

            @foreach ($filtered_gbspopup as $item)
                <td>{{$item}}</td>
            @endforeach

        </tr>


        <tr>
            <td>AUS Popups</td>

            @foreach ($filtered_auspopup as $item)
                <td>{{$item}}</td>
            @endforeach

        </tr>


        <tr>
            <td>CAN Popups</td>

            @foreach ($filtered_canpopup as $item)
                <td>{{$item}}</td>
            @endforeach

        </tr>

        <tr>
            <td>US Popups</td>

            @foreach ($filtered_uspopup as $item)
                <td>{{$item}}</td>
            @endforeach

        </tr>

        <tr>
            <td>AW Popups</td>

            @foreach ($filtered_awpopup as $item)
                <td>{{$item}}</td>
            @endforeach

        </tr>




    </table>

@endsection

