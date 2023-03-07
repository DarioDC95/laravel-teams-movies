@extends('layouts.admin')

@section('content')
<section>
    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h2>Modifica il progetto selezionato</h2>
            </div>
            @if ($errors->any())
                @foreach ($errors->all() as $value)
                    <div class="text-danger">{{ $value }}</div>
                @endforeach
            @endif
        </div>
        <div class="row">    
            <div class="col-12">
                <form action="{{ route('admin.movies.update', ['movie' => $movie->id]) }}" method="POST">
                @csrf
                @method('PUT')
                    <div class="mb-3 form-group">
                        <label for="title" class="control-label">Titolo: </label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo del film" value="{{ old('title', $movie) }}">
                    </div>
                    @error('title')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                    <div class="mb-3 form-group">
                        <label for="original_title" class="control-label">Titolo: </label>
                        <input type="text" class="form-control" id="original_title" name="original_title" placeholder="Inserisci il titolo originale del film" value="{{ old('original_title', $movie) }}">
                    </div>
                    @error('original_title')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                    <div class="mb-3 form-group">
                        <label for="nationality" class="control-label">Nazionalità: </label>
                        <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Inserisci la nazionalità del film" value="{{ old('nationality', $movie) }}">
                    </div>
                    @error('nationality')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                    <div class="mb-3 form-group">
                        <label for="release_date" class="control-label">Data di rilascio: </label>
                        <input type="date" class="form-control" id="release_date" name="release_date" value="{{ old('release_date', $movie) }}">
                    </div>
                    @error('release_date')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                    <div class="mb-3 form-group">
                        <label for="vote" class="control-label">Voto: </label>
                        <input type="text" class="form-control" id="vote" name="vote" placeholder="Inserisci voto del film" value="{{ old('vote', $movie) }}">
                    </div>
                    @error('vote')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                    <div class="form-group mb-4">
                        <label class="control-label">Genere: </label>
                        <select class="form-select" id="genre_id" name="genre_id">
                            <option value="" selected disabled>Scegli il genere del film</option>
                            @foreach ($genres as $item)
                                <option value="{{ $item->id }}" @selected(old('id', $item) == $item->genre_id) >{{ $item->name }}</option>
                            @endforeach
                        </select>
                        @error('genre_id')
                            @foreach ($errors->get('genre_id') as $value)
                                <div class="text-danger">{{ $value }}</div>
                            @endforeach
                        @enderror
                    </div>
                    <div class="mb-3 form-group">
                        <label for="cast" class="control-label">Cast: </label>
                        <input type="text" class="form-control" id="cast" name="cast" placeholder="Inserisci il cast del film">
                    </div>
                    @error('cast')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                    <div class="mb-3 form-group">
                        <label for="cover_path" class="control-label">Url immagine: </label>
                        <input type="text" class="form-control" id="cover_path" name="cover_path" placeholder="Inserisci l'URL per l'immagine del film" value="{{ old('cover_path', $movie) }}">
                    </div>
                    @error('cover_path')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                
                    <button type="submit" class="btn btn-success my-3">
                        Salva
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection