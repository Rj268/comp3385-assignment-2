<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Feedback;
use Illuminate\Support\Facades\Mail;


class FeedbackController extends Controller
{
    public function create(){
        return view('feedback-form');
    }

    public function send(Request $request){
        $request->validate([
            'fullname' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string'
        ]);

        $fullname = $request->input('fullname');
        $email = $request->input('email');
        $message = $request->input('comment');

        Mail::to('comp3385@uwi.edu', 'COMP3385 Course Admin')->send(new Feedback($fullname, $email, $message));
}}
