<?php

namespace App\Livewire\Frontend;

use App\Models\Contact;
use Livewire\Component;

class FrontendContact extends Component
{
    public $name;

    public $email;

    public $subject;

    public $message;

    public function render()
    {
        return view('livewire.frontend.frontend-contact')->layout('layouts.frontend-app')->layoutData([
            'title' => 'Contact Us | OGO OLUWA GROUP OF SCHOOLS',
        ]);
    }

    public function store()
    {
        $validated = $this->validate([
            'email' => 'required|email',
            'message' => 'required|string',
            'subject' => 'required|string',
            'name' => 'required|string',
        ]);

        Contact::create($validated);
        $this->reset();
        session()->flash('success', 'Contact Successfully Created');

        return redirect(route('contact'));
    }
}