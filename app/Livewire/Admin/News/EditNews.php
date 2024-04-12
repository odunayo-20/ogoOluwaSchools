<?php

namespace App\Livewire\Admin\News;

use App\Models\News;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditNews extends Component
{
    public $title;

    public $subtitle;

    public $new_image;

    public $old_image;

    public $date;

    public $time;

    public $content;

    public $summary;

    public $status;

    public $image;

    public $news;

    use WithFileUploads;

    public function render()
    {
        return view('livewire.admin.news.edit-news')->layout('layouts.admin-app')->layoutData([
            'title'=> 'Admin - News | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }

    public function mount(News $news)
    {
        $this->news = $news;
        $this->title = $news->title;
        $this->subtitle = $news->subtitle;
        $this->date = $news->date;
        $this->time = $news->time;
        $this->content = $news->content;
        $this->summary = $news->summary;
        $this->old_image = $news->image;
    }

    public function updateNews()
    {
        $validated = $this->validate([
            'title' => 'required|string',
            'subtitle' => 'required|string',
            'date' => 'required|string',
            'time' => 'required|string',
            'content' => 'required|string',
            'summary' => 'required|string',
            // 'image' => 'required|mimes:jpg,png',
        ]);

        // if ($this->image) {
        //     $validated['image'] = $this->image->store('public/news');
        // }
        $image = $this->news->image;
        if ($this->new_image) {
            $image = $this->new_image->store('public/news');
        }
        $this->news->update([
            'title' => $this->title,
            'summary' => $this->summary,
            'date' => $this->date,
            'time' => $this->time,
            'summary' => $this->summary,
            'content' => $this->content,
            'image' => $image,
        ]);
        $this->reset();
        session()->flash('success', 'News Successfully Updated');

        return redirect(route('admin_news'));

    }
}