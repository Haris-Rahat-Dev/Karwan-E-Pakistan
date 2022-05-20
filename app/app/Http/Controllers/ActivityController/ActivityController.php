<?php

namespace App\Http\Controllers\ActivityController;

use App\Http\Controllers\Controller;
use App\Models\Activities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ActivityController extends Controller
{
    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'picture' => 'required'
        ]);
        $activity = new Activities();
        $activity->name = trim($request->name);
        $path = $request->file('picture')->store('images/events', 'public');
        $activity->picture = $path;
        $activity->save();
        return back();

    }

    public function destroy(Activities $activity){
        $activity->delete();
        return redirect()->route('activities');
    }

    public function storeApi(Request $request){

        $validation = Validator::make($request->all(),[
            'name' => 'required',
            'picture' => 'required',
        ]);
        if($validation->fails()){
            return response()->json([ 'errors' => $validation->errors(), 'status' => 401 ]);
        }
        $activity = new Activities();
        $activity->name = trim($request->name);
        $activity->picture = trim($request->picture);
        $path = $request->file('picture')->store('images/activities', 'public');
        $activity->picture = $path;
        $activity->save();
        return response()->json([ 'message' => 'Activity added Successfully', 'activity' => $activity ], 200);
    }

    public function destroyApi($id){
        $activity = Activities::findOrFail($id);
        $activity->delete();
        return response(['message' => 'Deleted Successfully'], 200);
    }

    public function index(){

        $activities = Activities::all();
        return view('activities',[ 'activities' => $activities ]);
    }

    public function indexApi(){

        $activities = Activities::paginate(5);
        return response(['activities' => $activities], 200);
    }
}
