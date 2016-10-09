<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\HelpClasses\aw\FreshBooks\HttpClient as FreshBooks_HttpClient;
use App\HelpClasses\aw\FreshBooks\Client as HttpClient;

use App\Http\Requests\NudgeRegRequest;
use App\Nudge_reg;
use Log;


use App\Http\Requests;
use App\Jobs\NudgeSend2Emails;

class NudgeController extends Controller
{
    public function store(NudgeRegRequest $request){

        $reg = new Nudge_reg($request->all());

        if ($reg->save())
        {
            $to_send = Nudge_reg::findOrFail($reg->id);
            Log::info("Request cycle with Queues started little nudge");
            $this->dispatch(new NudgeSend2Emails($to_send));

            $url = "https://activeworking.freshbooks.com/api/2.1/xml-in";
            $token = "ef8732537d28a2472b24847fd9a3bc1d";

            //init singleton FreshBooks_HttpClient
            FreshBooks_HttpClient::init($url,$token);

            //new Client object
            $client = new HttpClient();

            //populate client’s properties
            $client->firstName = $reg->fname;
            $client->lastName = $reg->lname;
            $client->email = $reg->email;

            $client->workPhone = $reg->workphone;
            $client->pStreet1 =$reg->address1;
            $client->pStreet2 =$reg->address2;

            $client->pCity =$reg->city;
            $client->pCountry =$reg->country;
            $client->pCode =$reg->postcode;

            //all other required properties should be populated

            //try to create new client with provided data on FB server
            if(!$client->create()){
                //read error
                echo $client->lastError;
            }
            else{
                //print_r($client);
            }

            flash('Thank you for your order, we will be in touch shortly.', 'success');
        }
        else {flash('Cannot register at the moment. Please try again later', 'danger');}


        return redirect('/nudge_order');

    }
}
