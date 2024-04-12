<?php

namespace App\Livewire\Admin\Student;

use App\Models\Classes;
use App\Models\Student;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdStudentEdit extends Component
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

    public $class;
    public $town;


    public $password;
    public $confirm_password;

    public $gender;
    public $image;

    public $email;
    public $old_image;
    public $new_image;
    public $student;

    

    public function render()
    {
        $classes = Classes::where('status', 'active')->get();
        return view('livewire.admin.student.ad-student-edit', compact('classes'))->layout('layouts.admin-app')->layoutData([
            'title'=> 'Admin - Student | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }

    public function mount(Student $student){
        $student =  $student;
        $this->firstname = $student->firstname;
        $this->lastname = $student->lastname;
        $this->middlename = $student->middlename;
        $this->date_of_birth = $student->dob;
        $this->address = $student->address;
        $this->state = $student->state;
        $this->lga = $student->lga;
        $this->phone = $student->phone;
        $this->class = $student->class;
        $this->town = $student->town;
        $this->email = $student->email;
        $this->gender = $student->gender;
        $this->old_image = $student->image;
    }
    public function updateStudent(){
$image = $this->student->image;
        if($this->new_image){
            $image = $this->new_image->store('public/student');
        }

        $this->student->update([
        'firstname' => $this->firstname,
        'lastname' => $this->lastname,
        'middlename' => $this->middlename,
        'dob' => $this->date_of_birth,
        'address' => $this->address,
        'state' => $this->state,
        'gender' => $this->gender,
        'lga' => $this->lga,
        'phone' => $this->phone,
        'class' => $this->class,
        'town' => $this->town,
         'image' => $image,
        'email' => $this->email,
    ]);
    session()->flash('success', 'Student Update Successfully');
    return redirect(route('admin_student_list'));
}
}