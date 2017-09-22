<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use Mail;

class PagesController extends Controller {

    public function getIndex() {
        # process variable data or params
        # talk to the model
        # receive from the model
        # compile or process data from the model if needed
        # pass that data to the correct view

        $posts = Post::orderBy('created_at', 'desc')->limit(10)->get();
        return view('pages.welcome')->withPosts($posts);
    }

    public function getAbout() {
        return view('pages.about');
    }

    // we can use public function postcontact(){}
    public function getContact() {
        return view('pages.contact');
    }

    public function contactUSPost(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'subject' => 'min:3',
            'message' => 'min:10'
        ]);

        $data = array(
            'email' => $request->email,
            'subject' => $request->subject,
            'bodyMessage' => $request->message
        );

        Mail::queue('emails.contact', $data, function($message) use($data) {
            $message->from($data['email']);
            $message->to('amarenighatu16@gmail.com');
            $message->subject($data['subject']);
        });
    }


}