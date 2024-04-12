<?php

namespace App\Livewire\Admin\Staff;

use App\Models\Staff;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdStaffEdit extends Component
{
    // public $staff = [];
    use WithFileUploads;

    public $firstname;

    public $lastname;

    public $middlename;

    public $date_of_birth;

    public $address;

    public $state;

    public $lga;

    public $phone;

    public $status;
    public $town;

    public $year_employed;

    public $password;
    public $confirm_password;

    public $gender;
    public $image;

    public $email;
    public $old_image;
    public $new_image;
    public $staff;
    
    public function render()
    {
        return view('livewire.admin.staff.ad-staff-edit')->layout('layouts.admin-app')->layoutData([
            'title'=> 'Admin - Staff | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }

    public function mount(Staff $staff){
        $staff = $staff;
        $this->firstname = $staff->firstname;
        $this->lastname = $staff->lastname;
        $this->middlename = $staff->middlename;
        $this->date_of_birth = $staff->dob;
        $this->address = $staff->address;
        $this->state = $staff->state;
        $this->lga = $staff->lga;
        $this->phone = $staff->phone;
        $this->status = $staff->status;
        $this->town = $staff->town;
        $this->year_employed = $staff->year_employed;
        $this->email = $staff->email;
        $this->gender = $staff->gender;
        $this->old_image = $staff->image;
    }

    public function store(){
        $image = $this->staff->image;
        if($this->new_image){
            $image = $this->new_image->store('public/staff');
        }
        $this->staff->update([
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'middlename' => $this->middlename,
            'dob' => $this->date_of_birth,
            'address' => $this->address,
            'state' => $this->state,
            'gender' => $this->gender,
            'lga' => $this->lga,
            'phone' => $this->phone,
            'status' => $this->status,
            'town' => $this->town,
            'year_employed' => $this->year_employed,
             'image' => $image,
            'email' => $this->email,
        ]);
        session()->flash('success', 'Staff Update Successfully');
        return redirect(route('admin_staff_list'));
        
    }
}