<?php

namespace App\Http\Controllers;

class FeedbackController extends Controller
{
    public function create()
    {
        return view('feedback-form');
    }

    public function send()
    {

    }
}
