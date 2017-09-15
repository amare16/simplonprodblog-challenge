<?php

namespace App\Http\Controllers;

use App\Post;

class PagesController extends Controller {

    public function getIndex() {
        # process variable data or params
        # talk to the model
        # receive from the model
        # compile or process data from the model if needed
        # pass that data to the correct view

        $posts = Post::orderBy('created_at', 'desc')->limit(2)->get();
        return view('pages.welcome')->withPosts($posts);
    }

    public function getAbout() {
        return view('pages.about');
    }

    // we can use public function postcontact(){}
    public function getContact() {
        return view('pages.contact');
    }


}