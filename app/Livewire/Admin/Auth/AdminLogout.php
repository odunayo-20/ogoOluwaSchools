<?php

namespace App\Livewire\Admin\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AdminLogout extends Component
{
    public function render()
    {
        return view('livewire.admin.auth.admin-logout');
    }

    public function logout(){
        // dd('something');
        Auth::guard('admin')->logout();
        return redirect('/admin/login' );
    }
}