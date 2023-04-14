@extends('layouts.app')

@section('content')
    
    <h1>Questa è la Home</h1>

    <ul>
        <li>
            <a href="{{ route('comics.index') }}">Fumetti</a>
        </li>
        <li>Altre cose</li>
    </ul>

@endsection