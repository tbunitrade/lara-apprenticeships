<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Mail;
use App\Mail\NewMail;

class PostController extends Controller
{
    //
    public  function index()
    {
        return view('add-blog-post-form');
    }

    public function store(Request $request)
    {
        $post = new Post;
        $post->title    = $request->title;
        $post->name     = $request->name;
        $post->number   = $request->number;
        $post->save();

        $mailData = [
            'title'     => $post->title,
            'name'      => $post->name,
            'number'    => $post->number
        ];

        Mail::to('bestlawyer.kiev@gmail.com')->send( new NewMail($mailData));

        //dd('Email is sent successfuly.');

        return redirect('/thankyou')->with('status','Blog Post Form Data Has Been inserted' );
    }
}
