<?php

namespace App\Livewire\Admin\AssignSubject;

use App\Models\AssignSubject;
use App\Models\Subject;
use App\Models\Classes;
use Livewire\Component;

class CreateAssignSubject extends Component
{

    public $subject;
    public $class;
    public function render()
    {
        $classes = Classes::where('status', 'active')->orderBy('name', 'asc')->get();
        $subjects= Subject::where('status', 'active')->get();
        return view('livewire.admin.assign-subject.create-assign-subject', compact(['classes', 'subjects']))->layout('layouts.admin-app')->layoutData([
            'title'=> 'Admin - Assign Subject | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }

    public function store(){
        $validated = $this->validate([
            'subject' => 'required',
            'class' => 'required',
        ]);
        // dd($this);
        AssignSubject::create([
            'class_id' => $this->class,
            'subject_id' => $this->subject,
        ]);
        $this->reset();
        session()->flash('success', 'Assign Subject Successfully Created');
        return redirect(route('admin_assign_subject'));

    }
}