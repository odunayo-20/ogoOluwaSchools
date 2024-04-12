<?php

namespace App\Livewire\Admin\Assignment;

use Livewire\Component;

class EditAssign extends Component
{
    public function render()
    {
        return view('livewire.admin.assignment.edit-assign')->layout('layouts.admin-app')->layoutData([
            'title'=> 'Admin - Assignment | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }
}