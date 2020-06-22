@extends('layouts.layout')

@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
        <h1>List Post</h1>
        <hr>

        <table class = "table table-bordered">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Body</th>
            </tr>
            @php
             $i = 0;    
            @endphp
            @foreach ($posts as $post)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                </tr>
                <td>
                    <form action="{{ route('posts.destroy', $post->id) }}" method = "POST">
                        <a class="btn btn-info" href="{{ route('posts.show', $post->id)}}">Show</a>
                        <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                </td>
            @endforeach
        </table>
    </div>
</div>
@endsection