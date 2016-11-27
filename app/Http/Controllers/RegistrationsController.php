<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class RegistrationsController extends Controller
{

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
        $customers = DB::connection('mysql')->table('gbs_popups')->where('country', 'us')->orderBy('created_at', 'desc')->paginate(100);
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
