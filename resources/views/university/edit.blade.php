@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Chỉnh sửa bài viết</h1>
    <hr>
@stop

@section('content')
<script src="https://cdn.tiny.cloud/1/s9npd92lwltfwko9evfbuyhmv6m654gluxk2butj29es10mi/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
      selector: '#txtBody',
      plugins: 'hr anchor a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments',
      toolbar: 'hr anchor a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script>
    <div class="row">
        <div class="col-md-10 offset-md-1">


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
    <form method="post" action="{{ route('university.update',$university->id) }}" >
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="txtFirstName">Title: </label>
            <input type="text" class="form-control" id="txtTitle" placeholder="Enter Title" name="txtTitle" value="{{ $university->title }}">
        </div>

        <div class="form-group">
            <label for="txtImg">Feature Image:</label>
            <input type="text" class="form-control" id="txtImg" placeholder="Enter Feature Image" name="txtImg" value={{ $university->feature_img }}>
        </div>
        <div class="form-group">
            <label for="major_id">Category:</label>
            <select class="form-control" name="major_id">
                @foreach ($majors as $major)
                @if($major->id == $university->major_id)
                    <option value="{{ $university->major_id }}" selected>{{ $university->major->name }}</option>
                @else
                <option value="{{ $major->id }}">{{ $major->name }}</option>
                @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="avg_mark">Average Mark:</label>
            <input type="text" class="form-control" id="avg_mark" placeholder="Enter Mark" name="avg_mark" value="{{ $university->avg_mark }}">
        </div>
        <div class="form-group">
            <label for="location_id">Location:</label>
            <select class="form-control" name="location_id">
                @foreach ($location as $city)
                @if($city->id == $university->location_id)
                    <option value="{{ $university->location_id }}" selected>{{ $university->location->name }}</option>
                @else
                <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endif
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="txtBody">Body:</label>
            <textarea class="form-control" id="txtBody" name="txtBody" rows="30" placeholder="Enter Body">{{ $university->body }}</textarea>
            <script type="text/javascript">
                $('#txtBody').wysihtml5();
            </script>
        </div>
        <button type="submit" class="btn btn-danger">Submit</button>
    </form>
</div>
</div>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop