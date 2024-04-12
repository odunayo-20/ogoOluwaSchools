<?php

namespace App\Livewire\Admin\Admission;

use App\Models\Admission;
use Livewire\Component;

class AdAdmissionView extends Component
{
    public $admission = [];
    public function render()
    {
        return view('livewire.admin.admission.ad-admission-view')->layout('layouts.admin-app')->layoutData([
            'title' => 'Admission | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }

    public function mount(Admission $admission){
       $this->admission = $admission; 
    }
}