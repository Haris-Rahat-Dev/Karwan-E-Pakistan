<?php

namespace App\Http\Controllers\VolunteersController;
use App\Http\Controllers\Controller;
use App\Models\Volunteers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use function response;
use function view;

class VolunteersController extends Controller
{

    public function index()
    {
        $volunteers = Volunteers::paginate(5);
        return response(['volunteers' => $volunteers], 200);
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
            return response()->json(['errors' => $validation->errors(), 'status' => 401]);
        }
        if($request->city == null || ''){
            $setCity = "48357";
        }else{
            $setCity = $request->city;
        };

        $volunteer = new Volunteers();
        $volunteer->name = trim($request->name);
        $volunteer->email = trim($request->email);
        $volunteer->residence_hostel_address = trim($request->residence_hostel_address);
        $volunteer->university_or_institute = trim($request->university_or_institute);
        $volunteer->degree = trim($request->degree);
        $volunteer->whatsapp_no = trim($request->whatsapp_no);
        $volunteer->state_id = $request->state;
        $volunteer->city_id = $setCity;
        $volunteer->interested_department =trim( $request->interested_department);
        $volunteer->profile_pic = $request->profile_pic->store('images/volunteers', 'public');
        $volunteer->save();
        error_log($request);
        return response(['message' => 'Volunteer Registered', 'volunteer' => $volunteer]);
    }


    public function show()
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

    public function destroy(Volunteers $volunteer)
    {
        $volunteer->delete();
        return back();
    }

    public function destroyApi($id)
    {
        $volunteer = Volunteers::findOrFail($id);
        $volunteer->delete();
        return response(['message' => 'Deleted Successfully'], 200);
    }
}
