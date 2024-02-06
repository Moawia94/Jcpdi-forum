<?php

namespace App\Livewire;

use App\Mail\AttendanceConfirmation;
use App\Mail\Invitation;
use App\Models\Visitors;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\Attributes\Layout;


class AttendVisitor extends Component
{

    public Visitors $visitor;
    public $attendingType;

    public function mount($input){
        $this->visitor = Visitors::where('email' , $input)->orwhere('mobile' , $input)->first();
    }


    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.attend-visitor');
    }

    public function test()
    {
        if($this->attendingType !== null){
            $this->visitor->update(['attendence_statuse' => $this->attendingType]);
            $this->visitor->save();
            session()->flash('message', __('hero.success')  );
            // Mail::to('test@test.com')->send(new AttendanceConfirmation());
            // foreach (['taylor@example.com', 'dries@example.com'] as $recipient) {
            //              Mail::to($recipient)->send(new Invitation());
            //          }
        }
        else {
        session()->flash('error', __('hero.error')  );
        }
        // Post::create([
        //     'title' => $this->title,
        //     'content' => $this->content,
        // ]);

        // return redirect()->to('/posts');
        // dd($this->attendingType);
        // return ($this->attendingType);
    }
}
