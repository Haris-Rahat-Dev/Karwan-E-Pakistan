<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Testing\Fluent\Concerns\Has;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('registerApi');
    }

    public function getRegisterView(){
        return view('admin.register');
    }

    public function register(Request $request){
        $rules = [
            'name' => 'required',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'password' => 'required'
        ];
        $this->validate($request, $rules);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        auth()->attempt($request->only('email', 'password'));
        return redirect()->route('dashboard');
    }

    public function registerApi(Request $request){
        $rules = [
            'name' => 'required',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'password' => 'required'
        ];
        $validation = Validator::make($request->all(), $rules);
        if ($validation->fails()){
            return response(['errors' => $validation->errors()], 401);
        }
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $token = $user->createToken('appToken')->plainTextToken;
        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }
}
