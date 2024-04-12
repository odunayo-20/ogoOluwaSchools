<?php

namespace App\Livewire\Staff\Auth;

use App\Mail\WebsiteMail;
use App\Models\Staff;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class StaffForget extends Component
{
    public $email;
    
    public function render()
    {
        return view('livewire.staff.auth.staff-forget')->layout('layouts.login-app')->layoutData([
            'title'=> 'Staff-Forget | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }

    public function forget(){
        $validated = $this->validate(['email' => 'required|email']);

        $staff = Staff::where('email', $this->email)->first();
        if(!$staff){
             session()->flash('error', 'Email not found');
            return redirect(route('staff_forget_password'));

        }

        $token = Hash('sha256', time());
        $staff->token = $token;
        $staff->update();
        $reset_link = url('staff/reset-password/'.$token .'/'.$this->email);
        $subject = "Reset Your Password";
        $message = 'Please Click On Below To Reset Your Password';
        // $message .= "<a href='$reset_link' class='btn btn-primary'>Click Me</a>";
        $maildata = [
            'title' => 'Password Reset',
            'url' => $reset_link,
            'message' => $message,
        ];
        Mail::to($this->email)->send(new WebsiteMail($subject, $maildata));
        $this->reset();
        session()->flash('success', 'Reset Password Link sent to your email');
return redirect(route('staff_forget_password'));
        // return redirect()->back()->with('success', 'Reset Password Link sent to your email');
        
    }
}