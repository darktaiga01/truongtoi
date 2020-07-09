<!DOCTYPE html>
<html>

<head>
  <title>Trường tôi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/styleNT.css') }}">

  <!-- <script src="https://kit.fontawesome.com/yourcode.js"></script> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script> --}}

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script>
    function logoutButton() {
    event.preventDefault();
    document.getElementById('logout-form').submit();
    }
  </script>

</head>

<body class="text-body">
  <nav class="navbar navbar-expand-lg navbar-light static-top" style="background-color: #038C65;">
    <div class="container">
      <a class="navbar-brand" href="#">Trường tôi</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
       <div class="collapse navbar-collapse" id="navbarSupportedContent menu">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('home')}}">Trang chủ<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
              Giới thiệu
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Giới thiệu trường</a>
              <a class="dropdown-item" href="#">Giới thiệu ngành</a>
              <!--<div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>-->
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Tin tức</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Thảo luận</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href='{{ route('aboutus') }}'>Về chúng tôi</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Đăng nhập') }}</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Đăng ký') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('user.dashboard') }}">Bảng điều khiển</a>

                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Đăng xuất') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
        </ul>
      </div>
    </div>
  </nav>

  {{-- Content is here --}}
  @yield('content')


    {{-- <div class="py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center d-md-flex align-items-center">
            <ul class="nav mx-md-auto d-flex justify-content-center">
              <li class="nav-item"> <a class="nav-link active" href="{{ route('home') }}">Trang chủ</a> </li>
              <li class="nav-item"> <a class="nav-link" href="#">Trường học</a> </li>
              <li class="nav-item"> <a class="nav-link" href="#">Bài viết</a> </li>
              <li class="nav-item"> <a class="nav-link" href="#">Về chúng tôi</a> </li>
            </ul>
            <div class="row">
              <div class="col-md-12 d-flex align-items-center justify-content-md-between justify-content-center my-2">
                <a href="#">
                  <i class="d-block fa fa-facebook-official text-muted fa-lg mx-2"></i>
                </a> <a href="#">
                  <i class="d-block fa fa-instagram text-muted fa-lg mx-2"></i>
                </a> <a href="#">
                  <i class="d-block fa fa-twitter text-muted fa-lg ml-2"></i>
                </a> </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p class="mt-2 mb-0">© All rights reserved</p>
          </div>
        </div>
      </div>
    </div> --}}

    <div class="site-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4">
            <h3 class="footer-heading mb-4">About Us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat reprehenderit magnam deleniti quasi saepe, consequatur atque sequi delectus dolore veritatis obcaecati quae, repellat eveniet omnis, voluptatem in. Soluta, eligendi, architecto.</p>
          </div>
          <div class="col-md-3 ml-auto">
            <!-- <h3 class="footer-heading mb-4">Navigation</h3> -->
            <ul class="list-unstyled float-left mr-5">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Advertise</a></li>
              <li><a href="#">Careers</a></li>
              <li><a href="#">Subscribes</a></li>
            </ul>
            <ul class="list-unstyled float-left">
              <li><a href="#">Travel</a></li>
              <li><a href="#">Lifestyle</a></li>
              <li><a href="#">Sports</a></li>
              <li><a href="#">Nature</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            

            <div>
              <h3 class="footer-heading mb-4">Connect With Us</h3>
              <p>
                <a href="#"><span class="icon-facebook pt-2 pr-2 pb-2 pl-0"></span></a>
                <a href="#"><span class="icon-twitter p-2"></span></a>
                <a href="#"><span class="icon-instagram p-2"></span></a>
                <a href="#"><span class="icon-rss p-2"></span></a>
                <a href="#"><span class="icon-envelope p-2"></span></a>
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy; <script>document.write(new Date().getFullYear());</script>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
          </div>
        </div>
      </div>
    </div>
<<<<<<< HEAD
    <script>
$(document).ready(function(){
  $(".dropdown-toggle").dropdown();
});
</script>
=======

>>>>>>> c822bea4f4337fb253f7a592f08fab7fad02c113
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"></script>
</body>

</html>