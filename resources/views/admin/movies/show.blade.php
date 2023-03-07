@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card mb-3">
        <img class="card-img-top" src=" {{$item['cover_path']}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Title: {{$item['title']}}</h5>
          <h5 class="card-title">Original title: {{$item['original_title']}}</h5>
          <p class="card-text">Nazionalità: {{$item['nationality']}}</p>
          <p class="card-text"><small class="text-muted">Release Date: {{$item['release_date']}}</small></p>
          <p class="card-text"><small class="text-muted">Vote: {{$item['vote']}}</small></p>
          <p class="card-text"><small class="text-muted">Cast: {{$item['cast'] }}</small></p>
          <p class="card-text"><small class="text-muted">Genre: @if ($item->genre_id)
            {{$item->genre->name}}
          @else
            Genere non disponibile
          @endif</small></p>
          <div class="text-center">
            <a href="{{route('admin.movies.edit', ['movie' =>$item->id])}}" class="btn btn-sm btn-square btn-warning">
                <i class="fa-solid fa-pen"></i>
            </a>
            <form action="{{route('admin.movies.destroy',  $item->id)}}" method="POST" class="d-inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger btn-square">
                    <i class="fa-solid fa-trash"></i>
                </button>
            </form>
            <a href="{{route('admin.movies.create')}}" class="btn btn-sm btn-square btn-success">
                <i class="fa-solid fa-plus"></i>
            </a>
        </div>
        </div>
      </div>
</div>
@endsection