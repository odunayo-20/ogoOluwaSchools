<?php

namespace App\Livewire\Admin\Auth;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class AdminReset extends Component
{
    public $email;

    public $token;

    public $password;

    public $confirm_password;

    public function mount($email, $token)
    {
        $admin = Admin::where('email', $email)->where('token', $token)->first();
        if (! $admin) {
            session()->flash('error', 'Invalid token or email');

            return redirect(route('admin_login'));
        }

    }

    public function render()
    {
        $admin = Admin::where('email', $this->email)->where('token', $this->token)->first();

        return view('livewire.admin.auth.admin-reset', compact('admin'))->layout('layouts.login-app')->layoutData([
            'title' => 'Admin - Reset | OGO OLUWA GROUP OF SCHOOLS',
        ]);
    }

    public function reset_password()
    {
        $validated = $this->validate([
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);

        $admin = Admin::where('email', $this->email)->where('token', $this->token)->first();
        $admin->password = Hash::make($this->password);
        $admin->token = '';
        $admin->update();

        session()->flash('success', 'Password Reset Successfully');

        return redirect(route('admin_login'));
    }
}