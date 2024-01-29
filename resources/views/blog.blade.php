@extends('layouts.app')

@section('content')

<main>


<div class="main-content">
    <nav class="navbar .about-text">
        <ul class="navbar-list">

            <li class="navbar-item">
            <a href="/">
                <button class="navbar-link" data-nav-link>About</button>
            </a>
            </li>

            <li class="navbar-item">
                <a href="/blog">
                    <button class="navbar-link active">Blog</button>
                </a>
            </li>
        </ul>

    </nav>

    <aside class="sidebar" data-sidebar>

      <div class="sidebar-info">

        <div class="container mx-auto p-10">
        <h1 class="caption text-4xl mt-10 text-center tracking-tight leading-10 font-extrabold">
            Welcome to The Blog
        </h1>

        <div class="mt-10 max-w-xl mx-auto">
            @foreach(\App\Models\Post::all() as $post)
                <div class="border-b mb-5 pb-5 border-gray-200">
                    <a href="post/{{ $post->slug }}" class="text-post text-2xl font-bold mb-2">{{ $post->title }}</a>
                    <p class="text-post">{{ Str::limit($post->body, 100) }}</p>
                </div>
            @endforeach
        </div>
    </div>

      </div>
    </aside>
</div>
</main>

@endsection