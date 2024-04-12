<?php

namespace App\Livewire\Frontend;

use Livewire\Component;

class FrontendService extends Component
{
    public function render()
    {
        return view('livewire.frontend.frontend-service')->layout('layouts.frontend-app')->layoutData([
            'title' => 'Service | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }
}