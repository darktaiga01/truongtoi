@extends('layouts.layout')

@section('content')
    <script src="https://cdn.tiny.cloud/1/s9npd92lwltfwko9evfbuyhmv6m654gluxk2butj29es10mi/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
          selector: '#txtBody',
          plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
          toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
          toolbar_mode: 'floating',
          tinycomments_mode: 'embedded',
          tinycomments_author: 'Author name',
        });
      </script>


<div class="container" style="margin-top: 25px;">
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
                <label for="txtImg">Feature Image:</label>
                <input type="text" class="form-control" id="txtImg" placeholder="Enter Feature Image" name="txtImg">
            </div>
            <div class="form-group">
                <label for="txtBody">Body:</label>
                <textarea class="form-control" id="txtBody" name="txtBody" rows="10" placeholder="Enter Body"></textarea>
                <script type="text/javascript">
                    $('#txtBody').wysihtml5();
                </script>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>
</div>

@endsection

