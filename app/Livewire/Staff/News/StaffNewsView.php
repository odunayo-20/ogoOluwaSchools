<?php

namespace App\Livewire\Staff\News;

use App\Models\News;
use Livewire\Component;

class StaffNewsView extends Component
{
    public $news = [];
    public function render()
    {
        return view('livewire.staff.news.staff-news-view')->layout('layouts.staff-app')->layoutData([
            'title' => 'Staff-News | OGO OLUWA GROUP OF SCHOOLS'
        ]);

    }
    public function mount(News $news){
        $this->news = $news;
    }
}