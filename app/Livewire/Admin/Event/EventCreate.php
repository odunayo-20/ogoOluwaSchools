<?php

namespace App\Livewire\Admin\Event;

use App\Models\Event;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Intervention\Image\ImageManagerStatic as Image;


class EventCreate extends Component
{

    public $title, $location, $image, $date, $time, $message, $status;
    use WithFileUploads;

    public function render()
    {
        return view('livewire.admin.event.event-create')->layout('layouts.admin-app')->layoutData([
            'title'=> 'Admin - Events | OGO OLUWA GROUP OF SCHOOLS'
        ]);
    }

    public function store(){
        $validated = $this->validate([
           'title' => 'required|string',
           'location' => 'required|string',
           'message' => 'required|string',
           'image' => 'required|mimes:png,jpg',
           'time' => 'required',
           'date' => 'required',
        ]);

        // if($this->image){ 
        //     $validated['image'] = $this->image->store('public/events');
        // }
        // $image = Image::make(public_path('uploads/mail.jpg'));
        // $image->resize(300,200);
        // $image->crop(300,200);
        $image = $this->image->store('public/events');

        Event::create([
            'title' => $this->title,
            'location' => $this->location,
            'message' => $this->message,
            'time' => $this->time,
            'date' => $this->date,
            'image' => $image,
        ]);
        $this->reset();
        session()->flash('success', 'Event Successfully Created');
        return redirect(route('admin_event_list'));


    }
}