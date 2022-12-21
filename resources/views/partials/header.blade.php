<?php
  $links = config('db_seeder.navbar')
?>

<div class="d-flex bg-primary">
    <div class="container p-0">
        <ul class="text-white d-flex list-unstyled justify-content-end m-0 f-size">
            <li class="me-3">DC POWER &trade; VISA &copy;</li>
            <li>Additional dc site</li>
        </ul>
    </div>
</div>
<header class="d-flex align-items-center">
    <div class="container p-0 d-flex align-items-center">
        <div class="logo">
            <a href="{{route('home')}}">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo DC">
            </a>
        </div>
        <nav class="navbar-nav container p-0 navbar-light">
            <ul class="d-flex list-unstyled justify-content-end list-links text-uppercase fw-bold m-0">
                @foreach ($links as $link)
                    <li class="nav-item links">
                        <a class="{{(Route::currentRouteName() == $link['url'] || (Str::contains(Route::currentRouteName() , 'comics') && $link['url'] == 'comics.index'))  ? 'active' : ''}}"  href="{{route($link['url'])}}">{{$link['text']}}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header> 

<section id="jumbo">
    <div class="jumbo container">
        
    </div>
</section>
