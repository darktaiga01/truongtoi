@extends('layouts.layout')
@section('title','TruongTui - Tin tức, tuyển sinh')
@section('content')
<div class="container" style="margin-top: 76px;">
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
    @foreach($tuyensinh  as $ts)
    <li class="list-group-item">
    	
      <?php $string = substr(strip_tags($ts->body), strpos($ts->body, "<p>"), strpos($ts->body, "</p>")+4); ?>
    	<div class="row" style="width: 100%; height: 90px;">
    		<div class="col-md-2" style="text-align: center;"><img src="{{ $ts->feature_img}}"style="width: 150px; height: 90px;"></div>
    		<div class="col-md-10">
    			<a href="post/{{ $ts->id }}"><h4 class="text-dark font-weight-bold">{{ $ts->title }}</h4></a>
    			<span class="ddd" data-ddd-line="2" style="overflow-wrap: break-word;"> {!! $string !!} </span>
    		</div>
    	</div>
    
    </li>
    @endforeach
  </ul>
</div>
<div class="py-5">
	<div class="container">
		<ul class="list-group list-group-flush">
			<li class="list-group-item">Tin tức liên quan</li>
      @foreach($other  as $ot)
      <li class="list-group-item">
        
        <?php $string = substr(strip_tags($ot->body), strpos($ot->body, "<p>"), strpos($ot->body, "</p>")+4); ?>
        <div class="row" style="width: 100%; height: 90px;">
          <div class="col-md-2" style="text-align: center;"><img src="{{ $ot->feature_img}}"style="width: 150px; height: 90px;"></div>
          <div class="col-md-10">
            <a href="post/{{ $ot->id }}"><h4 class="text-dark font-weight-bold">{{ $ot->title }}</h4></a>
            <span class="ddd" data-ddd-line="2" style="overflow-wrap: break-word;"> {!! $string !!} </span>
          </div>
        </div>
      
      </li>
      @endforeach
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