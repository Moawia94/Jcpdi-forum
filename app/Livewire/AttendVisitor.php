<?php

namespace App\Livewire;

use App\Mail\AttendanceConfirmation;
use App\Mail\Invitation;
use App\Models\Escort;
use App\Models\Visitor;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\Attributes\Layout;


class AttendVisitor extends Component
{

    public Visitor $visitor;
    public $attendingType;
    public $getEscort;
    public $name;
    public $email;
    public $job;
    public $mobile;
    public $yes;
    public $no;
    protected $rules = [
        'name' => 'required|min:5',
        'email' => 'required|email',
        'job' => 'required',
        'mobile' => 'required'
    ];


    public function mount($input){
        $this->visitor = Visitor::where('email' , $input)->orwhere('mobile' , $input)->first();
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.attend-visitor',[
            'escorts' => Escort::where('visitor_id', $this->visitor->id)->get(),
        ]);
    }


    public function trigerY(){
        $this->yes = "yes";
        $this->no = "tt";
    }
    public function trigerN(){
        $this->no = "no";
        $this->yes = 'tt';
    }

    public function save()
    {
        // dd($this->name);
            if($this->name !== null && $this->email !== null){
            $this->addEscort();
            $this->visitor->update(['statuse' => $this->attendingType ]);
            $this->visitor->save();
            session()->flash('message', __('hero.success')  );
            redirect()->to('/');
            // Mail::to('test@test.com')->send(new AttendanceConfirmation());
            // foreach (['taylor@example.com', 'dries@example.com'] as $recipient) {
            //              Mail::to($recipient)->send(new Invitation());
            //          }
        }
        else {
            $this->visitor->update(['statuse' => $this->attendingType ]);
            $this->visitor->save();
            // session()->flash('message', __('hero.success')  );
            // redirect()->to('/');
            return redirect('/')->with('message', 'Success!');
        }
        // Post::create([
        //     'title' => $this->title,
        //     'content' => $this->content,
        // ]);

        // return redirect()->to('/posts');
        // dd($this->attendingType);
        // return ($this->attendingType);
    }

 public function addEscort(){
    $this->validate();
    $escort = new Escort();
    $escort->name = $this->name;
    $escort->email = $this->email;
    $escort->job_title = $this->job;
    $escort->mobile = $this->mobile;
    $escort->visitor_id = $this->visitor->id;
    $escort->save();
    $this->reset(['name','email','mobile','job']);

 }

}
