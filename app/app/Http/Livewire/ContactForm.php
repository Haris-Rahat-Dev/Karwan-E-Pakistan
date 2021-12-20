<?php

namespace App\Http\Livewire;

use App\Mail\Message;
use App\Models\Mails;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public $name = '';
    public $email = '';
    public $message = '';
    public $show = false;

    protected $rules = [
        'name' => 'required|min:10|max:24',
        'email' => 'required|email:rfc,dns|unique:mails,email',
        'message' => 'required'
    ];

    public function submitForm(){
        $this->validate();
        $mail = new Mails();
        $mail->name = $this->name;
        $mail->email = $this->email;
        $mail->message = $this->message;
        $mail->save();
        Mail::to('harisbinrahat@gmail.com')->send(new Message($mail));
        $this->show = true;
        $this->resetForm();
        session()->flash('message', 'Message Sent Successfully!');

    }

    public function showFalse(){
        $this->show = false;
    }

    public function resetForm(){
        $this->name = '';
        $this->email = '';
        $this->message = '';
    }

    public function render()
    {
        return view('livewire.contact-form',[ 'show' => $this->show  ]);
    }
}
