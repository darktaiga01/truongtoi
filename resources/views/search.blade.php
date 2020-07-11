@extends('layouts.layout')

@section('content')
<div class="jumbotron"
		style="background: url({{ asset('images/1.jpg') }}) no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; margin-top: 76px;">
		<h1 class="display-3" style="text-align: center; margin-bottom: 10px">Kết quả tra cứu </h1>
	</div>

	<div class="container" style="margin-top: 50px;">



		<div class="row">
			<div class="col-4">
				<div class="box-search">
				<div class="card">
					<div class="card-header">
						Tìm kiếm nâng cao
					</div>
					<div class="card-body">
						<form action = "{{ route('advancedSearch') }}" method = 'get'>
							<label for="category_id">Khối ngành</label>
							<select class="form-control" id="category_id" name="category_id">
								@foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
							</select>
							<label for="location_id">Vị trí</label>
							<select class="form-control" id="location_id" name="location_id">
								@foreach ($locations as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
							</select>
							<div class="form-group">
								<label for="avg_mark">Average Mark:</label>
								<input type="text" class="form-control" id="avg_mark" placeholder="Enter Mark" name="avg_mark">
							</div>
							<div class="form-group">
								<label for="title">Title:</label>
								<input type="text" class="form-control" id="title" placeholder="Enter Title" name="title">
							</div>
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