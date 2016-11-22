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
        return view('registrations.gaus', compact('customers'));
    }


    public function gbspopup()
    {
        $customers = DB::connection('mysql2')->table('email_market')->orderBy('time', 'desc')->paginate(100);
        return view('registrations.gbspopup', compact('customers'));
    }

    public function gauspopup()
    {
        $customers = DB::connection('mysql')->table('gbs_popups')->where('country', 'aus')->orderBy('created_at', 'desc')->paginate(100);
        return view('registrations.gauspopup', compact('customers'));
    }





    }
