<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Mail;
use App\Mail\NewMail;

class MailController extends Controller
{
    // 'Mail from OSonich'
    // 'This is for testing'
    public function go(Request $request)
    // public function index($title,$message)
    {
        $post = new Post;
        $post->title            = $request->title;
        $post->name             = $request->name;
        $post->number           = $request->number;
        //$post->description      = $request->description;
        $post->save();

        $mailData = [
            'title'     => $post->title,
            'name'      => $post->name,
            'number'    => $post->number
        ];

        Mail::to('tbunitrade@gmail.com')->send( new NewMail($mailData));

        dd('Email is sent successfuly.');

        return redirect('add-blog-post-form')->with('success','Data save and already sent successful' );
    }
}
