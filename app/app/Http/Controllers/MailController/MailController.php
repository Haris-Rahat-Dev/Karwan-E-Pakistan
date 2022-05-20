<?php

namespace App\Http\Controllers\MailController;

use App\Http\Controllers\Controller;
use App\Mail\Message;
use App\Models\Mails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use function response;

class MailController extends Controller
{
    public function store(Request $request){
        $rules = [
            'name' => 'required|min:10|max:24',
            'email' => 'required|email:rfc,dns|exists:mails,email',
            'message' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return response()->json([ 'error' => $validator->errors(), 'status' => 401 ]);
        }
        $mail = new Mails();
        $mail->name = trim($request->name);
        $mail->email = trim($request->email);
        $mail->message = trim($request->message);
        $mail->save();
        Mail::to('info@karwanepakistan.org')->send(new Message($mail));
        return response()->json([ 'message' => 'Email Sent!' ]);
    }
}
