<?php

namespace App\Livewire\Frontend;

use App\Models\Gallery;
use Livewire\Component;
use Livewire\WithPagination;

class FrontendGallery extends Component
{
    use WithPagination;
    
    
    // public $gallery;
    // public $per_page = 8; 
    public $posts_per_page = 20; 
    
    public function render()
    {
        $gallery = Gallery::paginate($this->posts_per_page);
        $classroom = Gallery::where('category', 'classroom')->paginate($this->posts_per_page);
        $hostel = Gallery::where('category', 'hostel')->paginate($this->posts_per_page);
        $library = Gallery::where('category', 'library')->paginate($this->posts_per_page);
        $laboratory = Gallery::where('category', 'laboratory')->paginate($this->posts_per_page);
        return view('livewire.frontend.frontend-gallery', compact(['gallery', 'laboratory', 'hostel', 'library','classroom']))->layout('layouts.frontend-app')->layoutData([
            'title' => 'Gallery | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }


    // public function loadMoregallery(){
    //     $this->posts_per_page +=4;
    // }
    // public function loadMoreclassroom(){
    //     $this->posts_per_page +=4;
    // }
    // public function loadMorehostel(){
    //     $this->posts_per_page +=4;
    // }
    // public function loadMorelibrary(){
    //     $this->posts_per_page +=4;
    // }
    // public function loadMorelaboratory(){
    //     $this->posts_per_page +=4;
    // }
}