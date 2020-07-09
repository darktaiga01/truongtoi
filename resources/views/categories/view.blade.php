@extends('layouts.layout')

@section('content')

<div class="py-5 bg-dark">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-light">
          <span>Category</span>
          <h3>Sports</h3>
          <p>Category description here.. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam error eius quo, officiis non maxime quos reiciendis perferendis doloremque maiores!</p>
        </div>
      </div>
    </div>
  </div>

  {{-- bài viét --}}
  <div class="site-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="entry2 card shadow-sm p-3 mb-5 bg-white rounded">
            <a href="single.html"><img src="https://colorlib.com/preview/theme/miniblog/images/img_1.jpg" alt="Image" class="img-fluid rounded"></a>
            <div class="excerpt">
            <span class="post-category text-white bg-secondary mb-3">Politics</span>

            <h2><a href="single.html">The AI magically removes moving objects from videos.</a></h2>
            
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta beatae quia porro id est.</p>
              <p><a class="btn btn-dark" href="#">Read More</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="entry2 card shadow-sm p-3 mb-5 bg-white rounded">
            <a href="single.html"><img src="https://colorlib.com/preview/theme/miniblog/images/img_1.jpg" alt="Image" class="img-fluid rounded"></a>
            <div class="excerpt">
            <span class="post-category text-white bg-success mb-3">Nature</span>

            <h2><a href="single.html">The AI magically removes moving objects from videos.</a></h2>
            
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta beatae quia porro id est.</p>
              <p><a class="btn btn-dark" href="#">Read More</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="entry2 card shadow-sm p-3 mb-5 bg-white rounded">
            <a href="single.html"><img src="https://colorlib.com/preview/theme/miniblog/images/img_1.jpg" alt="Image" class="img-fluid rounded"></a>
            <div class="excerpt">
            <span class="post-category text-white bg-warning mb-3">Travel</span>

            <h2><a href="single.html">The AI magically removes moving objects from videos.</a></h2>
            
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta beatae quia porro id est.</p>
              <p><a class="btn btn-dark" href="#">Read More</a></p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mb-4">
            <div class="entry2 card shadow-sm p-3 mb-5 bg-white rounded">
              <a href="single.html"><img src="https://colorlib.com/preview/theme/miniblog/images/img_1.jpg" alt="Image" class="img-fluid rounded"></a>
              <div class="excerpt">
              <span class="post-category text-white bg-warning mb-3">Travel</span>
  
              <h2><a href="single.html">The AI magically removes moving objects from videos.</a></h2>
              
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta beatae quia porro id est.</p>
                <p><a class="btn btn-dark" href="#">Read More</a></p>
              </div>
            </div>
          </div>
    </div>
  </div>
@endsection