@extends('layouts.base')

@section('title')

@section('content')

    <h1>Crea fumetto</h1>

    <form action="{{ route('comics.store') }}" method="POST">

        @csrf

        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il nome del fumetto">
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control" id="description" name="description"
                placeholder="Inserisci la descrizione del prodotto"></textarea>
        </div>
        <div class="form-group">
            <label for="thumb">Immagine</label>
            <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci la copertina del fumetto">
        </div>
        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo del fumetto">
        </div>
        <div class="form-group">
            <label for="series">Serie</label>
            <input type="number" class="form-control" id="series" name="series" placeholder="Inserisci il numero del fumetto">
        </div>
        <div class="form-group">
            <label for="sale_date">Anno</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci l'anno di pubblicazione">
        </div>
        <div class="form-group">
            <label for="type">Genere</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci il genere">
        </div>
        <button type="submit" class="btn btn-primary">Crea</button>
    </form>
@endsection
