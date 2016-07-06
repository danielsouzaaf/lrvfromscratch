@extends('layout')

@section('content')
    <h1>Todos cartoes</h1>

    <ul>
        @foreach ($cards as $card)
        <li><a href="/cards/{{$card->id}}">{{ $card->title }}</a></li>
        @endforeach
    </ul>
    @endsection