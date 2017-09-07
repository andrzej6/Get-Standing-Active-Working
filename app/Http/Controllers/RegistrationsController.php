<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class RegistrationsController extends Controller
{

    public function sendcsv()
    {
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=data.csv');
        $output = fopen('php://output', 'w');
        $customers = DB::connection('mysql2')->table('customers')->select('email', 'date_created')->where('created_at', '>=', date(strtotime('today - 30 days')))->orderBy('date_created', 'desc');

        fputcsv($output, $customers->get());
    }

    public function gbs()
    {
        $customers = DB::connection('mysql2')->table('customers')->orderBy('date_created', 'desc')->paginate(10);
        return view('registrations.gbs', compact('customers'));
    }


    public function gaus()
    {
        $customers = DB::connection('mysql')->table('gbs_regs')->where('country', 'au')->orderBy('created_at', 'desc')->paginate(10);
        $country = 'Get Australia Standing';
        return view('registrations.gint', compact('customers','country'));
    }

    public function gcan()
    {
        $customers = DB::connection('mysql')->table('gbs_regs')->where('country', 'can')->orderBy('created_at', 'desc')->paginate(10);
        $country = 'Get Canada Standing';
        return view('registrations.gint', compact('customers', 'country'));
    }

    public function gusa()
    {
        $customers = DB::connection('mysql')->table('gbs_regs')->where('country', 'us')->orderBy('created_at', 'desc')->paginate(10);
        $country = 'Get America Standing';
        return view('registrations.gint', compact('customers', 'country'));
    }

    public function aw()
{
    $customers = DB::connection('mysql')->table('gbs_regs')->where('country', 'AW REG')->orderBy('created_at', 'desc')->paginate(10);
    $country = 'Active Working';
    return view('registrations.gint', compact('customers', 'country'));
}

    public function awsummit()
    {
        $customers = DB::connection('mysql2')->table('customers1s')
            ->select(DB::raw('CONCAT(customers1s.title, customers1s.first_name , customers1s.last_name) as name,
            customers1s.id as REF, customers1s.organization, customers1s.jobposition as position,
            customers1s.department as department, customers1s.furniture_supplier as supplier,
            customers1s.phone, customers1s.email, customers1s.member,
            customers1s.street, customers1s.town, customers1s.county, customers1s.postcode, customers1s.country,
            customers1s.dietary, customers1s.allergy, customers1s.assistance, customers1s.correspondence,
            customers1s.date_created,
            orders.payment_status, orders.payment_amount, orders.selected_option, orders.transaction_id'))
            ->leftJoin('orders', 'customers1s.id', '=', 'orders.user_id')->orderBy('customers1s.date_created', 'desc')->paginate(10);
        $country = 'Active Working Summit 2017';
        return view('registrations.awsummit', compact('customers', 'country'));
    }


    public function oyf()
    {
        $customers = DB::connection('mysql')->table('oyf_regs')->orderBy('created_at', 'desc')->paginate(50);
        $country = 'On Your Feet Day';
        return view('registrations.oyf', compact('customers', 'country'));
    }


    public function overview()
    {
        $gbs_regs = collect(DB::connection('mysql2')->table('customers')->select('*')->get());
        $gbs_popups = collect(DB::connection('mysql2')->table('email_market')->select('*')->get());
        $summit = collect(DB::connection('mysql2')->table('customers1s')->select('*')->get());

        $int_regs = collect(DB::connection('mysql')->table('gbs_regs')->select('*')->get());
        $int_popups = collect(DB::connection('mysql')->table('gbs_popups')->select('*')->get());
        $oyf_regs = collect(DB::connection('mysql')->table('oyf_regs')->select('*')->get());

        $dates = array('2017-01','2017-02','2017-03','2017-04','2017-05','2017-06','2017-07',
                       '2017-08','2017-09','2017-10','2017-11','2017-12','2018-01');


        for ($i = 0; $i < count($dates)-1; $i++) {
            $filtered_gbs[$i] = count($gbs_regs->filter(function ($item) use ($dates,$i)
                {return ($item->date_created >= $dates[$i] && $item->date_created < $dates[$i+1]);})->all());

            $filtered_aus[$i] = count($int_regs->filter(function ($item) use ($dates,$i)
            {return ($item->created_at >= $dates[$i] && $item->created_at < $dates[$i+1] && $item->country =='au');})->all());

            $filtered_can[$i] = count($int_regs->filter(function ($item) use ($dates,$i)
            {return ($item->created_at >= $dates[$i] && $item->created_at < $dates[$i+1] && $item->country =='can');})->all());

            $filtered_us[$i] = count($int_regs->filter(function ($item) use ($dates,$i)
            {return ($item->created_at >= $dates[$i] && $item->created_at < $dates[$i+1] && $item->country =='us');})->all());

            $filtered_aw[$i] = count($int_regs->filter(function ($item) use ($dates,$i)
            {return ($item->created_at >= $dates[$i] && $item->created_at < $dates[$i+1] && $item->country =='AW REG');})->all());

            $filtered_summit[$i] = count($summit->filter(function ($item) use ($dates,$i)
            {return ($item->date_created >= $dates[$i] && $item->date_created < $dates[$i+1]);})->all());

            $filtered_oyf[$i] = count($oyf_regs->filter(function ($item) use ($dates,$i)
            {return ($item->created_at >= $dates[$i] && $item->created_at < $dates[$i+1]);})->all());



            $filtered_gbspopup[$i] = count($gbs_popups->filter(function ($item) use ($dates,$i)
            {return ($item->time >= $dates[$i] && $item->time < $dates[$i+1]);})->all());


            $filtered_auspopup[$i] = count($int_popups->filter(function ($item) use ($dates,$i)
            {return ($item->created_at >= $dates[$i] && $item->created_at < $dates[$i+1] && $item->country == 'aus');})->all());

            $filtered_canpopup[$i] = count($int_popups->filter(function ($item) use ($dates,$i)
            {return ($item->created_at >= $dates[$i] && $item->created_at < $dates[$i+1] && $item->country == 'can');})->all());

            $filtered_uspopup[$i] = count($int_popups->filter(function ($item) use ($dates,$i)
            {return ($item->created_at >= $dates[$i] && $item->created_at < $dates[$i+1] && $item->country == 'us');})->all());

            $filtered_awpopup[$i] = count($int_popups->filter(function ($item) use ($dates,$i)
            {return ($item->created_at >= $dates[$i] && $item->created_at < $dates[$i+1] && $item->country == 'AW REG');})->all());

        }

        return view('registrations.overview',
            compact('filtered_gbs','filtered_aus','filtered_can','filtered_us','filtered_aw','filtered_summit','filtered_oyf',
                    'filtered_gbspopup','filtered_auspopup','filtered_canpopup','filtered_uspopup','filtered_awpopup','dates'));
    }







    public function gbspopup()
    {
        $customers = DB::connection('mysql2')->table('email_market')->orderBy('time', 'desc')->paginate(100);
        return view('registrations.gbspopup', compact('customers'));
    }


    public function gauspopup()
    {
        $customers = DB::connection('mysql')->table('gbs_popups')->where('country', 'aus')->orderBy('created_at', 'desc')->paginate(100);
        $country = 'Get Australia Standing';
        return view('registrations.gintpopup', compact('customers','country'));
    }

    public function gcanpopup()
    {
        $customers = DB::connection('mysql')->table('gbs_popups')->where('country', 'can')->orderBy('created_at', 'desc')->paginate(100);
        $country = 'Get Canada Standing';
        return view('registrations.gintpopup', compact('customers','country'));
    }

    public function gusapopup()
    {
        $customers = DB::connection('mysql')->table('gbs_popups')->where('country', 'usa')->orderBy('created_at', 'desc')->paginate(100);
        $country = 'Get America Standing';
        return view('registrations.gintpopup', compact('customers','country'));
    }

    public function awpopup()
    {
        $customers = DB::connection('mysql')->table('gbs_popups')->where('country', 'AW REG')->orderBy('created_at', 'desc')->paginate(100);
        $country = 'Active Working';
        return view('registrations.gintpopup', compact('customers','country'));
    }





    }
