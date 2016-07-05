<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Gbs_reg;
use Mail;
use Log;


class Send2Emails extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;
    protected $gbs;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Gbs_reg $gbs)
    {
       $this->gbs = $gbs;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $gbs = $this->gbs;

        Mail::send('emails.gbs.gbs_reg', array(),function ($message) use ($gbs) {
            $message->from('info@activeworking.com', 'Andrzej');
            $message->to($gbs->email);
        });


        $array = $gbs->toArray();

        Mail::send('emails.gbs.gbs_reg_notify', $array, function ($message) use ($gbs){
            $message->from('info@activeworking.com', 'Andrzej');
            $message->to('web@activeworking.com');
        });

    }
}
