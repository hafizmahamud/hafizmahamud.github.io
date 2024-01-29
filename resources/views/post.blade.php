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
        <h1 class="caption text-4xl mt-10 text-center tracking-tight leading-10 font-extrabold">{!! $blogpost->title !!}</h1>
        <p class="text-post mt-5">{!! $blogpost->body !!}</p>
        
        </div>

      </div>
    </aside>
</div>
</main>
@endsection