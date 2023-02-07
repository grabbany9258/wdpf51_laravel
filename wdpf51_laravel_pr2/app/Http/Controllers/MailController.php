<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DemoMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        $mailData = [
            'title' => 'Mail from ItSolutionStuff.com',
            'body' => 'This is for testing email using smtp.'
        ];

        Mail::to('trisnamoni124@gmail.com')->send(new DemoMail($mailData));

        dd("Email is sent successfully.");
    }
    public function contactForm()
    {
        return view('contact');
    }

    public function MessageSend(Request $request)
    {
        // $datas = $request->all();
        // dd($datas);

        $mailData = [
            'senderEmail' => $request->sender_email,
            'senderName' => $request->sender_name,
            'message' => $request->message,
        ];

        Mail::to('aklimaakterisdb@gmail.com')->send(new DemoMail($mailData));

        dd("Email is sent successfully");
    }
}
