<?php

namespace App\Livewire\Admin\Subject;

use App\Models\Subject;
use Livewire\Component;
use Livewire\WithPagination;

class AllSubject extends Component
{
    use WithPagination;
    #[Url(history:true)]
    public $search = '';
    public $pagination = 10;
    public $subject_id;

    public function render()
    {


        if (!$this->search) {

            $subjects = Subject::latest()->paginate($this->pagination);
        } else {

            $subjects = Subject::latest()->where('name', 'like', '%'.$this->search.'%')->paginate($this->pagination);
        }

        return view('livewire.admin.subject.all-subject', compact('subjects'))->layout('layouts.admin-app')->layoutData([
            'title'=> 'Admin - Subject | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }

    public function updateStatus($subjectId, $newStatus)
    {
        $subject = Subject::find($subjectId);
        $subject->update(['status' => $newStatus]);
    }

    // public function deleteSubject(Subject $subject){
    //     $subject = $subject;
    //     $subject->delete();
    //     session()->flash('success', 'Subject Successfully Deleted');
    //     return redirect(route('admin_subject'));

    // }

    
    public function delete($subject_id){

        $this->subject_id = $subject_id;
    }

    public function destroy(){
        $subject =  Subject::findOrFail($this->subject_id);
        $subject->delete();
        $this->dispatch('close-modal');
        session()->flash('success', 'Subject is Successfully Deleted');
    }

}