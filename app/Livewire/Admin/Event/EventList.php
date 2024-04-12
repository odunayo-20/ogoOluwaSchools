<?php

namespace App\Livewire\Admin\Event;

use App\Models\Event;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class EventList extends Component
{
    use WithPagination;

    #[Url(history:true)]
    public $search = '';
    public $pagination = 10;

public $eventsPublish = [];
public $eventsDraft = [];
public $event_id;
    public function mount(){
        $this->eventsPublish = Event::where('status', 'published')->get();
        $this->eventsDraft = Event::where('status', 'drafted')->get();
    }

    public function render()
    {
        if (!$this->search) {

            $events = Event::latest()->paginate($this->pagination);
        } else {

            $events = Event::latest()->where('title', 'like', '%'.$this->search.'%')->paginate($this->pagination);
        }
        return view('livewire.admin.event.event-list', compact('events'))->layout('layouts.admin-app')->layoutData([
            'title'=> 'Admin - Events | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }

    public function updateStatus($eventId, $newStatus)
    {
        $event = Event::find($eventId);
        $event->update(['status' => $newStatus]);
    }



    public function delete($event_id){

        $this->event_id = $event_id;
    }

    public function destroy(){
        $event =  Event::findOrFail($this->event_id);
        $event->delete();
        if(Storage::disk('local')->exists($event->image)){
            Storage::delete($event->image);
            $event->delete();
        }
        $this->dispatch('close-modal');
        session()->flash('success', 'Event is Successfully Deleted');
    }
}