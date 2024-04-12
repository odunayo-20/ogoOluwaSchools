<?php

namespace App\Livewire\Frontend;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class FrontendAcademics extends Component
{
    public function render()
    {
        return view('livewire.frontend.frontend-academics')->layout('layouts.frontend-app')->layoutData([
            'title' => 'Academics | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }

    public function downloadAdmission(){
        if(Storage::disk('local')->exists("{{asset('assets/frontend/admission form/ogo oluwa Admission Form.pdf')}}")){
            session()->flash('status', 'Admission Downloading');
          return Storage::download("{{asset('assets/frontend/admission form/ogo oluwa Admission Form.pdf')}}");
        }else{
            session()->flash('error', 'Not Found');
        }
    }
}