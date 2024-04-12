<?php

namespace App\Livewire\Admin\Gallary;

use App\Models\Gallery;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class GallaryCreate extends Component
{
    use WithFileUploads;

    #[Rule('required')]
    public $category;

    #[Rule(['images.*' => 'required'])]
    public $images;

    public $image;

    public function render()
    {
        return view('livewire.admin.gallary.gallary-create')->layout('layouts.admin-app')->layoutData([
            'title' => 'Admin - Gallery | OGO OLUWA GROUP OF SCHOOLS',
        ]);
    }

    public function store()
    {
        $this->validate();

        if (is_array($this->images)) {
            foreach ($this->images as $image) {
                $result = $image->store('public/gallery');
                Gallery::create([
                    'category' => $this->category,
                    'image' => $result,
                ]);

            }
        }
        $this->reset();
        session()->flash('success', 'Gallery Successfully Created');
        $this->dispatch('swal', [
            'title' => 'Success!',
            'text' => 'Gallery Successfully Created!',
            'icon' => 'success',
        ]);

        return redirect(route('admin_gallery'));
    }
}