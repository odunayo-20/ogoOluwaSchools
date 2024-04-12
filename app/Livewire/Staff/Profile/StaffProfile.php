<?php

namespace App\Livewire\Staff\Profile;

use App\Models\Staff;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class StaffProfile extends Component
{
    use WithFileUploads;

    public $new_image;
    public $old_image;

    public $email;
    public $phone;
    public $middlename;

    public $firstname;
    public $lastname;

    public $staff = [];


    public function render()
    {
        return view('livewire.staff.profile.staff-profile')->layout('layouts.staff-app')->layoutData([
            'title' => 'Staff-Profile | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }

    public function mount()
    {
        $staff = Staff::findOrFail(Auth::guard('staff')->user()->id);
        // $staff = $staff;
        $this->firstname =  $staff->firstname; 
        $this->lastname =  $staff->lastname; 
        $this->email =  $staff->email; 
        $this->phone =  $staff->phone; 
        $this->middlename =  $staff->middlename; 
        $this->old_image =  $staff->image; 
    }

    public function updateStaff()
    {
        $staff = Staff::findOrFail(Auth::guard('staff')->user()->id);

        $staff->lastname = $this->lastname;
        $staff->firstname = $this->firstname;
        $staff->middlename = $this->middlename;
        $staff->email = $this->email;
        $staff->phone = $this->phone;
        $staff->save();
        session()->flash('success', 'Profile Successfully Updated');

        return redirect(route('staff_profile'));
    }
    
    public function updateImage(){
        $staff = Staff::findOrFail(Auth::guard('staff')->user()->id);
        
        $file = $this->new_image;
        if (!is_null($this->new_image)) {
            $file = $this->new_image->store('public/staff');
        }


        $staff->image = $file;
        $staff->save();
        session()->flash('success', 'Profile Image Successfully Updated');

        return redirect(route('staff_profile'));

    }

}