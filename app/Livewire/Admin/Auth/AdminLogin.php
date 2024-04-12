<?php

namespace App\Livewire\Admin\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class AdminLogin extends Component
{

    public $email, $password;
    public function render()
    {
        return view('livewire.admin.auth.admin-login')->layout('layouts.login-app')->layoutData([
            'title'=> 'Admin - Login | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }

    public function login(){
       $validated =  $this->validate([
'email' => 'required|string|email|min:4|max:25',
'password' => 'required|string|min:4|max:25'
        ]);

        $admins = Auth::guard('admin')->attempt($validated);

        if($admins){
            // dd($admins);
            session()->flash('success', 'Login Successfully');
            return redirect(route('admin_dashboard'));
        }else{
            // dd('some problems');
            session()->flash('error', 'Invalid Creditial');

        }
    }
}