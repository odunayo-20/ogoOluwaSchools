<?php

namespace App\Livewire\Frontend;

use Livewire\Component;

class FrontendGuideline extends Component
{
    public function render()
    {
        return view('livewire.frontend.frontend-guideline')->layout('layouts.frontend-app')->layoutData([
            'title' => 'Guideline | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }
}