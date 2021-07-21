@extends('layouts.main')

@section('comics-main')
<div class="comic">
    @if (session('message'))
        <div class="notify">
            {{ session('message') }}
        </div>
    @endif
    <h2>{{$comic->title}}</h2>
    <img src="{{$comic->cover}}" alt="cover">
    <p>{{$comic->description}}</p>
    <p>{{$comic->price}} &euro;</p>
    <p>{{$comic->series}}</p>
    <p>{{$comic->sale_date}}</p>
    <p>{{$comic->type}}</p>
    <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-edit">EDIT</a>
    <a href="{{route('comics.index')}}" class="btn">Torna all' Elenco</a>
    <form action="{{route('comics.destroy', $comic->id)}}" method="POST" onSubmit = "return confirm('Sei sicuro di voler cancellare definitivamente {{$comic->title}}?')">
        @csrf
        @method('DELETE')
        <input type="submit" class="btn btn-delate" value="DELETE">
    </form>
</div>
@endsection