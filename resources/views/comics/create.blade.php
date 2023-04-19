@extends('layouts.app')

@section('content')

    <div class="container">
        <h3>Nuovo fumetto</h1>
        <form action="">
            <input type="text">
        </form>
    </div>

    <div class="container">
        <form action="{{ route('comics.store') }}" method="POST">
            
          @csrf
    
          <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" >
            @error('title')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
            @error('description')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="thumb" class="form-label">Immagine (url)</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{ old('thumb') }}">
            @error('thumb')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') }}">
            @error('price')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{ old('series') }}">
            @error('series')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="sale-date" class="form-label">Data di vendita</label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale-date" name="sale_date" value="{{ old('sale_date') }}">
            @error('sale_date')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
    
          <button type="submit" class="btn btn-primary">Salva</button>
    
    
        </form>

        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
            </ul>
          </div>
        @endif
  </div>

    

@endsection