{{-- @extends('layouts.layout') --}}
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Tạo bài mới</h1>
    <hr>
@stop

@section('content')
    <script src="https://cdn.tiny.cloud/1/s9npd92lwltfwko9evfbuyhmv6m654gluxk2butj29es10mi/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
          selector: '#txtBody',
          plugins: 'anchor a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
          toolbar: 'anchor a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
          menubar: 'insert',
          toolbar_mode: 'floating',
          tinycomments_mode: 'embedded',
          tinycomments_author: 'Author name',
        });
      </script>


{{-- <div class="container" style="margin-top: 25px;"> --}}
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
        <form action="{{ route('university.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="txtTitle">Title:</label>
                <input type="text" class="form-control" id="txtTitle" placeholder="Enter Title" name="txtTitle">
            </div>
            <div class="form-group">
                <label for="txtImg">Feature Image:</label>
                <input type="text" class="form-control" id="txtImg" placeholder="Enter Feature Image" name="txtImg">
            </div>
            <div class="form-group">
                <label for="major_id">Category:</label>
                <select class="form-control" name="major_id">
                    @foreach ($majors as $major)
                    <option value="{{ $major->id }}">{{ $major->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="avg_mark">Average Mark:</label>
                <input type="text" class="form-control" id="avg_mark" placeholder="Enter Mark" name="avg_mark">
            </div>
            <div class="form-group">
                <label for="location_id">Location:</label>
                <select class="form-control" name="location_id">
                    @foreach ($location as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="txtBody">Body:</label>
                <textarea class="form-control" id="txtBody" name="txtBody" rows="30" placeholder="Enter Body"></textarea>
                <script type="text/javascript">
                    $('#txtBody').wysihtml5();
                </script>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>
{{-- </div> --}}

@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop