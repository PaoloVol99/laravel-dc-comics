@extends('layouts.app')

@section('content')
    
    <div class="container">
        <h1>{{ $comic->title }}</h1>
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