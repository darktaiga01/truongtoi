@extends('layouts.layout')

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
                                        <input type="search" name="txtSearch" class="form-control form-control-lg " id="inlineFormInputGroup"
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
<section id="intro" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12">
                <div class="section-heading">
                    <p class="lead">Trường Tui là một dự án phi lợi nhuận chấm chấm </p>
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
                            <p>Giao diện đẹp bla bla.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="intro-box">
                            <span>02.</span>
                            <h4>Tra cứu</h4>
                            <p>Tốc độ nhanh bla bla. </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="intro-box">
                            <span>03.</span>
                            <h4>Sứ mệnh</h4>
                            <p>Bla bla.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="intro-box">
                            <span>04.</span>
                            <h4>Phi lợi nhuận</h4>
                            <p>bla bla.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                   <div class="intro-cta">
                       <p class="lead ">Biết thêm về chúng tôi ? <a href="#contact" class="smoth-scroll">Liên hệ</a></p>
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
<!--  TESTIMONIAL AREA END  
<div class="py-5 text-center" style="background-color: #2CBF7B;">
  <div class="container">
    <div class="row">
      <div class="col-md-9 p-3">
        <h1 class="mb-0">
          <h3 class="text-white">Đăng kí ngay để trở thành thành viên của chúng tôi !</h3>
      </h1>
  </div>
  <div class="col-md-3 align-items-center d-flex justify-content-center p-3"> <a class="btn btn-white btn-circled"
      href="#">Đăng kí</a> </div>
  </div>
</div>
</div>-->
<!--  BLOG AREA START  -->
<section id="blog" class="section-padding bg-main">
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
            <div class="col-lg-4 col-sm-6 col-md-4">
                <div class="blog-block ">
                    <img src="images/blog/blog-1.jpg" alt="" class="img-fluid">
                    <div class="blog-text">
                        <h6 class="author-name"><span>Tips and tricks</span>john Doe</h6>
                        <a href="blog-single.html" class="h5 my-2 d-inline-block">
                           Best tips to grow your content quality and standard.
                       </a>
                       <p>If you want to grow your content quality and standard you should foolow these tips properly voluptatibus.</p>
                   </div>
               </div>
           </div>
           <div class="col-lg-4 col-sm-6 col-md-4">
            <div class="blog-block ">
                <img src="images/blog/blog-2.jpg" alt="" class="img-fluid">
                <div class="blog-text">
                    <h6 class="author-name"><span>Branding</span>john Doe</h6>
                    <a href="blog-single.html" class="h5 my-2 d-inline-block">
                        Brand your site at top in few minuts.
                    </a>
                    <p>Brand your site at top, boost your audioance corporis facilis animi voluptas alias ex saepe quo voluptatibus.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-md-4">
            <div class="blog-block ">
                <img src="images/blog/blog-3.jpg" alt="" class="img-fluid">
                <div class="blog-text">
                    <h6 class="author-name"><span>Marketing</span>john Doe</h6>
                    <a href="blog-single.html" class="h5 my-2 d-inline-block">
                        How to become a best sale <br>marketer in a year!
                    </a>
                    <p>Becomeing a best sale marketer is not easy but not impossible too.Need to follow up some proper guidance and strategy .</p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--  BLOG AREA END  -->
<!--
  <div class="banner-area banner-3">
    <div class="overlay dark-overlay"></div>
    <div class="d-table">
      <div class="d-table-cell">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 mx-auto text-center col-sm-12 col-md-12">
          <div class="banner-content content-padding">
          <h2 class="banner-title">TÌM TRƯỜNG, CHỌN NGÀNH NHANH CHÓNG CHÍNH XÁC</h2>
          <p class="mb-3">Tra cứu ngành nghề cùng thông tin trường Đại học - Cao đẳng dễ dàng, nhanh chóng.</p>
        </div>
        <div class="col-md-12 col-lg-6 col-sm-12 m-auto">
          <form method="GET" action="{{ route('search') }}">
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input type="search" name="keyword" class="form-control form-control-lg " id="inlineFormInputGroup"
                placeholder="Nhập tên trường, ngành,..">
              </div>
              <div class="col-12 col-md-3">
                <button type="submit" class="btn btn-block btn-lg btn-success">Tìm kiếm!</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
        </div>
      </div>
    </div>
  </div>-->
  <!--
