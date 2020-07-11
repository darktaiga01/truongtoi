@extends('layouts.layout')

@section('content')
{{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script> --}}

    <div class="div-member-info" style="margin-top: 76px;">
        <h1 class="display-3"
            style="text-align: center; margin-bottom: 10px; color:azure; text-shadow: 2px 2px 4px #000000;">
            <strong>THÔNG TIN THÀNH VIÊN</strong>
        </h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="box-control">
                    <div class="card">
                        <div class="card-header">
                            Bảng điều khiển
                        </div>
                        <div class="card-body">
                            <div class="avatar">
                                <img
                                    src="https://edu2review.com/upload/user-avatars/92244abbf1797c2e7ba73106e76a4765/ngoc-tan-dang-597073182-photo.jpg">
                            </div>
                            <div class="info">
                                <div class="username">Đặng Ngọc Tân</div>
                                <p class="font-italic">Joined at sometimes</p>
                            </div>
                            <!-- <dl>
                            <dd class="menu-list d-flex justify-content-center"></dd>                            </li>
                        </dl> -->
                            <ul class="list-group">
                                <li class="list-group-item"><i class="fa fa-address-book"></i><b>Thông tin tài khoản</b></li>
                                <li class="list-group-item"><i class="fa fa-address-book"></i><b>Thông tin tài khoản</b></li>
                                <li class="list-group-item"><i class="fa fa-address-book"></i><b>Thông tin tài khoản</b></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8">

                <div class="card box-info-member-detail">
                    <div class="box-info">
                        <table class="table">
                            <tr>
                                <td>
                                    <i class="fa fa-address-book" aria-hidden="true"></i>
                                    <b>Họ và tên: </b>
                                </td>
                                <td>Đặng Ngọc Tân</td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa fa-birthday-cake" aria-hidden="true"></i>
                                    <b>Ngày sinh: </b>
                                </td>
                                <td>21/01/2000</td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <b>Email: </b>
                                </td>
                                <td>dangngoctan2012@gmail.com</td>
                            </tr>
                        </table>
                        <button type="button" class="btn btn-info" style="float: right;">Edit</button>
                    </div>
                </div>
            </div>
        </div>

        @endsection