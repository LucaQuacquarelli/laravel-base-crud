@extends('layouts.main')

@section('comics-main')
<div class="comic">
    <h2>{{$comic->title}}</h2>
    <img src="{{$comic->cover}}" alt="cover">
    <p>{{$comic->description}}</p>
    <p>{{$comic->price}} &euro;</p>
    <p>{{$comic->series}}</p>
    <p>{{$comic->sale_date}}</p>
    <p>{{$comic->type}}</p>
    <a href="{{route('comics.index')}}" class="btn">Torna all' Elenco</a>
</div>
@endsection