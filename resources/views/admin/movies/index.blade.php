@extends('layouts.admin')

@section('content')
<table class="table table-striped">
  <thead>
    <tr class="text-center">
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
    <tr class="text-center">
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
        <a class="btn btn-sm btn-square btn-primary mb-1" href="{{ route('admin.movies.show', $movie->id) }}" role="button" title="Visualizza il progetto">
          <i class="fa-solid fa-eye"></i>
        </a>
        <form action="{{ route('admin.movies.destroy', $movie->id) }}" class="d-inline-block" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-square btn-danger">
                <i class="fa-solid fa-trash"></i>
            </button>
        </form>
        <div class="d-flex">
          <div>
            <a class="btn btn-primary" href="{{ route('admin.movies.show', ['movie' => $movie['id']])}}" role="button"><i class="fas fa-eye"></i></a>
          </div>
          <div class="mx-1">
            <a class="btn btn-warning" href="{{ route('admin.movies.edit', ['movie' => $movie['id']])}}"><i class="fa-solid fa-pen-to-square"></i></a>
          </div>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection