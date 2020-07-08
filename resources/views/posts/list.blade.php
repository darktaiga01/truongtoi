@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Danh sách bài viết</h1>
    <hr>
@stop

@section('content')
<div class="row">
    <div class="col-md-10 offset-md-1">
        <table class = "table table-bordered bg-white">
            <thead class="thead-dark">
            <tr>
                <th scope="col" class="w-auto">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col" class="w-25">Action</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($posts as $post)
                <tr>
                    <td scope="row">{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category->name }}</td>
                    <td>
                            <form action="{{ route('posts.destroy', $post->id) }}" method = "POST">
                            <a class="btn btn-info" href="{{ route('posts.show', $post->id)}}">Show</a>
                            <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                    </td>
                </tr>
                
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop