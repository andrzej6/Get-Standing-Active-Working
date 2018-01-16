<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Nudge_reg;
use Mail;

class NudgeSend2Emails extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;
    protected $tosend;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Nudge_reg $tosend)
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

        Mail::send('emails.aw.nudge_reg', $array,function ($message) use ($tosend) {
            $message->from('registrations@activeworking.com', 'Active Working');
            $message->to($tosend->email);
            $message->subject('Thank you for your LITTLE NUDGE ORDER');
        });


        Mail::send('emails.aw.nudge_reg_notify', $array, function ($message) use ($tosend){
            $message->from('registrations@activeworking.com', 'Active Working');
            $message->to('info@activeworking.com');
			$message->to('ellie@activeworking.com');
            $message->cc('web@activeworking.com');
            $message->subject('LITTLE NUDGE ORDER NOTIFICATION');
        });
    }
}
