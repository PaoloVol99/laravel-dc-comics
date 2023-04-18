@extends('layouts.app')

@section('content')

    <div class="container">
        <h3>Modifica: {{ $comic->title }}</h1>
        <form action="">
            <input type="text">
        </form>
    </div>

    <div class="container">
        <form action="{{ route('comics.update', $comic) }}" method="POST">
            
          @csrf
          @method('PUT')
    
          <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" >
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
          </div>
          <div class="mb-3">
            <label for="thumb" class="form-label">Immagine (url)</label>
            <input type="text" class="form-control" id="thumb" name="thumb" >
          </div>
          <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price" >
          </div>
          <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" name="series" >
          </div>
          <div class="mb-3">
            <label for="sale-date" class="form-label">Data di vendita</label>
            <input type="text" class="form-control" id="sale-date" name="sale_date" >
          </div>
    
          <button type="submit" class="btn btn-primary">Salva</button>
    
    
        </form>
    </div>

    

@endsection