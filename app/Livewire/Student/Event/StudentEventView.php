<?php

namespace App\Livewire\Student\Event;

use App\Models\Event;
use Livewire\Component;

class StudentEventView extends Component
{
    public $event = [];
    public function render()
    {
        return view('livewire.student.event.student-event-view')->layout('layouts.student-app')->layoutData([
            'title' => 'Student-Event | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }

    public function mount(Event $event){
        $this->event = $event;
    }
}