<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HelpClasses\aw\Menu as Menu;

use App\Http\Requests\GbsRegRequest;
use App\Http\Requests\AwsummitRequest;
use App\Gbs_reg;
use App\Customers1;
use Log;
use Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\URL;

use App\Http\Requests;
use App\Jobs\AwSend2Emails;
use App\Jobs\SummitSend2Emails;

class AwController extends Controller
{





    public function index($page='index')
    {

        if (!view()->exists('aw.' . $page)) {
            $page ='error_page';
            $mainMenuOutput = Menu::getMenu($page);
            list ($trail1, $trail2) = Menu::TrailLink($page);
            return view('errors.aw-error', compact('mainMenuOutput', 'trail1', 'trail2', 'page'));
        } else {
            $mainMenuOutput = Menu::getMenu($page);
            list ($trail1, $trail2) = Menu::TrailLink($page);
            return view('aw.' . $page, compact('mainMenuOutput', 'trail1', 'trail2', 'page'));
        }

    }



    public function summit($year='2017', $page='book')
    {

        if (!view()->exists('aw.summit.'.$year.'.'.$page)) {
            $page ='error_page';
            $mainMenuOutput = Menu::getMenu($page);
            list ($trail1, $trail2) = Menu::TrailLink($page);
            return view('errors.aw-error', compact('mainMenuOutput', 'trail1', 'trail2', 'page'));
        } else {
            $mainMenuOutput = Menu::getMenu('summit/'.$year.'/'.$page);
            list ($trail1, $trail2) = Menu::TrailLink('summit >> '.$year);
            return view('aw.summit.'.$year.'.'.$page, compact('mainMenuOutput', 'trail1', 'trail2', 'page'));
        }

    }




    public function store(GbsRegRequest $request){

        $reg = new Gbs_reg($request->except('offer'));
        $reg->country = 'AW REG';

        /**
        $reg->extras = $request->offer;
         * */

        $extras='';
        if (!empty($request->offer))
            foreach($request->offer as $add)
                $extras .= $add.', ';
        $reg->extras = $extras;


        if ($reg->save())
        {
            $to_send = Gbs_reg::findOrFail($reg->id);
            Log::info("Request cycle with Queues started active working");
            $this->dispatch(new AwSend2Emails($to_send));

            flash('Thank you for your enquiry, we will be in touch shortly.', 'success');
        }
        else {flash('Cannot register at the moment. Please try again later', 'danger');}


        return redirect('/contact');

    }



    public function message(Request $request)
    {
        $data = $request->all();
        $baseurl =URL::to('/');
        Log::info($data);
        Mail::send('emails.aw.message', $data,function ($message) {
            $message->from('info@activeworking.com', 'Active Working Summit 2017');
            $message->to('web@activeworking.com');
            $message->cc('info@activeworking.com');
            $message->bcc('sarah.brain@activeworking.com');
            $message->subject('Message from Summit Contact Form');
        });

        flash('Thank you for your enquiry, we will be in touch shortly.', 'success');
        return redirect($baseurl.'/summit/2017/contact');
    }


    public function summitreg(AwsummitRequest $request)
    {

        $details='';
        if (!empty($request->details))
            foreach($request->details as $add)
                $details .= $add.', ';
        $request->details = $details;

        $dietary='';
        if (!empty($request->dietary))
            foreach($request->dietary as $add)
                $dietary .= $add.', ';
        $request->dietary = $dietary;


        $baseurl =URL::to('/');

        $id = DB::connection('mysql2')->table('customers1s')->insertGetId(
            ['title' => $request->title,
             'first_name' => $request->first_name,
             'last_name' => $request->last_name,
             'organization' => $request->organization,
             'jobposition' => $request->jobposition,
             'department' => $request->department,
             'furniture_supplier' => $request->furniture_supplier,
             'street' => $request->street,
             'town' => $request->town,
             'county' => $request->county,
             'postcode'=>$request->postcode,
             'country'=>$request->country,
             'phone' => $request->phone,
             'email' => $request->email,
             'dietary' => $request->dietary,
             'allergy' => $request->allergy,
             'assistance' => $request->assistance,
             'date_created' => date("Y-m-d H:i:s",time()),
             'correspondence' => $request->correspondence,
             'details' => $request->details
            ]
        );


        if (!empty($id))
        {

            //Log::info('id='.$id);
            $to_send = Customers1::findOrFail($id);
            $supplier = $request->furniture_supplier;
            $replyto = $request->email;

            $mainMenuOutput = Menu::getMenu('summit/2017');
            list ($trail1, $trail2) = Menu::TrailLink('summit/2017');
            $page = 'book' ;

            //Log::info($to_send);
            $this->dispatch(new SummitSend2Emails($to_send));

            return view('aw.summit.2017.button',compact('page','id','supplier','replyto','mainMenuOutput','trail1','trail2','page'));

            //return redirect($baseurl.'/summit/2017/book');
        }
    }


}
