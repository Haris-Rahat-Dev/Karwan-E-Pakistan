<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('logoutApi');
        $this->middleware('auth:sanctum')->except('logout');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('LoginView');
    }

    public function logoutApi(Request $request){
        auth()->user()->tokens()->delete();
        return response(['message' => 'User Logged Out!']);
    }
}
