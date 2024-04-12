<?php

namespace App\Livewire\Student\News;

use App\Models\News;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class StudentNews extends Component
{
    use WithPagination;

    #[Url(history: true)]
    public $search = '';

    public $pagination = 10;

    public function render()
    {
        if (! $this->search) {
            // code...
            $news = News::where('status', 'Active')->paginate(10);
        } else {
            $news = News::where('status', 'Active')->where('title', 'like', '%'.$this->search.'%')->orWhere('date', 'like', '%'.$this->search.'%')->orWhere('time', 'like', '%'.$this->search.'%')->paginate($this->pagination);
            // code...
        }

        return view('livewire.student.news.student-news', compact('news'))->layout('layouts.student-app')->layoutData([
            'title' => 'Student-News | OGO OLUWA GROUP OF SCHOOLS',
        ]);
    }

    public function updatedSearch(){
        $this->resetPage();
    }
}