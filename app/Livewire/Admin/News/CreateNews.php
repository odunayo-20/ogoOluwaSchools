<?php

namespace App\Livewire\Admin\News;

use App\Models\News;
use Livewire\Component;
use Livewire\WithFileUploads;
class CreateNews extends Component
{

    public $title, $subtitle, $image, $date, $time, $content, $summary,  $status, $news;
    use WithFileUploads;

    public function render()
    {
        return view('livewire.admin.news.create-news')->layout('layouts.admin-app')->layoutData([
            'title'=> 'Admin - News | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }

    public function store(){
       $validated =  $this->validate([
'title' => 'required|string',
'subtitle' => 'required|string',
'date' => 'required|string',
'time' => 'required|string',
'content' => 'required|string',
'summary' => 'required|string',
'image' => 'required|mimes:jpg,png',
        ]);

                if($this->image){ 
            $validated['image'] = $this->image->store('public/news');
        }


        $this->news = News::create($validated);
        $this->reset();
        session()->flash('success', 'News Successfully Created');
        return redirect(route('admin_news'));
        
    }





    
}