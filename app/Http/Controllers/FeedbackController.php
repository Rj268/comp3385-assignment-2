<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Mail\Feedback;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;


class FeedbackController extends Controller
{
    public function create(){
        return view('feedback-form');
    }

    public function send(Request $request):RedirectResponse{
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'comment' => 'required'
        ]);

        Log::info('Feedback received from ' . $request->name . ' (' . $request->email . '): ' . $request->comment);


        Mail::to('comp3385@uwi.edu', 'COMP3385 Course Admin')->send(new Feedback($request->name, $request->email, $request->comment));

        return redirect('/feedback/success')->with('Success', 'Feedback sent successfully!');


}}
