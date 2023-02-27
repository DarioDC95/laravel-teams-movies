
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
        <img src="{{ $movie['cover_path']}}" alt="" class="movie_img" width="100px">
      </th>
      <td>{{ $movie['title']}}</td>
      <td>{{ $movie['original_title']}}</td>
      <td>{{ $movie['nationality']}}</td>
      <td>{{ $movie['release_date']}}</td>
      <td>{{ $movie['vote']}}</td>
      <td>{{ $movie['cast']}}</td>
      <td>
      <a class="btn btn-primary" href="{{ route('movies.show', ['movie' => $movie['id']])}}" role="button">View movie</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>