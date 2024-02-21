<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackRequest;

class FeedbackController extends Controller
{
    public function create()
    {
        return view('feedback-form');
    }

    public function send(FeedbackRequest $request)
    {
        $request->validated();
    }
}
