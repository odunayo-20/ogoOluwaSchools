<?php

namespace App\Livewire\Staff\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class StaffLogout extends Component
{
    public function render()
    {
        return view('livewire.staff.auth.staff-logout');
    }

    public function logout(){
        Auth::guard('staff')->logout();
       return redirect(route('staff_login'));
    }
}