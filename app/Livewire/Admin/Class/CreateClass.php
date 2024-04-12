<?php

namespace App\Livewire\Admin\Class;

use App\Models\Classes;
use Livewire\Component;
use Symfony\Component\Routing\Route;

class CreateClass extends Component
{
    public $name;


    public $subject;

    public function store()
    {
        // dd($this);
        $validated = $this->validate([
            'name' => 'required|unique:classes',
        ]);

        $subject = Classes::create($validated);
        $this->reset();
        session()->flash('success', 'Class Successfully Created');
        return redirect(route('admin_class'));
    }

    public function render()
    {
        return view('livewire.admin.class.create-class')->layout('layouts.admin-app')->layoutData([
            'title'=> 'Admin - Class | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }
}