<?php

namespace App\Livewire\Student\Auth;

use App\Models\Student;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class StudentReset extends Component
{
    public $email;

    public $password;

    public $confirm_password;

    public $token;

    public function mount($token, $email)
    {
        $student = Student::where('email', $email)->where('token', $token)->first();
        if (! $student) {
            session()->flash('error', 'Invalid Email and Token');

            return redirect(route('student_login'));
        }

    }

    public function render()
    {
        $student = Student::where('email', $this->email)->where('token', $this->token)->first();

        return view('livewire.student.auth.student-reset', compact('student'))->layout('layouts.login-app')->layoutData([
            'title' => 'Student-Reset | OGO OLUWA GROUP OF SCHOOLS',
        ]);
    }

    public function reset_password()
    {
        $this->validate([
            'password' => 'required|string',
            'confirm_password' => 'required|string|same:password',
        ]);

        $student = Student::where('email', $this->email)->where('token', $this->token)->first();
        $student->password = Hash::make($this->password);
        $student->token = ' ';
        $student->update();

        session()->flash('success', 'Password is Reset Successfully');

        return redirect(route('student_login'));
    }
}