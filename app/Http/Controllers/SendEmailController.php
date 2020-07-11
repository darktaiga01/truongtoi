<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use  App\Mail\SendMail;
class SendEmailController extends Controller
{
    //
    function index()
    {
        return view('aboutus');
    }

    function send(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        );

        Mail::to('dangngoctan2012@gmail.com')->send(new SendMail($data));

        return back()->with('success','Chúng tôi đã nhận được câu hỏi từ bạn và sẽ trả lời sớm nhất có thể.');

    }
}
