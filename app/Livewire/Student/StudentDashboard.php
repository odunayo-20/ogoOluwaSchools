<?php

namespace App\Livewire\Student;

use Livewire\Component;

class StudentDashboard extends Component
{
    // public $title;
    public function render()
    {
        $title = 'Student Portal';
        return view('livewire.student.student-dashboard')->layout('layouts.student-app', ['title'=> 'Student - Dashboard | OGO OLUWA GROUP OF SCHOOLS']);
    }
}