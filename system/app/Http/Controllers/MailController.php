<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendEmail;

class MailController extends Controller
{
    public function index(){
        $data =[
            'title' => 'mail from feny',
            'body' => 'this is for testing email'
        ];
        Mail::to('agungs12.032@gmail.com')->send(new SendEmail($data));

        dd('email send success');
    }
}
