<?php

namespace App\Livewire\Student\Auth;

use App\Mail\WebsiteMail;
use App\Models\Student;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class StudentForget extends Component
{
    public $email;

    public function render()
    {
        return view('livewire.student.auth.student-forget')->layout('layouts.login-app')->layoutData([
            'title' => 'Student-Forget | OGO OLUWA GROUP OF SCHOOLS',
        ]);
    }

    public function forget()
    {
        $validated = $this->validate(['email' => 'required|email']);
        $student = Student::where('email', $this->email)->first();
        if (! $student) {
            session()->flash('error', 'Email Not Found');

            return redirect(route('student_forget_password'));
        }

        // dd('do something');

        $token = hash('sha256', time());
        $student->token = $token;
        $student->update();
        $reset_link = url('student/reset-password/'.$token.'/'.$this->email);
        $subject = 'Reset Your Password';
        $message = 'Please Click On Below Link To Reset Password';
        // $message .= "<a href='$reset_link'>Click Me</a>";
        // Mail::to($this->email)->send($subject, $message);
        $maildata = [
            'title' => 'Password Reset',
            'url' => $reset_link,
            'message' => $message,
        ];
        Mail::to($this->email)->send(new WebsiteMail($subject, $maildata));
        $this->reset();
        session()->flash('success', 'Please Check Your Email To Reset Your Password');

        return redirect(route('student_forget_password'));
    }
}