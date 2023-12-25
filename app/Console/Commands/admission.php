<?php

namespace App\Console\Commands;
use App\Models\Student;
use Illuminate\Console\Command;
use Mail;

class admission extends Command
{
        /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admission:notification';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Notification for Admissions Sent Successfully';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $usersMail=Student::select('email')->get();
        // $usersMail="touchthetechyt@gmail.com";
        $emails=[];
        foreach($usersMail as $mail){
            $emails[]=$mail['email'];
        }
        Mail::send('Mails.mail',[],function ($message) use ($emails){
            $message->to($emails)->subject('Hello! Abdullah Here!');
        });
    }
}
