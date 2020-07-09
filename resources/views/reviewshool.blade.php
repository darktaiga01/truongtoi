@extends('layouts.layout')

@section('content')
<div class="container">
  <br>
  <div class="card-columns">
    <div class="card bg-light">
      <div class="card-body" >
    <img class="card-img-top" src="../images/bach-khoa.jpg" alt="Bách khoa" style="width:100%">
    <br>
      <h4 class="card-title">Trường Đại học Bách Khoa TP.HCM</h4>
      <p class="card-text">Trường bao gồm những nhóm ngành công nghệ - kỹ thuật...</p>
      <a href="#" class="btn btn-primary">Xem nhiều hơn</a>
      </div>
    </div>
    <div class="card bg-light">
      <div class="card-body">
    <img class="card-img-top" src="../images/cong-nghe-thong-tin.jpg" alt="Công nghệ thông tin" style="width:100%"><br>
      <h4 class="card-title">Trường Đại học Công nghệ thông tin TP.HCM</h4>
      <p class="card-text">Trường bao gồm những ngành công nghệ thông tin...</p>
      <a href="#" class="btn btn-primary">Xem nhiều hơn</a>
      </div>
    </div>
    <div class="card bg-light">
      <div class="card-body">
    <img class="card-img-top" src="../images/luat.jpg" alt="Luật" style="width:100%"><br>
      <h4 class="card-title">Trường Đại học Luật TP.HCM</h4>
      <p class="card-text">Trường bao gồm những nhóm luật gì gì đó...</p>
      <a href="#" class="btn btn-primary">Xem nhiều hơn</a>
      </div>
    </div>
    <div class="card bg-light">
      <div class="card-body">
    <img class="card-img-top" src="../images/quoc-te.jpg" alt="Quốc tế" style="width:100%"><br>
      <h4 class="card-title">Trường Đại học Quốc tế TP.HCM</h4>
      <p class="card-text">Trường bao gồm những cái gì đó lên search</p>
      <a href="#" class="btn btn-primary">Xem nhiều hơn</a>
      </div>
    </div>
    <div class="card bg-light">
      <div class="card-body">
    <img class="card-img-top" src="../images/van-lang.jpg" alt="Văn Lang" style="width:100%"><br>
      <h4 class="card-title">Trường Đại học Văn Lang</h4>
      <p class="card-text">Trường bao gồm những xin thông tin</p>
      <a href="#" class="btn btn-primary">Xem nhiều hơn</a>
      </div>
    </div>
  </div>
  <nav aria-label="Page navigation example">
  <ul class="pagination" style="margin: auto;">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul></nav>
</div>

@endsection
