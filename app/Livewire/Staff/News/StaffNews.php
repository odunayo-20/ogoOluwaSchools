<?php

namespace App\Livewire\Staff\News;

use App\Models\News;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class StaffNews extends Component
{
    use WithPagination;

    #[Url(history: true)]
    public $search = '';

    public $pagination = 10;

    public function render()
    {
        if (! $this->search) {

            $news = News::where('status', 'Active')->paginate($this->pagination);
        } else {
            $news = News::where('status', 'Active')->where('title', 'like', '%'.$this->search.'%')->orWhere('date', 'like', '%'.$this->search.'%')->orWhere('time', 'like', '%'.$this->search.'%')->paginate($this->pagination);

        }

        return view('livewire.staff.news.staff-news', compact('news'))->layout('layouts.staff-app')->layoutData([
            'title' => 'Staff-News | OGO OLUWA GROUP OF SCHOOLS',
        ]);
    }

    public function updatedSearch(){
        $this->resetPage();
    }
}