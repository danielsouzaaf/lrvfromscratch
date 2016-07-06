@extends('layout')

@section('content')
    <h1>Cartão de id: {{ $card->id }}</h1>

    <ul>

        <li>{{ $card->title }}</li>
        <li>{{ $card->created_at }}</li>
        <li>{{ $card->updated_at }}</li>
    </ul>
@endsection