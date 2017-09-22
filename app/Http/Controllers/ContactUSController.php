<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUS;
use Mail;

class ContactUSController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function contactUS() {

        return view('pages.contact');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function contactUSPost(Request $request) {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        ContactUS::created($request->all());

        Mail::send('pages.contact',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'message' => $request->get('message')
            ),

            function ($message) {
                    $message->from('$email', 'To Amare')->subject('Test Email');
                    $message->to('amarenighatu16@gmail.com', 'Bilaw');
            });

        return back()->with('success', 'Thanks for contacting us!');
    }
}
