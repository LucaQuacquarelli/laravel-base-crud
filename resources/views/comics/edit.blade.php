@extends('layouts.main')

@section('comics-main')
    <h1>Modifica del fumetto: {{ $comic->title }}</h1>
    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <label for="title"><strong>Titolo</strong></label>
        <input type="text" placeholder="Inserisci il titolo del fumetto" id="title" name="title" required value="{{$comic->title}}">
        <label for="description"><strong>Descrizione</strong></label>
        <textarea id="description" name="description" placeholder="Inserisci la descrizione del fumetto" rows="4" required>{{$comic->description}}</textarea>
        <label for="cover"><strong>URL Immagine</strong></label>
        <input type="text" placeholder="Inserisci l'url della copertina del fumetto" id="cover" name="cover" required value="{{$comic->cover}}">
        <label for="price"><strong>Prezzo</strong></label>
        <input type="number" step="0.01" placeholder="Inserisci il prezzo del fumetto" id="price" name="price" required value="{{$comic->price}}">
        <label for="series"><strong>Serie</strong></label>
        <input type="text" placeholder="Inserisci la serie del fumetto" id="series" name="series" required value="{{$comic->series}}">
        <label for="sale_date"><strong>Data d'uscita</strong></label>
        <input type="text" placeholder="Inserisci la data d'uscita del fumetto" id="sale_date" name="sale_date" required value="{{$comic->sale_date}}">
        <label for="type"><strong>Tipo</strong></label>
        <input type="text" placeholder="Inserisci il tipo del fumetto" id="type" name="type" required value="{{$comic->type}}">
        <button type="submit" class="btn btn-show">SAVE</button>
        <a href="{{route('comics.show', $comic->id)}}" class="btn btn-edit">CANCEL</a>
    </form>
@endsection