<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mailController extends Controller
{
    public function open_form()
    {
        return view('Mails/mail');
    }
    public function send_mail(Request $req){
        $emails = [
        'email' => $req->get('email'),
        'cc' => $req->get('cc'),
        'bcc' => $req->get('bcc')
        ];

        $details = [
        'subject' => $req->get('subject'),
        'body' => $req->get('details')
        ];

        if($emails["cc"] == '' && $emails["bcc"] == ''){
            Mail::to($emails['email'])->send(new Mail($details));
            return redirect('mail_form')->with('status', "Email Sent 
            Successfully!");
        }
        elseif($emails["bcc"] == ''){
            Mail::to($emails['email'])->cc($emails['cc'])->send(new
            form_mail($details));
            return redirect('mail_form')->with('status', "Email Sent 
            Successfully!");
        }
        else{
            Mail::to($emails['email'])->cc($emails['cc'])->bcc($emails['bcc'])->send(new Mail($details));
            return redirect('mail_form')->with('status', "Email Sent 
            Successfully!");
        }
    }
        

}
