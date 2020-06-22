@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-lg-11">
                <h2>Laravel 6 CRUD Example</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('posts') }}"> Back</a>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>Title:</th>
            <td>{{ $post->title }}</td>
        </tr>
        <tr>
            <th>Body:</th>
            <td>{{ $post->body }}</td>
        </tr>

 
    </table>
@endsection