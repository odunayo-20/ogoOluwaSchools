<?php

namespace App\Livewire\Staff\Auth;

use App\Models\Staff;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class StaffRegister extends Component
{

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

    public function render()
    {
        return view('livewire.staff.auth.staff-register')->layout('layouts.register-app')->layoutData([
            'title'=> 'Staff-Register | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }

    public function store()
    {
$validated = $this->validate([
'firstname' => 'required|string',
'lastname' => 'required|string',
'middlename' => 'required|string',
'date_of_birth' => 'required|string',
'address' => 'required|string',
'state' => 'required|string',
'gender' => 'required|string',
'lga' => 'required|string',
'phone' => 'required|string',
'status' => 'required|string',
'town' => 'required|string',
'year_employed' => 'required|string',
// 'image' => 'mimes:jpg,png',
'email' => 'required|string|email|unique:staff',
'password' => 'required|string',
'confirm_password' => 'required|same:password',
]);

// dd($validated);
if($this->image){
    $image = $this->image->store('public/staff'); 
}
$staff = Staff::updateOrCreate([
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
    'password' => Hash::make($this->password),
]);
$this->reset();
return redirect(route('staff_login'));

    }




    
}