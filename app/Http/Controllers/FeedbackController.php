<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackRequest;
use App\Mail\Feedback;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    public function create()
    {
        return view('feedback-form');
    }

    public function send(FeedbackRequest $request)
    {
        $request->validated();

        $full_name = $request->input('full_name');
        $email = $request->input('email');
        $comment = $request->input('comment');

        Mail::to('comp3385@uwi.edu', 'COMP3385 Course Admin')
            ->send(new Feedback($full_name, $email, $comment));

        return redirect('success');
    }

//    public function success()
//    {
//        return view('success');
//    }
}
