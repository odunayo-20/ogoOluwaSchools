<?php

namespace App\Livewire\Admin\Gallary;

use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class GallaryList extends Component
{
    // public $gallery;
    public $class = 'classroom';

    public $hostel = 'hostel';

    public $lab = 'laboratory';
    public $gallery_id;

    public function render()
    {
        $gallery = Gallery::all();
        $classroom = Gallery::where('category', $this->class)->get();
        $hos = Gallery::where('category', $this->hostel)->get();
        $lib = Gallery::where('category', 'library')->get();
        $laboratory = Gallery::where('category', $this->lab)->get();

        return view('livewire.admin.gallary.gallary-list', compact(['gallery', 'classroom', 'hos', 'laboratory', 'lib']))->layout('layouts.admin-app')->layoutData([
            'title'=> 'Admin - Gallery | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }


    public function delete($gallery_id){

        $this->gallery_id = $gallery_id;
    }

    public function destroy(){
        $gallery =  Gallery::findOrFail($this->gallery_id);
        $gallery->delete();
        if(Storage::disk('local')->exists($gallery->image)){
            Storage::delete($gallery->image);
            $gallery->delete();
        }
        $this->dispatch('close-modal');
        session()->flash('success', 'Gallery is Successfully Deleted');
    }
}