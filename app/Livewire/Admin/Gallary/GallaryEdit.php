<?php

namespace App\Livewire\Admin\Gallary;

use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class GallaryEdit extends Component
{
    use WithFileUploads;

    public $old_image;
    #[Rule('required|mimes:jpg')]
    public $new_image;
    public $category;
    public $gallery;
    public function render()
    {
        return view('livewire.admin.gallary.gallary-edit')->layout('layouts.admin-app')->layoutData([
            'title'=> 'Admin - Gallery | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }

    public function mount(Gallery $gallery){
        $this->gallery = $gallery;
        $this->category = $gallery->category;
        $this->old_image = $gallery->image;
    }

    public function updateGallery(){
$image = $this->gallery->image;
if($this->new_image){

    $image = $this->new_image->store('public/gallery');
}
$this->gallery->update([
'category' => $this->category,
'image' => $image,
]);
// dd('do something');
session()->flash('success', 'Gallery Successfully Updated');
return redirect(route('admin_gallery'));

    }
}