<div class="py-5">
    <div class="container">
      <div class="row">-->
        <!--<div class="col-lg-8 p-md-5 p-3 d-flex flex-column justify-content-center">
          <h1>Hàng ngàn trường đại học trên khắp cả nước</h1>
          <p class="mb-0">TruongTui là trang web hỗ trợ học sinh, sinh viên, phụ huynh có nhu cầu tìm hiểu về các thông
            tin của trường học và ngành nghề mong muốn một cách nhanh chóng và chính xác.</p>
        </div>
        <div class="col-lg-4 p-3">-->
<!--<div id="myCarousel" class="carousel slide">-->

  <!-- Indicators -->
 <!-- <ul class="carousel-indicators">
    <li class="item1 active"></li>
    <li class="item2"></li>
    <li class="item3"></li>
  </ul>
  -->
  <!-- The slideshow -->
<!--  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../images/banner_0.jpg" alt="Công nghệ thông tin" width="1100" height="500" >
      <div class="carousel-caption">
        <h2>HÀNG NGÀN TRƯỜNG ĐẠI HỌC TRÊN KHẮP CẢ NƯỚC</h2>
        <h5>Hỗ trợ học sinh, sinh viên, phụ huynh tìm thông tin của trường học - ngành nghề mong muốn</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../images/banner_1.jpg" alt="Luật" width="1100" height="500">
      <div class="carousel-caption">
        <h2>NHANH CHÓNG - CHÍNH XÁC - ĐẦY ĐỦ</h2>
        <h5>Chúng tôi luôn cố gắng mang đến thông tin đầy đủ nhất</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../images/1.png" alt="Bách khoa" width="1100" height="500">
      <div class="carousel-caption">
        <h2>HÃY TRẢI NGHIỆM CÙNG CHÚNG TÔI</h2>
      </div>
    </div>
  </div>-->
  
  <!-- Left and right controls -->
<!--  <a class="carousel-control-prev" href="#myCarousel">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#myCarousel">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
        </div>
      </div>-->
   <!--</div>-->
  <!-- Icon grid -->
<!--  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="fa fa-graduation-cap m-auto text-success"></i>
            </div>
            <h3>Hoàn toàn vì học sinh</h3>
            <p class="lead mb-0">Cung cấp đầy đủ thông tin cần thiết cho học sinh, sinh viên, người trong lĩnh vực giáo dục</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="fa fa-users m-auto text-success"></i>
            </div>
            <h3>Dễ sử dụng</h3>
            <p class="lead mb-0">Được thiết kế trực quan nhằm tạo tiện lợi cho người dùng</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="fa fa-money m-auto text-success"></i>
            </div>
            <h3>Phi lợi nhuận</h3>
            <p class="lead mb-0">Thông tin được sưu tầm, cung cấp một cách khách quan. Không ảnh hưởng tài chính bởi 1 đơn vị nào khác. Hoàn toàn miễn phí</p>
          </div>
        </div>
      </div>
    </div>
  </section>
