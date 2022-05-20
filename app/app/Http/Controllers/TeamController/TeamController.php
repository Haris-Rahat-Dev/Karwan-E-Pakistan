<?php

namespace App\Http\Controllers\TeamController;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use function response;
use function view;

class TeamController extends Controller
{
    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'role' => 'required',
            'picture' => 'required'
        ]);
        $team = new Team();
        $team->name = trim($request->name);
        $team->role = trim($request->role);
        $path = $request->file('picture')->store('images/team', 'public');
        $team->picture = $path;
        $team->save();
        return redirect()->route('team');

    }

    public function destroy(Team $one){
        $one->delete();
        return back();
    }

    public function storeApi(Request $request){

        $validation = Validator::make($request->all(),[
            'name' => 'required',
            'role' => 'required',
            'picture' => 'required'
        ]);
        if($validation->fails()){
            return response()->json([ 'errors' => $validation->errors(), 'status' => 401 ]);
        }
        $team = new Team();
        $team->name = trim($request->name);
        $team->role = trim($request->role);
        $path = $request->file('picture')->store('images/team', 'public');
        $team->picture = $path;
        $team->save();
        return response()->json([ 'message' => 'Member added Successfully', 'team' => $team ], 200);
    }

    public function destroyApi($id){
        $team = Team::findOrFail($id);
        $team->delete();
        return response(['message' => 'Deleted Successfully'], 200);
    }

    public function index(){

        $team = Team::all();
        return view('ourTeam',[ 'team' => $team ]);
    }

    public function indexApi(){

        $team = Team::paginate(5);
        return response(['team' => $team], 200);
    }
}
