@extends('layouts.layout')

@section('content')
   
    <header class="masthead" style="background-image: url('{{ $post->feature_img }}')">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 mx-auto">
              <div class="post-heading">
                <h1 class="text-white" style="color: white; text-shadow: 2px 2px 4px #000000;"><strong>{{ $post->title }} </strong></h1>
                
              </div>
            </div>
          </div>
        </div>
      </header>
      <div class="w-100 p-3" style="background-color: #72C2AB;">
      <div class="container">
        <i class="fa fa-calendar-o text-light" aria-hidden="true"></i><span class="meta text-light">Posted {{ $post->created_at }}</span> &emsp;
        <i class="fa fa-graduation-cap text-light" aria-hidden="true"></i><span class="meta text-light">Nhóm ngành: {{ $post->category->name }}</span>
      </div>
    </div>

      <!-- Post Content -->
      <div class="bg-light">
      <article>
        <div class="container" style="margin-top: 100px;">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              {!! $post->body !!}
            </div>
          </div>
        </div>
      </article>
    </div>
    </div>
      <hr>
@endsection