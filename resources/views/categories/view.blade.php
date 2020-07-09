@extends('layouts.layout')

@section('content')

<div class="py-5 bg-dark">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-light">
          <span>Nhóm ngành</span>
          @foreach($majors as $major)
          <h3>{{ $major->name }}</h3>
          @switch($major->id)
              @case(1)
              <p>Khoa học kỹ thuật là các ngành khoa học liên quan tới việc phát triển kỹ thuật và thiết kế các sản phẩm trong đó có ứng dụng các kiến thức khoa học tự nhiên.</p>
                  @break
              @case(2)
                  
                  @break
              @default
                  
          @endswitch
          @endforeach
        </div>
      </div>
    </div>
  </div>

  {{-- bài viét --}}
  <div class="site-section bg-white">
    <div class="container">
      <div class="row">
        @foreach($universities as $university)
        <div class="col-lg-4 mb-4">
          <div class="entry2 card shadow-sm p-3 mb-5 bg-white rounded">
            <a href="single.html"><img src="{{ $university->feature_img }}" alt="Image" class="img-fluid rounded"></a>
            <div class="excerpt">
            <span class="post-category text-white bg-secondary mb-3">{{ $university->location->name }}</span>

            <h2><a href="single.html">{{ $university->title }}</a></h2>
            <p class="font-weight-bolder text-info">Chuyên ngành: <span class="font-weight-normal text-body">{{ $university->major->name }}</span> </p>
            <p class="font-weight-bolder text-info">Điểm TB: <span class="font-weight-normal text-body">{{ $university->avg_mark }}</span> </p>
            <hr>
              <p><a class="btn btn-dark" href="{{ url('university', $university->id) }}">Xem chi tiết</a></p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
  </div>
  </div>
@endsection