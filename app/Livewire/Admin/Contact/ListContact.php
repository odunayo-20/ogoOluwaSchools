<?php

namespace App\Livewire\Admin\Contact;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;

class ListContact extends Component
{
    use WithPagination;

    #[Url(history: true)]
    public $search = '';

    public $pagination = 10;

    public $contact_id;

    public function render()
    {
        if (! $this->search) {

            $contacts = Contact::latest()->paginate($this->pagination);
        } else {

            $contacts = Contact::latest()->where('name', 'like', '%'.$this->search.'%')->orwhere('email', 'like', '%'.$this->search.'%')->orwhere('subject', 'like', '%'.$this->search.'%')->paginate($this->pagination);
        }

        return view('livewire.admin.contact.list-contact', compact('contacts'))->layout('layouts.admin-app')->layoutData([
            'title' => 'Admin - Contact | OGO OLUWA GROUP OF SCHOOLS',
        ]);
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function delete($contact_id)
    {

        $this->contact_id = $contact_id;
    }

    public function destroy()
    {
        $contact = Contact::findOrFail($this->contact_id)->delete();
        $this->dispatch('close-modal');
        session()->flash('success', 'Contact is Successfully Deleted');
    }
}
