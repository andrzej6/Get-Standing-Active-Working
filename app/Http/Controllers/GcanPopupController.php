<?php

namespace App\Http\Controllers;

use App\Jobs\CanSendPopupConf;
use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;
use DB;
use Session;
use Log;
use App\Gbs_popup;
use App\HelpClasses\gcan\Menu as Menu;
use Illuminate\Support\Facades\Validator;


class GcanPopupController extends Controller
{

// storing registration for e-newsletter in database
public function store (Request $request){

  $token = $request->input('_token');
  $email = $request->input('email1');

  //validate email input
  $validator = Validator::make($request->all(), [
      'email1' => 'email|unique:gbs_popups,email',
  ]);

  if ($validator->fails()) {
    $messages = $validator->errors();
    print str_replace("email1", "email", $messages->first('email1'));;
  }
  else
    {
      $popup = new Gbs_popup;
      $popup->email=$email;
      $popup->cust_key=$token;
      $popup->country='can';

      if ($popup->save())
      {
        $data =['email'=>$email, 'token' => $token];
        Log::info("Request cycle with Queues started -popup");
        $this->dispatch(new CanSendPopupConf($data));
        Log::info("Request cycle with Queues started -finished");
        print "";
      }
      else
        print "Problem with storing your data. Please try again later.";
    }
}

  public function confirm (Request $request){

    $token = $request->input('key');
    $email = $request->input('email');

    if (!empty($token) && !empty($email))
    {
      $user = DB::table('gbs_popups')->where('email', $email)->where('cust_key',$token)->first();
      if (!empty($user))
      {
        $rows = DB::table('gbs_popups')->where('email', $email)->where('cust_key',$token)->update(['active' => 1]);
        flash('Activation was successful. Thank you.','success');
      }
      else
      {
        flash('Cannot activate. Please try again later.','danger');
      }
    }

    else
    {
      flash('This page is not available.','danger');
    }

    $mainMenuOutput = Menu::getMenu('confirm');
    list ($trail1, $trail2) = Menu::TrailLink('Confirmation');
    return view('gcan.confirm',compact('mainMenuOutput','trail1','trail2'));
  }



}