-->
<!--  <div class="py-5" style="padding-bottom: 0px !important;">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 p-md-5 p-3 d-flex flex-column justify-content-center">
          <h1>Hàng ngàn trường đại học trên khắp cả nước</h1>
          <p class="mb-0">TruongTui là trang web hỗ trợ học sinh, sinh viên, phụ huynh có nhu cầu tìm hiểu về các thông
            tin của trường học và ngành nghề mong muốn một cách nhanh chóng và chính xác.</p>
        </div>
        <div class="col-lg-4 p-3">
          <div id="carousel2" class="carousel slide" data-ride="carousel" data-interval="5000">
            <div class="carousel-inner">
              <div class="carousel-item active"> <img class="d-block w-100"
                  src="https://lh3.googleusercontent.com/proxy/ul4kV1LFYYssmG6_Ye_63C0XzcWvzW6kBOLVOWb_V6MORYU-RrfPGCn5BJmc3sv_N-8C_x39AnOmmBd9XF_69XYUYS0nBNI2xWzdcymSs9KnfWCKWQrUxiDqUWkTk6HA9kYpT_me4M8ECdDR9w_xquK7bo4">
              </div>
              <div class="carousel-item active"> <img class="d-block w-100"
                  src="https://news.diemthi.edu.vn/wp-content/uploads/2019/07/bk-9946-1563270717.jpg"> </div>
              <div class="carousel-item active"> <img class="d-block w-100"
                  src="https://chuyennguyentrai.edu.vn/uploads/du_hoc_2020/dang16_4_2020/6b9wgp5j0txlqko4dlymaojoeu9pydcw.jpeg">
              </div>
              <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span></a>
              <a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>-->
<!-- Cột 2 -->
    <!--<div class="py-5 bg-light">
      <div class="container">
        <div class="row">
          
          <div class="col-lg-4 p-3">
            <div id="carousel2" class="carousel slide" data-ride="carousel" data-interval="5000">
              <div class="carousel-inner">
                <div class="carousel-item active"> <img class="d-block w-100"
                    src="https://lh3.googleusercontent.com/proxy/ul4kV1LFYYssmG6_Ye_63C0XzcWvzW6kBOLVOWb_V6MORYU-RrfPGCn5BJmc3sv_N-8C_x39AnOmmBd9XF_69XYUYS0nBNI2xWzdcymSs9KnfWCKWQrUxiDqUWkTk6HA9kYpT_me4M8ECdDR9w_xquK7bo4">
                </div>
                <div class="carousel-item active"> <img class="d-block w-100"
                    src="https://news.diemthi.edu.vn/wp-content/uploads/2019/07/bk-9946-1563270717.jpg"> </div>
                <div class="carousel-item active"> <img class="d-block w-100"
                    src="https://chuyennguyentrai.edu.vn/uploads/du_hoc_2020/dang16_4_2020/6b9wgp5j0txlqko4dlymaojoeu9pydcw.jpeg">
                </div>
                <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span></a>
                <a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 p-md-5 p-3 d-flex flex-column justify-content-center">
            <h1>Thông tin được cập nhật chính xác, đầy đủ</h1>
            <p class="mb-0">TruongTui luôn cố gắng mang đến cho người dùng đầy đủ thông tin nhất có thể.</p>
          </div>
        </div>
      </div>
</div>-->


  <!--  <div class="py-5">
      <div class="container">
        <div class="row">
          <div class="p-3 col-md-4">
            <div class="blockquote mb-0">
              <p>"The only way to do great work is to love what you do. If you haven't found it yet, keep looking. Don't
                settle. As with all matters of the heart, you'll know when you find it."</p>
              <div class="blockquote-footer">
                <b>Steve Jobs</b>, CEO at Apple Inc.</div>
            </div>
          </div>
          <div class="col-md-2 mx-auto p-3"> <img class="img-fluid d-block rounded-circle"
              src="http://www.clker.com/cliparts/7/4/c/4/1446118397610284725jobs.png"> </div>
        </div>
      </div>
    </div>
-->
    <div class="py-5 text-center" style="background-color: #01403A;">
      <div class="container">
        <div class="row">
          <div class="col-md-8 p-3">
           <h1 class="mb-0">
              <h3 class="text-white">Bạn đã sẵn sàng cùng chúng tôi?</h3>
            </h1>
          </div>
          <div class="col-md-4 align-items-center d-flex justify-content-center p-3"> <a class="btn btn-lg btn-light"
              href="#">Đăng kí</a> </div>
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
