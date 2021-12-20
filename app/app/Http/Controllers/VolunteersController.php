<?php

namespace App\Http\Controllers;
use App\Models\Volunteers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VolunteersController extends Controller
{

    public function index()
    {

    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|min:10|max:24',
            'email' => 'required|email:rfc,dns|unique:volunteers,email',
            'residence_hostel_address' => 'required',
            'university_or_institute' => 'required',
            'degree' => 'required',
            'whatsapp_no' => 'required',
            'state' => 'required',
            'interested_department' => 'required',
            'profile_pic' => 'required|image|max:1024'
        ];
        //for api
        $validation = Validator::make($request->all(), $rules);
        if ($validation->fails()){
            return response()->json(['errors' => $validation->errors(), 401]);
        }
        if($request->city == null || ''){
            $setCity = "48357";
        }else{
            $setCity = $request->city;
        };

        $volunteer = new Volunteers();
        $volunteer->name = $request->name;
        $volunteer->email = $request->email;
        $volunteer->residence_hostel_address = $request->residence_hostel_address;
        $volunteer->university_or_institute = $request->university_or_institute;
        $volunteer->degree = $request->degree;
        $volunteer->whatsapp_no = $request->whatsapp_no;
        $volunteer->state_id = $request->state;
        $volunteer->city_id = $setCity;
        $volunteer->interested_department = $request->interested_department;
        $volunteer->profile_pic = $request->profile_pic->store('images/volunteers', 'public');
        $volunteer->save();
        error_log($request);
        return response(['message' => 'Volunteer Registered']);
    }


    public function show(Volunteers $volunteers)
    {
        return view('register');
    }

    public function edit(Volunteers $volunteers)
    {
        //
    }

    public function update(Request $request, Volunteers $volunteers)
    {
        //
    }

    public function destroy(Volunteers $volunteers)
    {
        //
    }
}
