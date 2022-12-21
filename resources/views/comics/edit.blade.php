@extends('layouts.app')

@section('page-title', 'Laravel Comics')

@section('content')
    <section class="container my-5">
        <a href="{{route('comics.show', $comic->id)}}" class="indietro"><i class="fa-solid fa-circle-left"></i> Torna indietro</a>
        <form action="{{ route('comics.update', $comic->id)  }}" method="POST" class="my-form">
        @csrf
        @method('PUT')
            <h1 class="text-center fs-1">Aggiungi il tuo Comic</h1>
            <div>
                <label for="title">Titolo</label>
                <input type="text" name="title" id="title" value="{{old('title', $comic->title)}}" required>
            </div>
            <div>
                <label for="price">Prezzo $</label>
                <input type="text" name="price" id="price" placeholder="25.99" value="{{old('price', $comic->price)}}" required>
            </div>
            <div>
                <label for="series">Series</label>
                <input type="text" name="series" id="series" value="{{old('series', $comic->series)}}" required> 
            </div>
            <div>
                <label for="sale_date">Data di Uscita</label>
                <input type="date" name="sale_date" id="sale_date" value="{{old('sale_date', $comic->sale_date)}}">
            </div>
            <div>
                <label for="type">Tipo</label>
                <input type="text" name="type" id="type" placeholder="es. comic book" value="{{old('type', $comic->type)}}" required>
            </div>
            <div>
                <label for="artists">Artisti</label>
                <input type="text" name="artists" id="artists" placeholder="Artista1, Artista2,..." value="{{old('artists', $comic->artists)}}" required>
            </div>
            <div>
                <label for="writers">Scrittori</label>
                <input type="text" name="writers" id="writers" placeholder="Scrittore1, Scrittore2,..." value="{{old('writers', $comic->writers)}}" required>
            </div>
            <div>
                <label for="description">Descrizione</label>
                <textarea name="description" id="description" rows="4" required>{{old('description', $comic->description)}}</textarea>
            </div>
            <button type="submit" class="my-btn text-uppercase fw-bold">Invia</button>
        </form>

    </section>
@endsection