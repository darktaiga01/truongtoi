@extends('layouts.layout')

@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
        <h1>List Post</h1>
        <hr>

        <table class = "table table-bordered">
            <thead class="thead-dark">
            <tr>
                <th scope="col" class="w-auto">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col" class="w-25">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
             $i = 0;    
            @endphp
            @foreach ($posts as $post)
                <tr>
                    <td scope="row">{{ ++$i }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category->name }}</td>
                    <td>
                        <form action="{{ route('posts.destroy', $post->id) }}" method = "POST">
                            <a class="btn btn-info" href="{{ route('posts.show', $post->id)}}">Show</a>
                            <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection