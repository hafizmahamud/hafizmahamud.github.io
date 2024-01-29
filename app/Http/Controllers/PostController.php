<?php

namespace App\Http\Controllers;

use App\Models\Post as BlogPost;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public $post;

    public function mount($slug){
        $blogpost = BlogPost::where('slug', $slug)->first();

        return View('post')
        ->with(compact('blogpost'))
        ->extends('layouts.app')
        ->section('content');;
    }

}
