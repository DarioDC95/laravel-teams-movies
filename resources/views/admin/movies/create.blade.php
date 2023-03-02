@extends('layouts.admin')

@section('content')
<div class="blue-ctn">
</div>
<div class="containeer">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center"> Aggiungi nuovo film alla lista: </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-8 offset-md-2">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-unstyled">
                        @foreach ( $errors->all() as $error )
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('admin.movies.store')}}" method="POST" class="mt-5">
                @csrf
                <div class="mb-3 form-group">
                    <label for="title" class="control-label">Titolo: </label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo del film">
                </div>
                @error('title')
                    <div class="text-danger">{{$message}}</div>
                @enderror
                <div class="mb-3 form-group">
                    <label for="original_title" class="control-label">Titolo: </label>
                    <input type="text" class="form-control" id="original_title" name="original_title" placeholder="Inserisci il titolo originale del film">
                </div>
                @error('original_title')
                    <div class="text-danger">{{$message}}</div>
                @enderror
                <div class="mb-3 form-group">
                    <label for="nationality" class="control-label">Nazionalità: </label>
                    <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Inserisci la nazionalità del film">
                </div>
                @error('nationality')
                    <div class="text-danger">{{$message}}</div>
                @enderror
                <div class="mb-3 form-group">
                    <label for="release_date" class="control-label">Data di rilascio: </label>
                    <input type="date" class="form-control" id="release_date" name="release_date">
                </div>
                @error('release_date')
                    <div class="text-danger">{{$message}}</div>
                @enderror
                <div class="mb-3 form-group">
                    <label for="vote" class="control-label">Voto: </label>
                    <input type="text" class="form-control" id="vote" name="vote" placeholder="Inserisci voto del film">
                </div>
                @error('vote')
                    <div class="text-danger">{{$message}}</div>
                @enderror
                <div class="mb-3 form-group">
                    <label for="cast" class="control-label">Cast: </label>
                    <input type="text" class="form-control" id="cast" name="cast" placeholder="Inserisci il cast del film">
                </div>
                @error('cast')
                    <div class="text-danger">{{$message}}</div>
                @enderror
                <div class="mb-3 form-group">
                    <label for="cover_path" class="control-label">Url immagine: </label>
                    <input type="text" class="form-control" id="cover_path" name="cover_path" placeholder="Inserisci l'URL per l'immagine del film">
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

@endsection