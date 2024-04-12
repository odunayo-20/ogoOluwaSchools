<?php

namespace App\Livewire\Student\Assignment;

use App\Models\AssignmentSubmit;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class StudentAssignSubmitList extends Component
{
    use WithPagination;
public $assignment_id;

    public function render()
    {
        $assignments = AssignmentSubmit::with(['class', 'subject', 'staff', 'student'])->paginate(10);

        return view('livewire.student.assignment.student-assign-submit-list', compact('assignments'))->layout('layouts.student-app')->layoutData([
            'title' => 'Student | Assignment Submission',
        ]);
    }

    // public function deleteAssignmentSubmit(AssignmentSubmit $assignments)
    // {
    //     $assignments->delete();
    //     Storage::delete($assignments->document);
    //     $assignments->delete();
    //     session()->flash('success', 'Assignment Submission is Successfully Delected');

    //     return redirect(route('student_assignment_submit'));
    // }

    

    public function downloadfile(AssignmentSubmit $assignment)
    {
        if (Storage::disk('local')->exists($assignment->document)) {
            session()->flash('success', 'File Downloading');

            return Storage::download($assignment->document, $assignment->subject->name);
        } else {
            session()->flash('error', 'File Not Found');
        }

    }


    public function delete($assignment_id){

        $this->assignment_id = $assignment_id;
    }

    public function destroy(){
        $assignment =  AssignmentSubmit::findOrFail($this->assignment_id);
        $assignment->delete();
        if(Storage::disk('local')->exists($assignment->document)){
            Storage::delete($assignment->document);
            $assignment->delete();
        }
        session()->flash('success', 'Assignment Submitted is Successfully Deleted');
        $this->dispatch('close-modal');
    }
}