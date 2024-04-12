<?php

namespace App\Livewire\Staff\Auth;

use App\Models\Staff;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class StaffReset extends Component
{
    public $email;

    public $token;

    public $password;

    public $confirm_password;

    public function mount($email, $token)
    {
        $staff = Staff::where('email', $email)->where('token', $token)->first();
        if (! $staff) {
            session()->flash('error', 'Invalid Email Or Token');

            return redirect(route('staff_login'));
        }
    }

    public function render()
    {
        $staff = Staff::where('email', $this->email)->where('token', $this->token)->first();

        return view('livewire.staff.auth.staff-reset', compact('staff'))->layout('layouts.login-app')->layoutData([
            'title' => 'Staff-Reset | OGO OLUWA GROUP OF SCHOOLS',
        ]);
    }

    public function reset_password()
    {
        $validated = $this->validate([
            'password' => 'required|string',
            'password' => 'required|same:password',
        ]);

        $staff = Staff::where('email', $this->email)->where('token', $this->token)->first();
        $staff->password = Hash::make($this->password);
        $staff->token = ' ';
        $staff->update();
        session()->flash('success', 'Password Reset Successfully');

        return redirect(route('staff_login'));

    }
}