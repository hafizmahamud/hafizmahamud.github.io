<?php

namespace App\Http\Livewire;

use App\Models\Post as BlogPost;
use Livewire\Component;

class Post extends Component
{
    public $post;

    public function mount($slug){
        $this->post = BlogPost::where('slug', $slug)->first();
    }

    public function render()
    {
        return view('blogpost')
                ->extends('layouts.app')
                ->section('content');
    }
}