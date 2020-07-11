@extends('layouts.layout')
@section('title','TruongToi - Tìm kiếm')
@section('content')
<div class="jumbotron"
		style="background: url({{ asset('images/1.jpg') }}) no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; margin-top: 76px;">
		<h1 class="display-3" style="text-align: center; margin-bottom: 10px">Kết quả tra cứu </h1>
	</div>

	<div class="container" style="margin-top: 50px;">



		<div class="row">
			<div class="col-3">
				<div class="box-search">
				<div class="card">
					<div class="card-header">
						Thanh tìm kiếm
					</div>
					<div class="card-body">
						<form action = "{{ route('search') }}" method = 'get'>
							<div class="form-group">
								<label for="keyword">Từ khoá:</label>
								<input type="text" class="form-control" id="query" placeholder="Enter Title" name="keyword">
							</div>
							<br>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
				</div>
				</div>
			</div>
			<div class="col-9">
				<div class="card">
					@foreach($universities as $university)
				<div class="row mt-3 wow fadeIn">
    					<!--Grid column-->
					<div class="col-lg-5 col-xl-4 mb-4">
						<!--Featured image-->
						<div class="view rounded z-depth-1" style="margin-left: 30px;">
							<a href="university/{{ $university->id }}" target="_blank">
							<img src="{{ $university->feature_img}}" class="img-fluid" alt="" style="width: 300px; height: 150px;">
						</a>
								<div class="mask rgba-white-slight"></div>
							
						</div>
					</div>
					<!--Grid column-->
				
					<!--Grid column-->
					<div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
						<a href="university/{{ $university->id }}" target="_blank">
						<h3 class="mb-3 font-weight-bold dark-grey-text">
							<strong>{{ $university->title}}</strong>
						</h3></a>
			<span class="post-category text-white bg-secondary mb-3">{{ $university->location->name }}</span>
			<span class="post-category text-white bg-danger mb-3">{{ $university->major->name }}</span>
			<span class="post-category text-white bg-info mb-3">Điểm TB: {{ $university->avg_mark }}</span>		
					</div>
					<!--Grid column-->
				
				  </div>
				<!--Grid row-->
				
				<hr class="mb-5">
				@endforeach
				@foreach($posts as $post)
				<div class="row mt-3 wow fadeIn">
    
					<?php $string = substr(strip_tags($post->body),0, 150); ?>
					<!--Grid column-->
					<div class="col-lg-5 col-xl-4 mb-4">
						<!--Featured image-->
						<div class="view rounded z-depth-1" style="margin-left: 30px;">
							<img src="{{ $post->feature_img}}" class="img-fluid" alt="" style="width: 300px; height: 150px;">
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
						</a>
					</div>
					<!--Grid column-->
				
				  </div>
				<!--Grid row-->
				
				<hr class="mb-5">
				@endforeach

			</div>


				

				

				
			</div>
		</div>
	</div>

@endsection