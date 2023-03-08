<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\NewMail;

class MailController extends Controller
{
    // 'Mail from OSonich'
    // 'This is for testing'
    public function index($title,$message)
    {
        $mailData = [
            'title' => $title,
            'body' => $message
        ];

        Mail::to('tbunitrade@gmail.com')->send( new NewMail($mailData));

        dd('Email is sent successfuly.');
    }
}
