@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Questa è la Home</h1>
    
        <ul>
            <li>
                <a href="{{ route('comics.index') }}">Fumetti</a>
            </li>
            <li>
                <a href="{{ route('comics.create') }}">Aggiungi fumetto</a>
            </li>
            <li>Altre cose</li>
        </ul>
    </div>
    

@endsection