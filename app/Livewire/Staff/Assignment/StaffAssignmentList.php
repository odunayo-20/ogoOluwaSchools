<?php

namespace App\Livewire\Staff\Assignment;

use App\Models\Assignment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class StaffAssignmentList extends Component
{
    use WithPagination;
    
    public $document;

    public $time;

    public $assign;
    public $assignment_id;

    public function render()
    {
        $staff_id = Auth::guard('staff')->user()->id;
        $assigments = Assignment::where('staff_id', $staff_id)->with(['class', 'staff', 'subject'])->paginate(10);

        return view('livewire.staff.assignment.staff-assignment-list', compact('assigments'))->layout('layouts.staff-app')->layoutData([
            'title' => 'Assignment | OGO OLUWA GROUP OF SCHOOLS',
        ]);
    }

    public function downloadfile(Assignment $assign)
    {
        if (Storage::disk('local')->exists($assign->document)) {
            session()->flash('success', 'File downloading');

            return Storage::download($assign->document, $assign->subject->name);
        }
        session()->flash('error', 'File Not Found');
    }

    

    
    public function delete($assignment_id){

        $this->assignment_id = $assignment_id;
    }

    public function destroy(){
        $assignment =  Assignment::findOrFail($this->assignment_id);
        $assignment->delete();
        if(Storage::disk('local')->exists($assignment->document)){
            Storage::delete($assignment->document);
            $assignment->delete();
        }
        session()->flash('success', 'Assignment is Successfully Deleted');
        $this->dispatch('close-modal');
    }
}