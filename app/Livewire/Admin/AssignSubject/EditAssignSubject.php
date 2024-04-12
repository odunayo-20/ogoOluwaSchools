<?php

namespace App\Livewire\Admin\AssignSubject;

use App\Models\AssignSubject;
use App\Models\Classes;
use App\Models\Subject;
use Livewire\Component;

class EditAssignSubject extends Component
{

    public $subject;
    public $class;
    public $status;
    public $assignSubject;

    public function render()
    {
        $classes = Classes::orderBy('name', 'asc')->get();
        $subjects= Subject::all();

        return view('livewire.admin.assign-subject.edit-assign-subject',compact(['classes', 'subjects']))->layout('layouts.admin-app')->layoutData([
            'title'=> 'Admin - Assign Subject | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }

    public function mount(AssignSubject $assignSubject){
        $assignSubject = $assignSubject;
        $this->class = $assignSubject->class_id;
        $this->subject = $assignSubject->subject_id;
    }

    public function store(AssignSubject $assignSubject){
        $assignSubject = $assignSubject;
        $this->assignSubject->update([
            'class_id' => $this->class,
            'subject_id' => $this->subject,
        ]);
        $this->reset();
        session()->flash('success', 'Assign Subject Successfully Updated');
        return redirect(route('admin_assign_subject'));
    }

}