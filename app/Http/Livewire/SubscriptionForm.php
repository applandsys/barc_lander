<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use App\Models\User;

class SubscriptionForm extends Component
{

    public $name, $email, $phone, $issubmit=false;

    public function render()
    {
        return view('livewire.subscription-form');
    }


    private function resetInput()
    {
        $this->name = null;
        $this->email = null;
        $this->phone = null;
        $this->issubmit=true;
    }

    public function store(){

        $this->validate([
            'name' => 'required|min:5',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'phone' => 'required'
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'password' => Hash::make('barc2021')
        ]);
        $this->resetInput();
    }

}
