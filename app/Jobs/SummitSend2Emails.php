<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Mail;
use App\Customers1;

class SummitSend2Emails extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;
    protected $tosend;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Customers1 $tosend)
    {
        $this->tosend = $tosend;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $tosend = $this->tosend;

        Mail::send('emails.aw.summit_reg', array(),function ($message) use ($tosend) {
            $message->from('registrations@activeworking.com', 'Active Working');
            $message->to($tosend->email);
            $message->subject('ACTIVE WORKING SUMMIT 2019 - Thank you for your registration');
        });


        $array = $tosend->toArray();



        Mail::send('emails.aw.summit_reg_notify', $array, function ($message) use ($tosend){
            $message->from('registrations@activeworking.com', 'Active Working');
            $message->to('web@activeworking.com');
			//$message->to('ellie@activeworking.com');
            $message->cc('info@activeworking.com');
            //$message->bcc('sarah.brain@activeworking.com');
            $message->subject('ACTIVE WORKING | Summit Registration');
        });



    }
}
