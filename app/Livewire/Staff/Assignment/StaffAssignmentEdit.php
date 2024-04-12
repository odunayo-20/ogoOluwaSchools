<?php

namespace App\Livewire\Staff\Assignment;

use App\Models\Assignment;
use App\Models\AssignSubject;
use App\Models\Classes;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class StaffAssignmentEdit extends Component
{
    use WithFileUploads;
    public $AssignSubject;

    public $classes;

    public $selectedSubject = null;

    public $selectedClass = null;

    public $time, $date, $old_document, $new_document, $status, $assignment;

    
    public function render()
    {
        return view('livewire.staff.assignment.staff-assignment-edit')->layout('layouts.staff-app')->layoutData([
            'title' => 'Assignment | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }

    public function mount(Assignment $assignment){
        $this->classes = Classes::get();
        $this->AssignSubject = collect();
        
        $assignment = $assignment;
        $this->time = $assignment->time;
        $this->date = $assignment->date;
        $this->selectedClass = $assignment->class_id;
        $this->selectedSubject = $assignment->subject_id;
        $this->old_document = $assignment->document;
        

    }

    public function updatedSelectedClass($class){
        if(!is_null($class)){
            $this->AssignSubject = AssignSubject::with(['subject'])->where('class_id', $class)->get(); 
        }
    }


    public function store(){
        $this->validate([
            'time' => 'required|string',
            'date' => 'required|string',
            'status' => 'required|string',
            'selectedSubject' => 'required',
            'selectedClass' => 'required',
            // 'new_document' => 'mimes:doc,docx,csv,xls,pdf,txt',
        ]);
        
        
        $file = $this->assignment->document;
        if($this->new_document){
            $file = $this->new_document->store('public/assignment');
        }
        $this->assignment->update([
           'time' => $this->time,
           'date' => $this->date,
           'subject_id' => $this-> selectedSubject,
           'class_id' => $this-> selectedClass,
           'staff_id' => Auth::guard('staff')->user()->id,
           'document' => $file,
        ]);
        
        session()->flash('success', 'Assignment is Successfully Updated');
        $this->reset();
        return redirect(route('staff_assignment'));
            }
        
        
        
}