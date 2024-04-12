<?php

namespace App\Livewire\Student\Assignment;

use App\Models\Assignment;
use App\Models\AssignmentSubmit;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class StudentAssignList extends Component
{
    use WithPagination;

    public $studentClass;

    public function render()
    {
        $student_id = Auth::guard('student')->user()->id;
        $assignments = Assignment::with(['class', 'subject', 'staff'])->where('status', '0')->paginate(10);
        $assign = AssignmentSubmit::where('student_id', $student_id)->get();

        return view('livewire.student.assignment.student-assign-list', compact(['assignments', 'assign']))->layout('layouts.student-app')->layoutData([
            'title' => 'Student | Assignment',
        ]);

        // public

    }

    public function downloadfile(Assignment $assignment)
    {
        if (Storage::disk('local')->exists($assignment->document)) {
            session()->flash('success', 'File downloading');

            return Storage::download($assignment->document, $assignment->subject->name);
        } else {
            session()->flash('error', 'File download not found');

        }
    }
}