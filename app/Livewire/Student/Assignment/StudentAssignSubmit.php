<?php

namespace App\Livewire\Student\Assignment;

use App\Models\Assignment;
use App\Models\AssignmentSubmit;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class StudentAssignSubmit extends Component
{
    use WithFileUploads;

    public $class;

    public $subject;

    public $staff;

    public $time;

    public $date;

    public $document;

    public function render()
    {
        return view('livewire.student.assignment.student-assign-submit')->layout('layouts.student-app')->layoutData([
            'title' => 'Student | Assignment Submit',
        ]);
    }

    public function mount(Assignment $assignment)
    {
        $assignment = $assignment;
        $this->class = $assignment->class_id;
        $this->subject = $assignment->subject_id;
        $this->staff = $assignment->staff_id;

    }

    public function store()
    {
        $this->validate([
            'document' => 'required|mimes:docx,doc,pdf,txt'
        ]);
        // dd($this);
        $file = $this->document;
        if ($this->document) {
            $file = $this->document->store('public/submitted');
        }
        AssignmentSubmit::create([
            'class_id' => $this->class,
            'subject_id' => $this->subject,
            'staff_id' => $this->staff,
            'student_id' => Auth::guard('student')->user()->id,
            'time' => Carbon::now()->format('h:i'),
            'document' => $file,
        ]);
        session()->flash('success', 'Assignment Submission Successfully');

        return redirect(route('student_assignment_submit'));
    }
}