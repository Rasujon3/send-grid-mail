<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function showForm()
    {
        return view('send-form');
    }

    public function sendEmail(Request $request)
    {
        $data = [
            'body' => $request->body
        ];

        Mail::raw($data['body'], function ($message) use ($request) {
            $message->to($request->to)
                ->subject($request->subject)
                ->from(config('mail.from.address'), config('mail.from.name'));
        });

        return back()->with('success', 'Email sent successfully!');
    }
}

