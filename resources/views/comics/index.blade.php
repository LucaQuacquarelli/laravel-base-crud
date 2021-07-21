@extends('layouts.main')

@section('comics-main')
    <h1>Elenco fumetti</h1>

    @foreach ($comics as $comic)
    <div class="comic">
        <h2>{{$comic->title}}</h2>
        <a href="{{route('comics.show', $comic->id)}}" class="btn">SHOW</a>
        <a href="{{route('comics.edit', $comic->id)}}" class="btn">EDIT</a>
    </div>
    @endforeach
    <div class="page">
        {{$comics->links()}}
    </div>
@endsection