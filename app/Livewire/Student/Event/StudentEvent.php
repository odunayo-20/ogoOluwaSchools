<?php

namespace App\Livewire\Student\Event;

use App\Models\Event;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class StudentEvent extends Component
{
    use WithPagination;

    #[Url(history: true)]
    public $search = '';

    public $pagination = 10;

    public function render()
    {
        if (! $this->search) {
            $events = Event::where('status', 'Active')->paginate($this->pagination);
        } else {
            $events = Event::where('status', 'Active')->where('title', 'like', '%'.$this->search.'%')->orWhere('date', 'like', '%'.$this->search.'%')->orWhere('time', 'like', '%'.$this->search.'%')->paginate($this->pagination);

        }

        return view('livewire.student.event.student-event', compact('events'))->layout('layouts.student-app')->layoutData([
            'title' => 'Student-Event | OGO OLUWA GROUP OF SCHOOLS',
        ]);
    }

    public function updatedSearch(){
        $this->resetPage();
    }
}