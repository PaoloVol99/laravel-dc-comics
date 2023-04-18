@extends('layouts.app')

@section('content')

<div>
    <div class="container">
        <div class="row">
            <div class="col-auto ms-auto">
                <a class="btn btn-success" href="{{ route('comics.create') }}">Aggiungi fumetto</a>
            </div>
        </div>
       <table class="table table-striped">
        <thead>
            <th>Titolo</th>
            <th>Descrizione</th>
            <th>Prezzo</th>
            <th>Serie</th>
            <th>Data di vendita</th>
            <th>Tipo</th>
            <th>Dettagli</th>
            <th>Azioni disponibili</th>
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
                    <a href="{{ route('comics.show', $comic->id)  }}">Pagina di dettaglio</a>
                </td>
                <td>
                    <div class="d-flex gap-1">
                        <a class="btn btn-primary btn-sm" href="{{ route('comics.edit', $comic)  }}">Edit</a>
                        <form action="{{ route('comics.destroy',$comic) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                          </form>
                    </div>
                </td>
            </tr>
        @endforeach
       </table>
    </div>
  </div>

@endsection