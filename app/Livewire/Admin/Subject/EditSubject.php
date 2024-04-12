<?php

namespace App\Livewire\Admin\Subject;

use App\Models\Subject;
use Livewire\Component;

class EditSubject extends Component
{
    public $subject;
    public $name;

    public function render()
    {
        return view('livewire.admin.subject.edit-subject')->layout('layouts.admin-app')->layoutData([
            'title'=> 'Admin - Subject | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }

    public function mount(Subject $subject){
$this->name = $subject->name;
    }

    public function store(Subject $subject){
        $subject = $subject;
        $this->subject->update([
           'name' => $this->name, 
        ]);

        session()->flash('success', 'Subject Successfully Updated');
        return redirect(route('admin_subject'));

    }
}