@extends('layouts.admin')

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Cover</th>
      <th scope="col">Title</th>
      <th scope="col">Original title</th>
      <th scope="col">Nationality</th>
      <th scope="col">Release_date</th>
      <th scope="col">Vote</th>
      <th scope="col">Cast</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach($movies as $movie)
    <tr>
      <th scope="row">
        <img src="{{ $movie['cover_path']}}" alt="" class="movie_img" >
      </th>
      <td>{{ $movie['title']}}</td>
      <td>{{ $movie['original_title']}}</td>
      <td>{{ $movie['nationality']}}</td>
      <td>{{ $movie['release_date']}}</td>
      <td>{{ $movie['vote']}}</td>
      <td>{{ $movie['cast']}}</td>
      <td>
        <a class="btn btn-sm btn-primary" href="{{ route('admin.movies.show', $movie->id) }}" role="button" title="Visualizza il progetto">
          <i class="fa-solid fa-eye"></i>
        </a>
        <form action="{{ route('admin.movies.destroy', $movie->id) }}" class="d-inline-block" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-square btn-danger">
                <i class="fa-solid fa-trash"></i>
            </button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection