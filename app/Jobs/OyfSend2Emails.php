<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Oyf_reg;
use Mail;

class OyfSend2Emails extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;
    protected $tosend;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Oyf_reg $tosend)
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
        $array = $tosend->toArray();

        Mail::send('emails.oyf.oyf_reg_new', $array,function ($message) use ($tosend) {
            $message->from('registrations@activeworking.com', 'On Your Feet Day');
            $message->to($tosend->email);
            $message->subject('ON YOUR FEET 2020 | Registration Confirmed | Get ready for #BIGWIGGLE April 24th');
        });



        Mail::send('emails.oyf.oyf_reg_notify', $array, function ($message) use ($tosend){
            $message->from('registrations@activeworking.com', 'On Your Feet Day');
            $message->to('web@activeworking.com');
			/*$message->to('ellie@activeworking.com');*/
            $message->cc('info@activeworking.com');
			$message->bcc('kuldeep@sit-stand.com');
            $message->subject('On Your Feet | Registration 2020');
        });



    }
}
