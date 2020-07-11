@extends('layouts.layout')
@section('title','TruongTui - Tra cứu trường Đại Học chính xác')
@section('content')

<!--<header class="masthead text-white text-center">-->
  <!--MAIN BANNER AREA START -->

   <div class="banner-area banner-3" style="margin-top: 76px;">
    <div class="overlay dark-overlay"></div>
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-auto text-center col-sm-12 col-md-12">
                        <div class="banner-content content-padding">
                            <h1 class="banner-title">TÌM TRƯỜNG, CHỌN NGÀNH NHANH CHÓNG CHÍNH XÁC</h1>
                            <p>Tra cứu ngành nghề cùng thông tin trường Đại học - Cao đẳng dễ dàng, nhanh chóng.</p>
                            <div class="col-lg-6 m-auto text-center col-sm-12 col-md-12">
                                <form method="GET" action="{{ route('search') }}">
                                    <div class="form-row">
                                      <div class="col-12 col-md-12 mb-2 mb-md-0">
                                        <input type="search" name="keyword" class="form-control form-control-lg " id="inlineFormInputGroup"
                                        placeholder="Nhập tên trường, ngành,..">
                                    </div>
                                    <div class="col-12 col-md-12">
                                        <button type="submit" class="btn btn-white btn-circled">Tìm kiếm</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--MAIN HEADER AREA END -->
<!--  ABOUT AREA START  -->
<section id="intro" class="section-padding bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12">
                <div class="section-heading">
                    <p class="lead">Trường Tui là một dự án phi lợi nhuận nhằm giúp đỡ cho các bạn học sinh Việt Nam. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5  d-none d-lg-block col-sm-12">
                <div class="intro-img">
                    <img src="../images/why-choose.png" alt="intro-img" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12 ">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="intro-box">
                            <span>01.</span>
                            <h4>Giao diện</h4>
                            <p>Giao diện đơn giản, không dư thừa.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="intro-box">
                            <span>02.</span>
                            <h4>Tra cứu</h4>
                            <p>Thông tin chính xác, mới nhất, cập nhật kịp thời. </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="intro-box">
                            <span>03.</span>
                            <h4>Sứ mệnh</h4>
                            <p>Mang đến thông tin chính xác giúp học sinh có được sự lựa chọn chính xác trước ngưỡng cửa lớn nhất cuộc đời.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="intro-box">
                            <span>04.</span>
                            <h4>Phi lợi nhuận</h4>
                            <p>Chúng tôi cam kết sẽ không để tài chính ảnh hưởng đến nội dung trang web.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                   <div class="intro-cta">
                       <p class="lead ">Biết thêm về chúng tôi ? <a href="/aboutus" class="smoth-scroll">Liên hệ</a></p>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>
</section>
<!--  ABOUT AREA END  -->
<!--  TESTIMONIAL AREA START  -->
<section id="testimonial" class="section-padding ">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto col-sm-12 col-md-12">
              <div class="section-heading">
                <h4 class="section-title">Đánh giá</h4>
                <div class="line"></div>
            </div>
                <div class="carousel slide" id="test-carousel2">
                    <div class="carousel-inner">
                        <ol class="carousel-indicators">
                            <li data-target="#test-carousel2" data-slide-to="0" class="item1 active"></li>
                            <li data-target="#test-carousel2" data-slide-to="1" class="item2"></li>
                            <li data-target="#test-carousel2" data-slide-to="2" class="item3"></li>
                        </ol>

                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="testimonial-content style-2">
                                        <div class="author-info ">
                                            <div class="author-img">
                                                <img src="https://www.clipartmax.com/png/middle/180-1805232_koro-sensei-by-firefang96-koro-sensei-chibi-png.png" alt="" class="img-fluid">
                                            </div>
                                        </div>

                                        <p><i class="icofont icofont-quote-left"></i>"TruongToi là một trang web rất bổ ích. Luôn đưa đến thông tin chính xác kịp thời, mình rất thích." <i class="icofont icofont-quote-right"></i></p>
                                        <div class="author-text">
                                            <h5> Trần Tâm</h5>
                                            <p>Học sinh Cấp 3</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="testimonial-content style-2">
                                        <div class="author-info ">
                                            <div class="author-img">
                                                <img src="https://cdn3.iconfinder.com/data/icons/education-248/128/4-512.png" alt="" class="img-fluid">
                                            </div>
                                        </div>

                                        <p><i class="icofont icofont-quote-left"></i>"Là một giáo viên, tôi phải biết sớm nhất mọi thông tin để có thể truyền đạt cho học trò. TruongToi là sự lựa chọn của tôi." <i class="icofont icofont-quote-right"></i></p>
                                        <div class="author-text">
                                            <h5> Thầy Tuấn dạy Toán</h5>
                                            <p>GV.Trường Lê Hồng Phong</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="testimonial-content style-2">
                                        <div class="author-info ">
                                            <div class="author-img">
                                                <img src="http://www.clker.com/cliparts/7/4/c/4/1446118397610284725jobs.png" alt="" class="img-fluid">
                                            </div>
                                        </div>

                                        <p><i class="icofont icofont-quote-left"></i>"The only way to do great work is to love what you do. If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it." <i class="icofont icofont-quote-right"></i></p>
                                        <div class="author-text">
                                            <h5> Steve Jobs</h5>
                                            <p>CEO at Apple Inc.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  ITEM END  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="blog" class="section-padding bg-main bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 m-auto">
                <div class="section-heading">
                    <h4 class="section-title">Bài viết mới nhất</h4>
                    <div class="line"></div>
                </div>
            </div>
        </div>

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
</section>



    <div class="py-5 text-center" style="background-color: #01403A;">
      <div class="container">
        <div class="row">
          <div class="col-md-8 p-3">
           <h1 class="mb-0">
              <h3 class="text-white">Bạn đã sẵn sàng cùng chúng tôi?</h3>
            </h1>
          </div>
          <div class="col-md-4 align-items-center d-flex justify-content-center p-3"> <a class="btn btn-lg btn-light"
              href="{{ route('register') }}">Đăng kí</a> </div>
        </div>
      </div>
    </div>
    
    </div>
    

<script>
$(document).ready(function(){
  // Activate Carousel
  $("#myCarousel").carousel();
    
  // Enable Carousel Indicators
  $(".item1").click(function(){
    $("#myCarousel").carousel(0);
  });
  $(".item2").click(function(){
    $("#myCarousel").carousel(1);
  });
  $(".item3").click(function(){
    $("#myCarousel").carousel(2);
  });
    
  // Enable Carousel Controls
  $(".carousel-control-prev").click(function(){
    $("#myCarousel").carousel("prev");
  });
  $(".carousel-control-next").click(function(){
    $("#myCarousel").carousel("next");
  });
});
</script>
@endsection
