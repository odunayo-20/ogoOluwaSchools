<?php

namespace App\Livewire\Student\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class StudentLogin extends Component
{
    public $student;

    public $email;

    public $password;

    public function render()
    {
        return view('livewire.student.auth.student-login')->layout('layouts.login-app')->layoutData([
            'title' => 'Student-Login | OGO OLUWA GROUP OF SCHOOLS',
        ]);
    }

    public function login()
    {
        $validated = $this->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::guard('student')->attempt($validated)) {
            return redirect(route('student_dashboard'));
        } else {
            session()->flash('error', 'Invalid Credential');
            // $this->dispatch('error', ['message' => 'Invalid Credential']);
        }
    }
}