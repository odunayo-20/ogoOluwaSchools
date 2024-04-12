<?php

namespace App\Livewire\Frontend;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithPagination;

class FrontendEvent extends Component
{
    use WithPagination;
    // public $event = [];
    public $post_per_page = 10;

    public function render()
    {
        $latestEvents = Event::latest()->where('date', '>=', now())->where('status', 'Active')->paginate($this->post_per_page);
        $pastEvents = Event::latest()->where('date', '<=', now())->where('status', 'Active')->limit(4)->get();
        // $event = Event::where('status', 'active')->paginate($this->post_per_page);
        return view('livewire.frontend.frontend-event', compact(['latestEvents', 'pastEvents']))->layout('layouts.frontend-app')->layoutData([
            'title' => 'Event | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }
// public function loadMore(){
//     $this->post_per_page +=2;
// }
}