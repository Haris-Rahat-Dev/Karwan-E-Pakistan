<?php

namespace App\Http\Controllers;

use App\Mail\Message;
use App\Models\Mails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class MailController extends Controller
{
    public function store(Request $request){
        $rules = [
            'name' => 'required|min:10|max:24',
            'email' => 'required|email:rfc,dns|unique:mails,email',
            'message' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return response()->json([ 'error' => $validator->errors(), 401 ]);
        }
        $mail = new Mails();
        $mail->name = $request->name;
        $mail->email = $request->email;
        $mail->message = $request->message;
        $mail->save();
        Mail::to('harisbinrahat@gmail.com')->send(new Message($mail));
        return response()->json([ 'message' => 'Email Sent!' ]);
    }
}
