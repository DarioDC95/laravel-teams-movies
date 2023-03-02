@extends('layouts.admin')

@section('content')
<div class="container">
    <table class="text-center ">
        <tr>
            <th>Title: </th>
            <td>{{$item['title']}}</td>
        </tr>
        <tr>
            <th>Original title: </th>
            <td>{{$item['original_title']}}</td>
        </tr>
        <tr>
            <th>Nationality: </th>
            <td>{{$item['nationality']}}</td>
        </tr>
        <tr>
            <th>Release date: </th>
            <td>{{$item['release_date']}}</td>
        </tr>
        <tr>
            <th>Vote: </th>
            <td>{{$item['vote']}}</td>
        </tr>
        <tr>
            <th>Cast: </th>
            <td>{{$item['cast'] }}</td>
        </tr>
        <tr>
            <th>Image: </th>
            <td>
                <img class="movie_img" src=" {{$item['cover_path']}}" width="100px" alt="">
               
            </td>
        </tr>
    </table>
</div>
@endsection