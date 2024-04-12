<?php

namespace App\Livewire\Frontend;

use App\Models\Event;
use Livewire\Component;

class FrontendEventRead extends Component
{
    public $event= [];
    public $events= [];
    public function render()
    {
        $events = Event::get();
        $events = Event::get();

        return view('livewire.frontend.frontend-event-read')->layout('layouts.frontend-app')->layoutData([
            'title' => 'Event | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }

    public function mount(Event $event){
        $this->event = $event;
        
        $this->events = Event::latest()->where('status', 'active')->where('date', '>=', now())->where('id', '!=' ,$this->event->id)->limit(6)->get();

    }
}