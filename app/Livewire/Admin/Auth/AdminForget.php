<?php

namespace App\Livewire\Admin\Auth;

use App\Mail\WebsiteMail;
use App\Models\Admin;
use Illuminate\Routing\RedirectController;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class AdminForget extends Component
{

    public $email;

    public function render()
    {
        return view('livewire.admin.auth.admin-forget')->layout('layouts.login-app')->layoutData([
            'title'=> 'Admin - Forget | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }

    public function forget(){
        $validated = $this->validate(['email'=> 'required|email']);

        $admin_data = Admin::where('email', $this->email)->first();
        if(!$admin_data){
            session()->flash('error', 'Email not found');
            return redirect(route('admin_forget_password'));
        }

        $token = Hash('sha256', time());
        $admin_data->token = $token;
        $admin_data->update();

        $reset_link = url('admin/reset-password/'.$token.'/'.$this->email);
        $subject = "Reset Your Password";
        $message = "Please Click on Below to reset your password";
        // $message .= "<a href='$reset_link'>Click Me</a>";

        $maildata = [
            'title' => 'Password Reset',
            'url' => $reset_link,
            'message' => $message,
        ];
        Mail::to($this->email)->send(new WebsiteMail($subject, $maildata));
        session()->flash('success', 'Reset Password Link sent to your email');
        return redirect(route('admin_forget_password'));
    }
}