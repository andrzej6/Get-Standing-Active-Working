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

        Mail::send('emails.oyf.oyf_reg', array(),function ($message) use ($tosend) {
            $message->from('info@activeworking.com', 'Active Working');
            $message->to($tosend->email);
            $message->subject('Thank you for your ON YOUR FEET registration');
        });


        $array = $tosend->toArray();

        Mail::send('emails.oyf.oyf_reg_notify', $array, function ($message) use ($tosend){
            $message->from('info@activeworking.com', 'Active Working');
            $message->to('web@activeworking.com');
            $message->subject('On Your Feet Registration');
        });
    }
}