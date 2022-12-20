@extends('layouts.app')

@section('page-title', 'Laravel Comics')

@section('content')
    <div class="home">
        <section class="container text-center">
            <h1 class="display-5 fw-bold mt-5">DC Comics</h1>
        </section>
        <section class="container my-5 comics">
            <h5 class="display-6 fw-bold">Comics</h5>
                <div class="img-box">
                    @for($i = 0; $i < 6; $i++)
                        <img src="{{$comics[$i]['thumb']}}" class="img-comics">
                    @endfor
                    <div class="shadow"></div>
                    <a href="{{route('comics.index')}}" class="link-comics">
                        <span>current series</span>
                    </a>
                </div>
        </section>
    </div>
@endsection