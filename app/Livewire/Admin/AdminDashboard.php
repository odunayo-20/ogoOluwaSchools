<?php

namespace App\Livewire\Admin;

use App\Models\Admission;
use App\Models\Contact;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Staff;
use App\Models\Student;
use Livewire\Component;

class AdminDashboard extends Component
{
    public $staff = [];

    public $admission = [];

    public $student = [];

    public $event = [];

    public $news = [];

    public $contact = [];

    public $gallery = [];
    public $subscriptions;

    public function render()
    {
        return view('livewire.admin.admin-dashboard')->layout('layouts.admin-app')->layoutData([
            'title' => 'Admin - Dashboard | OGO OLUWA GROUP OF SCHOOLS',
        ]);
    }

    public function mount()
    {
        $this->staff = Staff::get();
        $this->student = Student::get();
        $this->admission = Admission::get();
        $this->event = Event::get();
        $this->news = News::get();
        $this->gallery = Gallery::get();
        $this->contact = Contact::get();

        $this->subscriptions= [
            ['Day'=>'Donate Total', 'Value'=>count($this->staff)],
            ['Day'=>'Contact', 'Value'=>count($this->student)],
            ['Day'=>'Event', 'Value'=>count($this->event)],
            ['Day'=>'Team', 'Value'=>count($this->news)],
            ['Day'=>'Testimonial', 'Value'=>count($this->gallery)],
            ['Day'=>'Testimonial', 'Value'=>count($this->contact)],
                ];
    
    }
}