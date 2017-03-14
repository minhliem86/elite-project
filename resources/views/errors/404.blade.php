@extends('layouts.default')

@section('content')
  <div class="header">
    <div class="container">
      <div class="row">
        <div class="inner-header">
          <div class="wrap-thankpage">
              <a href="{!!route('homepage')!!}"><img src="{!!asset('public/assets/frontend')!!}/images/banner.png" class="img-responsive" alt="ELITE GENERATION"></a>
              <div class="thankpage">
                <p class="big">Trang bạn đang tìm kiếm hiện không có. </p>
                <p class="small">Vui lòng truy cập trang khác trên thanh menu.</p>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>  <!-- end header -->

  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="inner-footer">
          <ul class="list-nav nav-footer">
            <li><a href="{!!route('homepage')!!}">ELITE GENERATION</a></li>
            <li><a href="{!!route('homepage')!!}">SÁCH CỦA JOHN VŨ</a></li>
            <li><a href="{!!route('homepage')!!}">TIN TỨC - SỰ KIỆN </a></li>
            <li><a href="{!!route('registerBook')!!}">LIÊN HỆ</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>  <!-- end footer -->

@endsection

@section('script')

@endsection
