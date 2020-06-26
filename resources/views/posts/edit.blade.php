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
    <form method="post" action="{{ route('posts.update',$post->id) }}" >
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="txtFirstName">Title: </label>
            <input type="text" class="form-control" id="txtTitle" placeholder="Enter Title" name="txtTitle" value="{{ $post->title }}">
        </div>

        <div class="form-group">
            <label for="txtImg">Feature Image:</label>
            <input type="text" class="form-control" id="txtImg" placeholder="Enter Feature Image" name="txtImg" value={{ $post->feature_img }}>
        </div>
        <div class="form-group">
            <label for="category_id">Category:</label>
            <select class="form-control" name="category_id">
                    
                @foreach ($categories as $category)
                @if($category->id == $post->category_id)
                    <option value="{{ $post->category_id }}" selected>{{ $post->category->name }}</option>
                @else
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="txtBody">Body:</label>
            <textarea class="form-control" id="txtBody" name="txtBody" rows="30" placeholder="Enter Body">{{ $post->body }}</textarea>
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