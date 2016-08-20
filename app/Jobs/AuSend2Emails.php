<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Gbs_reg;
use Mail;

class AuSend2Emails extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;
    protected $gaus;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Gbs_reg $gaus)
    {
        $this->gaus = $gaus;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $gaus = $this->gaus;

        Mail::send('emails.gaus.gaus_reg', array(),function ($message) use ($gaus) {
            $message->from('info@activeworking.com', 'Active Working');
            $message->to($gaus->email);
            $message->subject('Thank you for your GET AUSTRALIA STANDING enquiry');
        });


        $array = $gaus->toArray();

        Mail::send('emails.gaus.gaus_reg_notify', $array, function ($message) use ($gaus){
            $message->from('info@activeworking.com', 'Active Working');
            $message->to('web@activeworking.com');
            $message->subject('GetAustraliaStanding.Com. Details from enquiry form');
        });
    }
}
