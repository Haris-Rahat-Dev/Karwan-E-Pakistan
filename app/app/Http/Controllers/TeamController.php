<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TeamController extends Controller
{
    public function store(Request $request){

        $validation = Validator::make($request->all(),[
            'name' => 'required',
            'role' => 'required',
            'picture' => 'required'
        ]);
        if($validation->fails()){
            return response()->json([ 'errors' => $validation->errors(), 401 ]);
        }
        $team = new Team();
        $team->name = $request->name;
        $team->role = $request->role;
        $path = $request->file('picture')->store('images/team', 'public');
        $team->picture = $path;
        $team->save();
        return response()->json([ 'message' => 'Member added Successfully' ]);
    }

    public function index(){

        $team = Team::all();
        return view('ourTeam',[ 'team' => $team ]);
    }
}
