<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(){
        return view('contact');
    }

    public function contactMail(Request $request){

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'ielts' => $request->ielts,
            'countries' => $request->countries,
            'message' => $request->message,
        ];

        Mail::to('info@eduzenship.com')->send(new ContactMail($details));
        return redirect()->back()->with('message_sent', 'Your Mail Has Been Sent');

    }
}
