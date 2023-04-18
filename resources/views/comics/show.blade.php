@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>{{ $comic->title }}</h1>
            </div>
            <div class="col-auto">
                <a href="{{ route('comics.index') }}" class="btn btn-primary">
                    Torna alla lista completa
                </a>
            </div>            
        </div>
    </div>

    <div class="container">
        <img src="{{ $comic->thumb }}" alt="">
        <p>{{ $comic->description }}</p>
    </div>

    <div class="container">
        <h5>Serie: {{ $comic->series }}</h3>
        <h4>Compra: €{{ $comic->price }}</h1>
    </div>
    
@endsection