@extends('layouts.layout')

@section('content')
<div class="py-5 bg-secondary">
  <div class="container">
    <div class="row">
      <div class="col-md-6 text-light">
        <h2>Thảo luận</h2>
        <p>Nơi thảo luận mọi vấn đề như học tập, cuộc sống. Người dùng gửi chủ đề thông qua web, chúng tôi sẽ sàng lọc và đăng lên.</p>
      </div>
    </div>
  </div>
</div>  
<div class="container" style="margin-top: 60px;">
 
  {{-- <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>Mới nhất</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <img src="../images/tin-tuc-UIT.jpg" style="width: 100px; height: 100px;">
        </td>
        <td>
          <div>
            <h6>Trâm Cute</h6>
            <p>Ngày đăng: 10/7/2020 </p>
          </div>
          <span>Tôi đã chọn Công nghệ thông tin và tôi thấy đây là quyết định đúng đắn.</span>
        </td>
        <td class="td-bottom">
          <a href="#">Trả lời</a>
        </td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table> --}}
  @foreach($posts as $post)
  <div class="row mt-3 wow fadeIn">
    
    <?php $string = substr(strip_tags($post->body),0, 300); ?>
    <!--Grid column-->
    <div class="col-lg-5 col-xl-4 mb-4">
        <!--Featured image-->
        <div class="view overlay rounded z-depth-1">
            <img src="{{ $post->feature_img}}" class="img-fluid" alt="">
            <a href="post/{{ $post->id }}" target="_blank">
                <div class="mask rgba-white-slight"></div>
            </a>
        </div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
        <h3 class="mb-3 font-weight-bold dark-grey-text">
            <strong>{{ $post->title}}</strong>
        </h3>
        <p class="grey-text">{!! $string !!}</p>
        <a href="post/{{ $post->id }}" target="_blank" class="btn btn-primary btn-md">Xem
            <i class="fas fa-play ml-2"></i>
        </a>
    </div>
    <!--Grid column-->

  </div>
<!--Grid row-->

<hr class="mb-5">
<!--Grid row-->
@endforeach
</div>
@endsection   