<?php

namespace App\Livewire\Admin\Class;

use App\Models\Classes;
use Livewire\Component;

class EditClass extends Component
{

    public $name;

    public $class;

    public function render()
    {
        return view('livewire.admin.class.edit-class')->layout('layouts.admin-app')->layoutData([
            'title'=> 'Admin - Class | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }

    public function mount(Classes $class){
        $class = $class;
        $this->name = $class->name;
    }

    public function store(){
        $this->class->update([
           'name' => $this->name, 
        ]);
        session()->flash('success', 'Class Successfully Updated');
        return redirect(route('admin_class'));
    }
}