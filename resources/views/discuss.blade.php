@extends('layouts.layout')

@section('content')

<div class="container">
  <h4>Hãy cùng chia sẻ những kinh nghiệm chọn trường và những thắc mắc  của bạn nhé!</h4>            
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>Mới nhất</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <img src="../images/tin-tuc-UIT.jpg" style="width: 100px; height: 100px;">
        </td>
        <td>
          <div>
            <h6>Trâm Cute</h6>
            <p>Ngày đăng: 10/7/2020 </p>
          </div>
          <span>Tôi đã chọn Công nghệ thông tin và tôi thấy đây là quyết định đúng đắn.</span>
        </td>
        <td class="td-bottom">
          <a href="#">Trả lời</a>
        </td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
</div>
@endsection   