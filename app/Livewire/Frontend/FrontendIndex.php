<?php

namespace App\Livewire\Frontend;

use App\Models\Event;
use App\Models\Gallery;
use App\Models\News;
use Livewire\Component;

class FrontendIndex extends Component
{

    public $classroom = [];

    public $hostel = [];

    public $library = [];

    public $laboratory = [];

    public $gallery = [];

    public $singleNews = [];

    public $singleEvent = [];
    public $latestEvents = [];

    public function render()
    {
        // $lastestNews = Event::latest()->where('date', '>=', now())->where('status', 'Active')->paginate(4);
        // $pastNews = Event::latest()->where('date', '<', now())->where('status', 'Active')->limit(5)->get();

        return view('livewire.frontend.frontend-index')->layout('layouts.frontend-app')->layoutData([
            'title' => 'Home | OGO OLUWA GROUP OF SCHOOLS',
        ]);
    }

    public function mount()
    {
        $this->classroom = Gallery::latest()->where('category', 'classroom')->first();
        $this->hostel = Gallery::latest()->where('category', 'hostel')->first();
        $this->library = Gallery::latest()->where('category', 'library')->first();
        $this->laboratory = Gallery::latest()->where('category', 'laboratory')->first();
        $this->singleNews = News::latest()->where('status', 'active')->limit(3)->get();
        $this->singleEvent = Event::latest()->where('date', '>=', now())->where('status', 'published')->limit(3)->get();
        // $this->latestEvents = Event::latest()->where('date', '>=', now())->where('status', 'Active')->limit(4);
        // $this->pastEvents = Event::latest()->where('date', '<', now())->where('status', 'Active')->limit(5)->get();

    }
}