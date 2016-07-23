@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>Cartão de id: {{ $card->id }}</h1>

            <ul class="list-group">

                <li class="list-group-item">{{ $card->title }}</li>
                <li class="list-group-item">{{ $card->created_at }}</li>
                <li class="list-group-item">{{ $card->updated_at }}</li>
            </ul>
            <ul class="list-group">
            @foreach ($card->notes as $note)
                <li class="list-group-item"> {{ $note->body }}</li>
            @endforeach
            </ul>
            <hr>
            <h3>Adicione uma nova nota</h3>


            <form method="post" action="/cards/{{ $card->id }}/notes">
                <div class="form-group">
                    <textarea name="body" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Adicionar nota</button>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </div>
    </div>
@endsection