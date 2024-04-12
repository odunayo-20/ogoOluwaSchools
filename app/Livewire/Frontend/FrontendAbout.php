<?php

namespace App\Livewire\Frontend;

use Livewire\Component;

class FrontendAbout extends Component
{
    public function render()
    {
        return view('livewire.frontend.frontend-about')->layout('layouts.frontend-app')->layoutData([
            'title' => 'About-Us | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }
}