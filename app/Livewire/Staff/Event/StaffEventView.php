<?php

namespace App\Livewire\Staff\Event;

use App\Models\Event;
use Livewire\Component;

class StaffEventView extends Component
{
    public $event = [];
    public function render()
    {
        return view('livewire.staff.event.staff-event-view')->layout('layouts.staff-app')->layoutData([
            'title' => 'Staff-Event | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }


    public function mount(Event $event){
        $this->event = $event;
    }
}