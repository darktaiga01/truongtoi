@extends('layouts.layout')
@section('title')
@foreach($majors as $major)
TruongTui - Danh sách trường đào tạo {{ $major->name }}
@endforeach
@endsection
@section('content')

<div class="py-5 bg-dark" style="margin-top:65px;">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-light">
          <span>Nhóm ngành</span>
          @foreach($majors as $major)
          <h3 class="text-light">{{ $major->name }}</h3>
          @switch($major->id)
              @case(1)
              <p>Khoa học kỹ thuật là các ngành khoa học liên quan tới việc phát triển kỹ thuật và thiết kế các sản phẩm trong đó có ứng dụng các kiến thức khoa học tự nhiên.</p>
                  @break
              @case(2)
                  <p>Khoa học xã hội bao gồm các môn khoa học nghiên cứu về các phương diện con người của thế giới. Nhân văn, còn được gọi là nhân văn học, là các ngành học nghiên cứu về văn hóa con người, sử dụng các phương pháp chủ yếu là phân tích, lập luận, hoặc suy đoán, và có đáng kể yếu tố lịch sử — khác với những cách tiếp cận chủ yếu dựa trên thực nghiệm của các ngành khoa học tự nhiên</p>
                  @break
              @case(3)
              <p>Kinh tế là khối ngành sau khi học sẽ cung cấp cho sinh viên những kiến thức sâu rộng về kinh tế nhằm chuẩn bị cho sinh viên trước những cơ hội việc làm trong các doanh nghiệp trong nước, nước ngoài và thậm chí là có thể làm ở các cơ quan nhà nước.</p>
              @break 
              @case(4)
              <p>Là những trường mang tính chất quân đội hoặc chính trị. Nhằm tạo ra nguồn nhân lực quản lý và bảo vệ đất nước</p>
              @break  
              @case(5)
              <p>Là khối ngành dùng để phát triển tài năng, năng khiếu của mỗi con người. Đó có thể là nghệ thuật, âm nhạc, hội hoạ,...</p>
              @break  
              @case(6)
              <p>Là khối ngành đào tạo về những kiến thức chuyên môn về y học, sức khoẻ. Đào tạo ra những bác sĩ, y tá trong tương lai</p>
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
            <a href="{{ url('university', $university->id) }}"><img src="{{ $university->feature_img }}" alt="Image" class="img-fluid rounded"></a>
            <div class="excerpt">
            <span class="post-category text-white bg-secondary mb-3">{{ $university->location->name }}</span>

            <h2><a href="{{ url('university', $university->id) }}">{{ $university->title }}</a></h2>
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