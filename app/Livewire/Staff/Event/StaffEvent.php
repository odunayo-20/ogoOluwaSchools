<?php

namespace App\Livewire\Staff\Event;

use App\Models\Event;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class StaffEvent extends Component
{
    use WithPagination;
#[Url(history:true)]
    public $search = "";
    public $pagination = 10;
    public function render()
    {
        if(! $this->search ){
            $events = Event::where('status', 'Active')->paginate($this->pagination);
        }else{
            $events = Event::where('status', 'Active')->where('title','like', '%'.$this->search.'%')->orWhere('date', 'like', '%'.$this->search.'%')->orWhere('time', 'like', '%'.$this->search.'%')->paginate($this->pagination);
        }
        return view('livewire.staff.event.staff-event', compact('events'))->layout('layouts.staff-app')->layoutData([
            'title' => 'Staff-Event | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }

    public function updatedSearch(){
        $this->resetPage();
    }
}