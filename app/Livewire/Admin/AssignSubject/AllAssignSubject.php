<?php

namespace App\Livewire\Admin\AssignSubject;

use App\Models\AssignSubject;
use Livewire\Component;
use Livewire\WithPagination;

class AllAssignSubject extends Component
{
    #[Url(history:true)]
    public $search = '';
    public $pagination = 10;
public $assignSubject_id;
    use WithPagination;

    public function render()
    {
        // $AssignSubjects = AssignSubject::with(['class', 'subject'])->paginate(10);

        if (!$this->search) {

            $AssignSubjects = AssignSubject::latest()->with(['class', 'subject'])->paginate($this->pagination);
        } else {

            $AssignSubjects = AssignSubject::latest()->with(['class', 'subject'])->where('subject_id', 'like', '%'.$this->search.'%')->orwhere('class_id', 'like', '%'.$this->search.'%')->paginate($this->pagination);
        }
        return view('livewire.admin.assign-subject.all-assign-subject', compact('AssignSubjects'))->layout('layouts.admin-app')->layoutData([
            'title'=> 'Admin - Assign Subject | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }

    public function updateStatus($subjectId, $newStatus)
    {
        $subject = AssignSubject::find($subjectId);
        $subject->update(['status' => $newStatus]);
    }


    public function updatedSearch(){
        $this->resetPage();
    }


    public function delete($assignSubject_id){

        $this->assignSubject_id = $assignSubject_id;
    }

    public function destroy(){
        $assignSubject =  AssignSubject::findOrFail($this->assignSubject_id);
        $assignSubject->delete();
        $this->dispatch('close-modal');
        session()->flash('success', 'Assign Subject is Successfully Deleted');
    }
}