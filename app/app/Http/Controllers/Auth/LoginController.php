<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Testing\Fluent\Concerns\Has;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('loginApi');
    }

    public function getLoginView(){
        return view('admin.login');
    }

    public function login(Request $request){
        $rules = [
            'email'=> 'required|email:rfc,dns|exists:users,email',
            'password' => 'required'
        ];
        $credentials = $request->validate($rules);
        if (!auth()->attempt($credentials, $request->rememberMe)){
            return back()->withErrors(['error' => 'Your Provided Credentials are Incorrect!']);
        }
        return redirect()->route('dashboard');
    }

    public function loginApi(Request $request){
        $rules = [
            'email'=> 'required|email:rfc,dns|exists:users,email',
            'password' => 'required'
        ];
        $validate = Validator::make($request->all(), $rules);
        if($validate->fails()){
            return response()->json(['error' => $validate->errors(), 'status' => 401 ]);
        }
       $user = User::where('email', trim($request->email))->first();
        if(!$user || !Hash::check($request->password, $user->password)){
            return response([ 'message' => 'Invalid Login Credentials' ], 401);
        }
        $token = $user->createToken('appToken')->plainTextToken;
        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }
}
