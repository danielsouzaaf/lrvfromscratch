@extends('layout')

@section('content')
    <h1>Todos cartoes</h1>

    <ul>
        @foreach ($cards as $card)
        <li>{{ $card->title }}</li>
        @endforeach
    </ul>
    @endsection