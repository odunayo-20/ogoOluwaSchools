<?php

namespace App\Livewire\Frontend;

use App\Models\Admission;
use App\Models\Classes;
use Livewire\Component;
use Livewire\WithFileUploads;

class FrontendAdmission extends Component
{
    use WithFileUploads;
    public $surname;

    public $othername;

    public $email;

    public $phone;

    public $dob;

    public $gender;

    public $nation;

    public $state;


    public $town;


    public $class;

    public $branch;
    public $section;

    public $image;

    public $relationship;

    public $guardians_address;

    public $guardians_name;

    public $guardians_email;
    public $guardians_phone;
    public $admission;

    public function render()
    {
        $classes = Classes::where('status', 'active')->orderBy('name')->get();
        return view('livewire.frontend.frontend-admission', compact(['classes']))->layout('layouts.frontend-app')->layoutData([
            'title' => 'Admission | OGO OLUWA GROUP OF SCHOOLS',
        ]);
    }

    public function store()
    {
       $validated =  $this->validate([
            'surname' => 'required|string',
            'othername' => 'required|string',
            'email' => 'required|email|unique:admissions',
            'phone' => 'required|numeric',
            'dob' => 'required|string',
            'gender' => 'required|string',
            'nation' => 'required|string',
            'state' => 'required|string',
            'town' => 'required|string',
            'class' => 'required|string',
            'branch' => 'required|string',
            'section' => 'required|string',
            'image' => 'image|mimes:png,jpg,jpeg',
            'relationship' => 'required|string',
            'guardians_address' => 'required|string',
            'guardians_name' => 'required|string',
            'guardians_phone' => 'required|numeric',
            'guardians_email' => 'required|string',
        ]);

        $pic = $this->image;
        if ($this->image) {
            $pic = $this->image->store('public/admission');
        }


        $this->admission = Admission::create([
            'surname' => $this->surname,
            'nation' => $this->nation,
            'othername' => $this->othername,
            'email' => $this->email,
            'phone' => $this->phone,
            'dob' => $this->dob,
            'gender' => $this->gender,
            'nation' => $this->nation,
            'state' => $this->state,
            'town' => $this->town,
            'class' => $this->class,
            'branch' => $this->branch,
            'section' => $this->section,
            'relationship' => $this->relationship,
            'guardians_address' => $this->guardians_address,
            'guardians_name' => $this->guardians_name,
            'guardians_email' => $this->guardians_email,
            'image' => $pic,

        ]);
        

        $this->reset();
        session()->flash('success', 'Admission Successfully Submitted');
        return redirect(route('admission'));
    }
}