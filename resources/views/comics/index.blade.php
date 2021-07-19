@extends('layouts.main')

@section('comics-main')
    <h1>Elenco fumetti</h1>

    @foreach ($comics as $comic)
    <div class="comic">
        <h2>{{$comic->title}}</h2>
        <img src="{{$comic->cover}}" alt="cover">
        <p>{{$comic->description}}</p>
        <p>{{$comic->price}} &euro;</p>
        <p>{{$comic->series}}</p>
        <p>{{$comic->sale_date}}</p>
        <p>{{$comic->type}}</p>
        <span class="btn">SHOW</span>
    </div>
    @endforeach
    <div class="page">
        {{$comics->links()}}
    </div>
@endsection