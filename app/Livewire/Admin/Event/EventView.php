<?php

namespace App\Livewire\Admin\Event;

use App\Models\Event;
use Livewire\Component;

class EventView extends Component
{
    public $event = [];
    public function render()
    {
        return view('livewire.admin.event.event-view')->layout('layouts.admin-app')->layoutData([
            'title'=> 'Admin - Events | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }

    public function mount(Event $event){
        $this->event = $event;
    }
}