<?php

namespace App\Livewire\Admin\Staff;

use App\Models\Staff;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class AdStaffList extends Component
{
    use WithPagination;
    public $staff;
    #[Url(history: true)]
    public $search = '';
    public $pagination = 10;
public $staff_id;
    public function render()
    {

        if (!$this->search) {

            $staffs = Staff::latest()->paginate($this->pagination);
        } else {

            $staffs = Staff::latest()->where('firstname', 'like', '%' . $this->search . '%')->orwhere('lastname', 'like', '%' . $this->search . '%')->orwhere('email', 'like', '%' . $this->search . '%')->paginate($this->pagination);
        }


        return view('livewire.admin.staff.ad-staff-list', compact('staffs'))->layout('layouts.admin-app')->layoutData([
            'title' => 'Admin - Staff | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }



    public function delete($staff_id){

        $this->staff_id = $staff_id;
    }

    public function destroy(){
        $staff =  Staff::findOrFail($this->staff_id);
        $staff->delete();
        if(Storage::disk('local')->exists($staff->image)){
            Storage::delete($staff->image);
            $staff->delete();
        }
        $this->dispatch('close-modal');
        session()->flash('success', 'Staff is Successfully Deleted');
    }
}