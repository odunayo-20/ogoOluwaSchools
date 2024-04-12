<?php

namespace App\Livewire\Student\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class StudentLogout extends Component
{
    public function render()
    {
        return view('livewire.student.auth.student-logout');
    }

    public function logout(){
if(Auth::guard('student')){
    Auth::guard('student')->logout();
    return redirect(route('student_login'));
}
    }
}