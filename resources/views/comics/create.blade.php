@extends('layouts.main')

@section('comics-main')
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        @method('POST')
        <label for="title"><strong>Titolo</strong></label>
        <input type="text" placeholder="Inserisci il titolo del fumetto" id="title" name="title" required>
        <label for="description"><strong>Descrizione</strong></label>
        <textarea id="description" name="description" placeholder="Inserisci la descrizione del fumetto" rows="4" required></textarea>
        <label for="cover"><strong>URL Immagine</strong></label>
        <input type="text" placeholder="Inserisci l'url della copertina del fumetto" id="cover" name="cover" required>
        <label for="price"><strong>Prezzo</strong></label>
        <input type="number" step="0.01" placeholder="Inserisci il prezzo del fumetto" id="price" name="price" required>
        <label for="series"><strong>Serie</strong></label>
        <input type="text" placeholder="Inserisci la serie del fumetto" id="series" name="series" required>
        <label for="sale_date"><strong>Data d'uscita</strong></label>
        <input type="text" placeholder="Inserisci la data d'uscita del fumetto" id="sale_date" name="sale_date" required>
        <label for="type"><strong>Tipo</strong></label>
        <input type="text" placeholder="Inserisci il tipo del fumetto" id="type" name="type" required>
        <button type="submit" class="btn btn-show">Save</button>
    </form>
@endsection