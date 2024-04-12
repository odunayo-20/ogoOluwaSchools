<?php

namespace App\Livewire\Frontend;

use App\Models\News;
use Livewire\Component;
use Livewire\WithPagination;

class FrontendNews extends Component
{
    use WithPagination;
    public $posts_per_page = 10;
    public $published = [];
    public $draft = [];
    public function render()
    {
        $news = News::latest()->where('status', 'active')->paginate($this->posts_per_page);

        return view('livewire.frontend.frontend-news', compact('news'))->layout('layouts.frontend-app')->layoutData([
            'title' => 'News | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }

    // public function loadMore(){
    //     $this->posts_per_page +=2;
    // }

    public function mount(){
        $this->published = News::where('status', 'active')->get();
        $this->draft = News::where('status', 'inactive')->get();
    }
}