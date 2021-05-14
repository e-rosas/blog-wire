<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class ListPost extends Component
{
    public function render()
    {
        $posts = Post::latest()->paginate(20);
        return view('livewire.list-post', ['posts' => $posts])
            ->extends('layouts.app')
            ->section('content');
    }
}
