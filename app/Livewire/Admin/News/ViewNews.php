<?php

namespace App\Livewire\Admin\News;

use App\Models\News;
use Livewire\Component;

class ViewNews extends Component
{ 

    public $news = [];
    public function render()
    {
        return view('livewire.admin.news.view-news')->layout('layouts.admin-app')->layoutData([
            'title'=> 'Admin - News | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }

    public function mount(News $news){
        $this->news = $news;
    }
}