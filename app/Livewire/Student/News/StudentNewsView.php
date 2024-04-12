<?php

namespace App\Livewire\Student\News;

use App\Models\News;
use Livewire\Component;

class StudentNewsView extends Component
{
    public $news = [];
    public function render()
    {
        return view('livewire.student.news.student-news-view')->layout('layouts.student-app')->layoutData([
            'title' => 'Student-Event | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }

    public function mount(News $news){
        $this->news = $news;
    }
}