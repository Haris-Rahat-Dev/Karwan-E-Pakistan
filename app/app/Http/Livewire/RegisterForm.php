<?php

namespace App\Http\Livewire;

use App\Models\Volunteers;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;
class RegisterForm extends Component
{
    use WithFileUploads;
    public $name, $email, $residence_hostel_address, $university_or_institute, $degree, $whatsapp_no, $state, $city, $interested_department, $profile_pic, $path;
    public $show = false;

    protected $rules = [
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

    public function submitForm()
    {
        $this->validate();
        if($this->city== null || ''){
            $setCity = "48357";
        }else{
            $setCity = $this->city;
        };
        $volunteer = new Volunteers();
        $volunteer->name = $this->name;
        $volunteer->email = $this->email;
        $volunteer->residence_hostel_address = $this->residence_hostel_address;
        $volunteer->university_or_institute = $this->university_or_institute;
        $volunteer->degree = $this->degree;
        $volunteer->whatsapp_no = $this->whatsapp_no;
        $volunteer->state_id = $this->state;
        $volunteer->city_id = $setCity;
        $volunteer->interested_department = $this->interested_department;
        $volunteer->profile_pic = $this->profile_pic->store('images/volunteers', 'public');
        $volunteer->save();
        $this->resetForm();
        $this->show = true;
        session()->flash('message', 'Registered Successfully!');
    }

    public function resetForm(){
        $this->name = '';
        $this->email = '';
        $this->residence_hostel_address = '';
        $this->university_or_institute = '';
        $this->degree = '';
        $this->whatsapp_no = '';
        $this->state = '';
        $this->city = '';
        $this->interested_department = '';
        $this->profile_pic=null;
}
   public function showFalse(){
        $this->show = false;
   }


    public function render()
    {
        $states = DB::table('states')->where('country_id', '=',166)->get();
        /*$cities = DB::table('cities')->where('state_id', '=', $this->state)->get();*/
        return view('livewire.register-form', [ 'states' => $states, 'show' => $this->show ]);
    }
}
