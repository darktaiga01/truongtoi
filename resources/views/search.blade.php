@extends('layouts.layout')

@section('content')
<div class="jumbotron"
		style="background: url(1.jpg) no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
		<h1 class="display-3" style="text-align: center; margin-bottom: 10px">Kết quả tra cứu </h1>
	</div>

	<div class="container">



		<div class="row">
			<div class="col-4">
				<div class="box-search">
				<div class="card">
					<div class="card-header">
						Tuỳ chọn
					</div>
					<div class="card-body">
						<form>
							<label for="location">Location</label>
							<select class="form-control" id="location">
								<option>Default select</option>
							</select>
							<label for="location">Location</label>
							<select class="form-control" id="location">
								<option>Default select</option>
							</select>
							<label for="location">Location</label>
							<select class="form-control" id="location">
								<option>Default select</option>
							</select>
							<br>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
				</div>
				</div>
			</div>
			<div class="col-8">

            @php
             $i = 0;    
            @endphp
            @foreach ($posts as $post)

				<div class="card">
					<div class="box-info">
						<div class="box-info-image">
							<img
								src="{{ $post->feature_img }}">
						</div>
						<div class="box-info-detail">
							<a href="post/{{ $post->id }}"><p class="h5">{{ $post->title }}</p></a>
							<p>Địa chỉ: dashdashkdask</p>
							<p>Mức học phí : 30000000</p>
							<p>Đánh giá </p>
						</div>
					</div>
                </div>
                
            @endforeach
				

				

				

				
			</div>
		</div>
	</div>

@endsection