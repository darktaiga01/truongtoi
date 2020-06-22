@extends('layouts.layout')

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-8 offset-md-2">
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
        <h1>Tạo bài mới</h1>
        <hr>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="txtTitle">Title:</label>
                <input type="text" class="form-control" id="txtTitle" placeholder="Enter Title" name="txtTitle">
            </div>
            <div class="form-group">
                <label for="txtBody">Body:</label>
                <textarea class="form-control" id="txtBody" name="txtBody" rows="10" placeholder="Enter Body"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>
</div>
@endsection

