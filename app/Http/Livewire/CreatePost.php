<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreatePost extends Component
{
    public $title, $body;
    public $success;
    protected $rules = [
        'title' => 'required|string|max:220',
        'body' => 'required'
    ];
    public function render()
    {
        return view('livewire.create-post');
    }
    public function create(){
        $this->validate();

        $this->success = true;
    }
}
