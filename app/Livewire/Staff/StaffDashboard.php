<?php

namespace App\Livewire\Staff;

use Livewire\Component;

class StaffDashboard extends Component
{
    public function render()
    {
        return view('livewire.staff.staff-dashboard')->layout('layouts.staff-app')->layoutData([
            'title'=> 'Staff-Dashboard | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }
}