<?php

namespace App\Livewire\Admin\Staff;

use App\Models\Staff;
use Livewire\Component;

class AdStaffView extends Component
{

    public $staff = [];
    public function render()
    {
        return view('livewire.admin.staff.ad-staff-view')->layout('layouts.admin-app')->layoutData([
            'title'=> 'Admin - Staff | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }

    public function mount(Staff $staff){
        $this->staff = $staff;
    }
}