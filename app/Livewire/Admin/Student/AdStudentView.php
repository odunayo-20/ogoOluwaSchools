<?php

namespace App\Livewire\Admin\Student;

use App\Models\Student;
use Livewire\Component;

class AdStudentView extends Component
{
    public $student = [];
    
    public function render()
    {
        return view('livewire.admin.student.ad-student-view')->layout('layouts.admin-app')->layoutData([
            'title'=> 'Admin - Student | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }
  
    public function mount(Student $student){
        $this->student = $student;
    }
}