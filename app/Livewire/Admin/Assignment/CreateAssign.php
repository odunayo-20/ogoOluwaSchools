<?php

namespace App\Livewire\Admin\Assignment;

use App\Models\AssignSubject;
use App\Models\Classes;
use App\Models\Subject;
use Livewire\Component;

class CreateAssign extends Component
{

    public $AssignSubjects;
    public $classes;
    public $selectedSubject = null;
    public $selectedClass =  null;

    public function mount(){
        $this->classes = Classes::orderBy('name','asc')->get();
        $this->AssignSubjects = collect();
        // dd($this);
    }
    public function render()
    {
        return view('livewire.admin.assignment.create-assign')->layout('layouts.admin-app')->layoutData([
            'title'=> 'Admin - Assignment | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }

public function updatedSelectedClass($class){
    if(!is_null($class)){

        $this->AssignSubjects = AssignSubject::with('subject')->where('class_id', $class)->get();
    }
}
}