@extends('layouts.app')

@section('content')

<div>
    <div class="container">
       <table class="table table-striped">
        <thead>
            <th>Titolo</th>
            <th>Descrizione</th>
            <th>Prezzo</th>
            <th>Serie</th>
            <th>Data di vendita</th>
            <th>Tipo</th>
            <th>Link</th>
        </thead>
        @foreach ($comics as $comic)
            <tr class="">
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->description }}</td>
                <td>{{ $comic->price }}</td>
                <td>{{ $comic->series }}</td>
                <td>{{ $comic->sale_date }}</td>
                <td>{{ $comic->type }}</td>
                <td>
                    <a href="{{ route('comics.show', $comic->id)  }}"></a>
                </td>
            </tr>
        @endforeach
       </table>
    </div>
  </div>

@endsection