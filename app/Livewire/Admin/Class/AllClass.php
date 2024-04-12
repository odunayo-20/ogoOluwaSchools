<?php

namespace App\Livewire\Admin\Class;

use App\Models\Classes;
use Livewire\Component;
use Livewire\WithPagination;

class AllClass extends Component
{
    use WithPagination;

    #[Url(history:true)]
    public $search = '';
    public $pagination = 10;
public $class_id;

    public function render()
    {
        if (!$this->search) {

            $classes = Classes::latest()->paginate($this->pagination);
        } else {

            $classes = Classes::latest()->where('name', 'like', '%'.$this->search.'%')->paginate($this->pagination);
        }

        return view('livewire.admin.class.all-class',compact('classes')
)->layout('layouts.admin-app')->layoutData([
            'title'=> 'Admin - Class | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }

    public function updateStatus($classId, $newStatus)
    {
        $classes = Classes::find($classId);
        $classes->update(['status' => $newStatus]);
    }




    public function delete($class_id){

        $this->class_id = $class_id;
    }

    public function destroy(){
        $class =  Classes::findOrFail($this->class_id);
        $class->delete();
        session()->flash('success', 'Class is Successfully Deleted');
        $this->dispatch('close-modal');
    }
    
}