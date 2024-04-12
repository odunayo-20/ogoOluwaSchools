<?php

namespace App\Livewire\Frontend;

use App\Models\News;
use Livewire\Component;

class FrontendNewsRead extends Component
{
    public $singleNews = [];
    public $news = [];
    public function render()
    {
        return view('livewire.frontend.frontend-news-read')->layout('layouts.frontend-app')->layoutData([
            'title' => 'News | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }

    public function mount(News $news){
        $this->singleNews = $news;
        $this->news = News::latest()->where('status', 'active')->where('id', '!=', $this->singleNews->id)->limit(6)->get();
    }
}