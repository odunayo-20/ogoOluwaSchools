<?php

namespace App\Livewire\Staff\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class StaffLogin extends Component
{

    public $email, $password;
    
    public function render()
    {
        return view('livewire.staff.auth.staff-login')->layout('layouts.login-app')->layoutData([
            'title'=> 'Staff-Login | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }

    public function login(){
        $validated = $this->validate([
'email' => 'required|string',
'password' => 'required|string',
        ]);

        if(Auth::guard('staff')->attempt($validated)){
            session()->flash('success', 'Login Successfully');
            return redirect(route('staff_dashboard'));
        }else{
            session()->flash('error', 'Invalid Credentials');

        }
    } 
}