@extends('layouts.main')

@section('comics-main')
    <h1>Elenco fumetti</h1>

    @foreach ($comics as $comic)
    <div class="comic">
        <h2>{{$comic->title}}</h2>
        <a href="{{route('comics.show', $comic->id)}}" class="btn btn-show">SHOW</a>
        <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-edit">EDIT</a>
        <form action="{{route('comics.destroy', $comic->id)}}" method="POST" onSubmit = "return confirm('Sei sicuro di voler cancellare definitivamente {{$comic->title}}?')">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-delate" value="DELETE">
        </form>
    </div>
    @endforeach
    <div class="page">
        {{$comics->links()}}
    </div>
@endsection