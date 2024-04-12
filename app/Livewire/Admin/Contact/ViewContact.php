<?php

namespace App\Livewire\Admin\Contact;

use Livewire\Component;
use App\Models\Contact;

class ViewContact extends Component
{

    public $contact = [];
    
    public function render()
    {
        return view('livewire.admin.contact.view-contact')->layout('layouts.admin-app')->layoutData([
            'title'=> 'Admin - Contact | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }

    public function mount(Contact $contact){
        $this->contact = $contact;
    }
}