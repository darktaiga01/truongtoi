@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-lg-11">
            <h2>Update Student</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('student') }}"> Back</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{ route('posts.update',$post->id) }}" >
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="txtFirstName">Title: </label>
            <input type="text" class="form-control" id="txtTitle" placeholder="Enter Title" name="txtTitle" value="{{ $post->title }}">
        </div>

        <div class="form-group">
            <label for="txtBody">Body:</label>
            <textarea class="form-control" id="txtBody" name="txtBody" rows="10" placeholder="Enter Body">{{ $post->body }}</textarea>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection
