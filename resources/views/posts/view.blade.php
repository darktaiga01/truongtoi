@extends('layouts.layout')

@section('content')
   
    <header class="masthead" style="background-image: url('{{ $post->feature_img }}')">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <div class="post-heading">
                <h1 class="text-white">{{ $post->title }} </h1>
                <span class="meta text-white">Posted {{ $post->created_at }}</span>
              </div>
            </div>
          </div>
        </div>
      </header>
    
      <!-- Post Content -->
      <article>
        <div class="container" style="margin-top: 25px;">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              {!! $post->body !!}
            </div>
          </div>
        </div>
      </article>
    
      <hr>
@endsection