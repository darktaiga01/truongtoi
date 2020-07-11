@extends('layouts.layout')
@section('title','TruongToi - Về chúng tôi')
    
@section('content')
<header class="masthead text-white text-center" style="background:url('../images/aboutus.jpeg') no-repeat center center; margin-top: 76px;">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="banner-title text-light">GẶP GỠ CHÚNG TÔI</h1>
          <p class="mb-3">Chúng tôi là sinh viên trường Đại Học Công Nghệ Thông Tin - Đại Học Quốc Gia Thành Phố Hồ Chí Minh. Với kinh nghiệm của mình, chúng tôi hiểu những điều bạn cần, và sẽ giúp bạn đạt tới ước mơ.</p>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <a href="#contact"><button type="button" class="btn btn-outline-light btn-lg">Liên hệ</button></a>

        </div>
      </div>
    </div>
  </header>

  <div class="py-5">
    <div class="container py-5">
      <div class="row mb-4">
        <div class="col-lg-5">
          <h2 class="display-4 font-weight-light">Chúng tôi là</h2>
          <p class="font-italic text-muted">sinh viên trường Đại Học Công Nghệ Thông Tin</p>
        </div>
      </div>
  
      <div class="row text-center">
        <!-- Team item-->
        <div class="col-xl-3 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://i.pinimg.com/474x/72/96/1f/72961f0c446d82e14ebca1ca01b4952f.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
            <h5 class="mb-0">Đặng Ngọc Tân</h5><span class="small text-uppercase text-muted">Nhóm trưởng - Backend Developer</span>
            <ul class="social mb-0 list-inline mt-3">
              <li class="list-inline-item"><a href="https://www.facebook.com/linkylist" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
            </ul>
          </div>
        </div>
        <!-- End-->
  
        <!-- Team item-->
        <div class="col-xl-3 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://scontent.fvca1-2.fna.fbcdn.net/v/t1.0-9/s960x960/84332143_1071351493197388_8907038001763188736_o.jpg?_nc_cat=104&_nc_sid=85a577&_nc_ohc=8TrRJi7QKdcAX-_23TD&_nc_ht=scontent.fvca1-2.fna&_nc_tp=7&oh=09fc24d7c6792e681ee480a5a27112ec&oe=5F2E2BA6" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
            <h5 class="mb-0">Nguyễn Trần Thị Bích Trâm</h5><span class="small text-uppercase text-muted">Thành viên - Frontend Developer</span>
            <ul class="social mb-0 list-inline mt-3">
              <li class="list-inline-item"><a href="https://www.facebook.com/tram.1510" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
            </ul>
          </div>
        </div>
        <!-- End-->
  
        <!-- Team item-->
        <div class="col-xl-3 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://scontent.fvca1-1.fna.fbcdn.net/v/t1.0-9/p960x960/106702527_154436849550480_3318648830079649681_o.jpg?_nc_cat=111&_nc_sid=85a577&_nc_ohc=fr76kl4RnO8AX9bqzhV&_nc_ht=scontent.fvca1-1.fna&_nc_tp=6&oh=5c521ba59bedfcf01eafdf0944e73445&oe=5F2E44FB" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
            <h5 class="mb-0">Trần Bình Tú</h5><span class="small text-uppercase text-muted">Thành viên - Frontend Developer</span>
            <ul class="social mb-0 list-inline mt-3">
              <li class="list-inline-item"><a href="https://www.facebook.com/jjk.pjm.191310" class="social-link"><i class="fa fa-facebook-f"></i></a></li>

            </ul>
          </div>
        </div>
        <!-- End-->
  
        <!-- Team item-->
        <div class="col-xl-3 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://scontent.fvca1-1.fna.fbcdn.net/v/t1.0-9/86860253_3201521600072157_5975702528522715136_n.jpg?_nc_cat=108&_nc_sid=7aed08&_nc_ohc=WzV_TY9q-IkAX9kpBDz&_nc_ht=scontent.fvca1-1.fna&oh=f37b5964618d1a60d2e20d9d0d60e574&oe=5F2EE3F3" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
            <h5 class="mb-0">Nguyễn Văn Phát</h5><span class="small text-uppercase text-muted">Thành viên - Frontend Developer</span>
            <ul class="social mb-0 list-inline mt-3">
              <li class="list-inline-item"><a href="https://www.facebook.com/phattom87" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
            </ul>
          </div>
        </div>
        <!-- End-->
      </div>
    </div>
  </div>
  <div class="bg-light py-5" id="contact">
    <div class="container">
      <h2 class="my-5">LIÊN HỆ CHÚNG TÔI</h2>
      @if(count($errors) > 0)
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif

        @if($message = Session::get('success'))
        <div class="alert alert-success">
          <ul>
            <strong>{{ $message }}</strong>
          </ul>
        </div>
        @endif
      <div class="row">
        <div class="col-md-7 mb-5">

         
          <form action="{{ route('send') }}" method="POST" class="p-5 bg-white">
            @csrf
            

            <div class="row form-group">
              
              <div class="col-md-12">
                <label class="text-black" for="name">Bạn là: </label> 
                <input type="text" id="name" name="name" class="form-control">
              </div>
            </div>

            <div class="row form-group">
              
              <div class="col-md-12">
                <label class="text-black" for="email">Email</label> 
                <input type="email" id="email" name="email" class="form-control">
              </div>
            </div>

            <div class="row form-group">
              
              <div class="col-md-12">
                <label class="text-black" for="subject">Tiêu đề</label> 
                <input type="text" id="subject" name="subject" class="form-control">
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label class="text-black" for="message">Nội dung</label> 
                <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Viết câu hỏi, vấn đề bạn muốn trao đổi với chúng tôi"></textarea>
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <input type="submit" value="Gửi" class="btn btn-primary py-2 px-4 text-white">
              </div>
            </div>


          </form>
        </div>
        <div class="col-md-5">
          
          <div class="p-4 mb-3 bg-white">

            <p class="mb-0 font-weight-bold">SĐT</p>
            <p class="mb-4">0977079241</p>

            <p class="mb-0 font-weight-bold">Email: </p>
            <p class="mb-0">dangngoctan2012@gmail.com</p>

          </div>

        </div>
      </div>
    </div>
  </div>
  
  
 
  
@endsection