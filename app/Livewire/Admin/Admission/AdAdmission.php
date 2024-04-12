<?php

namespace App\Livewire\Admin\Admission;

use App\Models\Admission;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class AdAdmission extends Component
{
    use WithPagination;
#[Url(history:true)]
    public $search = '';
    public $pagination = 10;
    public $admission_id;
    public function render()
    {
        if (!$this->search) {

            $admissions = Admission::latest()->paginate($this->pagination);
        } else {

            $admissions = Admission::latest()->where('surname', 'like', '%'.$this->search.'%')->orwhere('email', 'like', '%'.$this->search.'%')->orwhere('othername', 'like', '%'.$this->search.'%')->paginate($this->pagination);
        }
        return view('livewire.admin.admission.ad-admission', compact('admissions'))->layout('layouts.admin-app')->layoutData([
            'title' => 'Admission | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }


    public function updatedSearch(){
        $this->resetPage();
    }




    public function delete($admission_id){

        $this->admission_id = $admission_id;
    }

    public function destroy(){
        $admission =  Admission::findOrFail($this->admission_id);
        $admission->delete();
        if(Storage::disk('local')->exists($admission->image)){
            Storage::delete($admission->image);
            $admission->delete();
        }
        $this->dispatch('close-modal');
        session()->flash('success', 'Admission is Successfully Deleted');
    }
}