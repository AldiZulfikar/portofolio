<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class EmailController extends Controller
{
    public function create()
    {
        return view('index');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
          'email' => 'required|email',
          'subject' => 'required',
          'name' => 'required',
          'content' => 'required',
        ]);

        $data = [
          'subject' => $request->subject,
          'name' => $request->name,
          'email' => $request->email,
          'content' => $request->content
        ];
		try {
			Mail::send('email-template', $data, function($message) use ($data) {
			  $message->from($data['email']);
			  $message->to('aldizulfikar04@gmail.com')->subject($data['subject']);
			});

			return back()->with(['success' => 'Email successfully sent!']);
		}catch (\Exception $e){
            return back()->with(['error' => 'Error during the creation!']);
        }
    }
}
