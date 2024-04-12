<?php

namespace App\Livewire\Admin\Event;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithFileUploads;

class EventEdit extends Component
{
    use WithFileUploads;

    public $event;

    public $old_image;

    public $new_image;

    public $title;

    public $location;

    public $image;

    public $date;

    public $time;

    public $message;

    public $status;

    public function mount(Event $event)
    {
        $this->event = $event;
        $this->title = $event->title;
        $this->location = $event->location;
        $this->date = $event->date;
        $this->time = $event->time;
        $this->message = $event->message;
        $this->status = $event->status;
        $this->old_image = $event->image;
    }

    public function updateEvent()
    {
        $validated = $this->validate([
            'title' => 'required|string',
            'location' => 'required|string',
            'message' => 'required|string',
            // 'new_image' => 'mimes:png,jpg',
            'time' => 'required',
            'date' => 'required',
        ]);

        $image = $this->event->image;
        if ($this->new_image) {

            $image = $this->new_image->store('public/events');
        }else{

        }

        $this->event->update([
            'title' => $this->title,
            'location' => $this->location,
            'message' => $this->message,
            'time' => $this->time,
            'date' => $this->date,
            'image' => $image,
        ]);
        // if($this->)
        $this->reset();
        session()->flash('success', 'Event Successfully Edited');

        return redirect(route('admin_event_list'));

    }

    public function render()
    {
        return view('livewire.admin.event.event-edit')->layout('layouts.admin-app')->layoutData([
            'title'=> 'Admin - Events | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }
}