<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\OyfRegRequest;
use Log;
use App\Oyf_reg;

use App\Jobs\OyfSend2Emails;


class OyfController extends Controller
{

    public function __construct()
    {
        $this->middleware('sitemap');
    }

    public function index($country='britain', $page='index')
    {

        if ($country == 'signup') {
            return view('oyf.signup');
        } else
        {
            if (!view()->exists('oyf.' . $country . '.' . $page)) {
                $page ='error_page';
                return view('errors.oyf-error', compact('page'));
            } else {
                return view('oyf.' . $country. '.'. $page, compact('page'));
            }
        }
    }




    public function store(OyfRegRequest $request){

        $reg = new Oyf_reg($request->except('extras'));


        $extras='';
        if (!empty($request->extras))
            foreach($request->extras as $add)
                $extras .= $add.', ';
        $reg->extras = $extras;


        if ($reg->save())
        {
            $to_send = Oyf_reg::findOrFail($reg->id);
            $this->dispatch(new OyfSend2Emails($to_send));

            flash('Thank you for your enquiry, we will be in touch shortly.', 'success');
        }
        else {flash('Cannot register at the moment. Please try again later', 'danger');}

        return redirect('/signup');
    }

}
