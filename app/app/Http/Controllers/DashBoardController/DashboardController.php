<?php

namespace App\Http\Controllers\DashBoardController;

use App\Http\Controllers\Controller;
use App\Models\Activities;
use App\Models\Team;
use App\Models\Volunteers;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getDashBoardView(){
        return view('admin.dashboard');
    }

    public function team(){

        $team = Team::paginate(5);
        return view('admin.team.create', [ 'team' => $team ]);
    }

    public function activities(){
        $activities = Activities::paginate(8);
        return view('admin.activities.create', [ 'activities' => $activities ]);
    }

    public function events(){
        return view('admin.events.create');
    }

    public function volunteers(){
        /*$volunteer = Volunteers::all();
        dump($volunteer->city());*/
        $volunteers = Volunteers::with('state', 'city' )->paginate(5);
        //dump($volunteers->volunteerBelongsTo());
        return view('admin.volunteers.index', [ 'volunteers' => $volunteers ]);
    }
}
