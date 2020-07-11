@extends('layouts.layout')

@section('title')
@foreach($categories as $category)
TruongTui - Thông tin về nhóm ngành {{ $category->name }}
@endforeach
@endsection
@section('content')

<div class="py-5 bg-dark">
    <div class="container" style="margin-top: 60px;">
      <div class="row">
        <div class="col-md-6 text-light">
          <span>Nhóm ngành</span>
          @foreach($categories as $category)
          <h3 class="text-light">{{ $category->name }}</h3>
          @endforeach
        </div>
      </div>
    </div>
  </div>



  {{-- bài viét --}}
  <div class="site-section bg-white">
    <div class="container">
      <div class="row">
        @foreach($posts as $post)
        <?php $string = substr(strip_tags($post->body), 0, 300); ?>
        <div class="col-lg-4 mb-4">
          <div class="entry2 card shadow-sm p-3 mb-5 bg-white rounded">
            <a href="{{ url('post', $post->id) }}"><img src="{{ $post->feature_img }}" alt="Image" class="img-fluid rounded"></a>
            <div class="excerpt">
            <span class="post-category text-white bg-secondary mb-3">{{ $post->category->name }}</span>

            <h2><a href="{{ url('post', $post->id) }}">{{ $post->title }}</a></h2>
            <p> {!! $string !!} </p>
            <hr>
              <p><a class="btn btn-dark" href="{{ url('post', $post->id) }}">Xem chi tiết</a></p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
  </div>
  </div>
@endsection