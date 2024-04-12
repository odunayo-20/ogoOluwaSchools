<?php

namespace App\Livewire\Admin\Subject;

use App\Models\Subject;
use Livewire\Component;

class CreateSubject extends Component
{
    public $name;


    public $subject;

    public function store()
    {
        // dd($this);
        $validated = $this->validate([
            'name' => 'required|unique:subjects',
        ]);
        $subject = Subject::create($validated);
        $this->reset();
        session()->flash('success', 'Subject Successfully Created');
        return redirect(route('admin_subject'));
    }

    public function render()
    {
        return view('livewire.admin.subject.create-subject')->layout('layouts.admin-app')->layoutData([
            'title'=> 'Admin - Subject | OGO OLUWA GROUP OF SCHOOLS'
        ]);;;
    }
}