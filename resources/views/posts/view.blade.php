@extends('layouts.layout')
@section('title')
    TruongToi - {{ $post->title }}
@endsection
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
        <i class="fa fa-graduation-cap text-light" aria-hidden="true"></i><span class="meta text-light">Chuyên mục: {{ $post->category->name }}</span>
      </div>
    </div>

      <!-- Post Content -->
      <div class="bg-light">
      <article>
        <div class="container shadow p-3 mb-5 bg-white rounded" style="margin-top: 50px;">
          <div class="row" style="padding: 30px; padding-top: 50px; padding-bottom: 50px">
            <div class="col-lg-8 col-md-10 mx-auto">
              {!! $post->body !!}
            </div>
          </div>
        </div>
      </article>
      <div class="container shadow p-3 mb-5 bg-white rounded">
        <div id="disqus_thread"></div>
      </div>
    </div>
    </div>
    
    <script>
    
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://truongtui.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

      <hr>
@endsection