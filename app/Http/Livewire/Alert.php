<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Alert extends Component
{
    public $message = "Alert message";
    public $liked = true;
    
    public function render()
    {
        return view('livewire.alert');
    }
    public function toggleLike()
    {
        $this->liked = !$this->liked;
    }
}
