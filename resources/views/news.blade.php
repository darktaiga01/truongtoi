@extends('layouts.layout')

@section('content')
<div class="container">
	<div id="myCarousel" class="carousel slide">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li class="item1 active"></li>
    <li class="item2"></li>
    <li class="item3"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../images/tuyen-sinh-0.jpg" alt="Tuyển sinh 2020" width="100%" height="500" >
    </div>
    <div class="carousel-item">
      <img src="../images/tuyen-sinh-1.png" alt="Tuyển sinh Đại học Công nghệ thông tin" width="100%" height="500">
    </div>
    <div class="carousel-item">
      <img src="../images/tuyen-sinh-2.jpg" alt="Tuyển sinh Đại học Tây Đô" width="100%s" height="500">
    </div>
  </div>
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#myCarousel">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#myCarousel">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>
<div class="py-5">
	<div class="container">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Tin tuyển sinh</li>
    <li class="list-group-item">
    	<a href="#">
    	<div class="row" style="width: 100%; height: 90px;">
    		<div class="col-md-2" style="text-align: center;"><img src="../images/tin-tuc-UIT.jpg" alt="Tuyển sinh công nghệ thông tin" style="width: 100px; height: 90px;"></div>
    		<div class="col-md-10">
    			<h4>Thông tin tuyển sinh Đại học Công nghệ thông tin TP HCM</h4>
    			<span class="ddd" data-ddd-line="2" style="overflow-wrap: break-word;">Trường Đại học Công nghệ thông tin TP HCM trực thuộc Đại học Quốc gia TP HCM thông báo chiêu sinh sinh viên vào học tại trường với các nhóm ngành liên quan công nghệ thông tin. </span>
    		</div>
    	</div>
    </a>
    </li>
    <li class="list-group-item"><a href="#">
    	<div class="row" style="width: 100%; height: 90px;">
    		<div class="col-md-2" style="text-align: center;"><img src="../images/tin-tuc-BK.jpg" alt="Tuyển sinh Bách Khoa HCM" style="width: 100px; height: 90px;"></div>
    		<div class="col-md-10">
    			<h4>Thông tin tuyển sinh Đại học Bách Khoa TP HCM</h4>
    			<span class="ddd" data-ddd-line="2" style="overflow-wrap: break-word;">Trường Đại học Bách khoa TP HCM trực thuộc Đại học Quốc gia TP HCM thông báo chiêu sinh sinh viên vào học tại trường với các nhóm ngành liên quan kỹ thuật- công nghệ. </span>
    		</div>
    	</div>
    </a></li>
    <li class="list-group-item"><a href="#">
    	<div class="row" style="width: 100%; height: 90px;">
    		<div class="col-md-2" style="text-align: center;"><img src="../images/tin-tuc-Cantho.png" alt="Tuyển sinh Cần thơ" style="width: 100px; height: 90px;"></div>
    		<div class="col-md-10">
    			<h4>Thông tin tuyển sinh Đại học Cần Thơ</h4>
    			<span class="ddd" data-ddd-line="2" style="overflow-wrap: break-word;">Trường Đại học Cần thơ thông báo chiêu sinh sinh viên vào học tại trường với tất cả nhóm ngành . </span>
    		</div>
    	</div>
    </a></li>
  </ul>
</div>
<div class="py-5">
	<div class="container">
		<ul class="list-group list-group-flush">
			<li class="list-group-item">Tin tức liên quan</li>
			<li class="list-group-item">
				<div class="row" style="width: 100%; height: 90px;">
    		<div class="col-md-2" style="text-align: center;"><img src="../images/tin-tuc-Cantho.png" alt="Tuyển sinh Cần thơ" style="width: 100px; height: 90px;"></div>
    		<div class="col-md-10">
    			<h4>Loạt trường ra tự chủ</h4>
    			<span class="ddd" data-ddd-line="2" style="overflow-wrap: break-word;">Trường Đại học Cần thơ thông báo chiêu sinh sinh viên vào học tại trường với tất cả nhóm ngành . </span>
    		</div>
    	</div>
			</li>
		</ul>
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