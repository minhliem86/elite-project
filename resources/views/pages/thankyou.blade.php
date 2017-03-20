@extends('layouts.default')

@section('content')
  <div class="header">
    <div class="container">
      <div class="row">
        <div class="inner-header">
          <div class="wrap-thankpage">
              <a href="{!!route('homepage')!!}"><img src="{!!asset('public/assets/frontend/images/slider/Beyond_Banner_04.jpg')!!}" class="img-responsive" alt="ELITE GENERATION"></a>
              <div class="thankpage">
                <p class="big">Bạn đã đăng ký nhận sách "Kiến tạo thế hệ Việt Nam Ưu Việt" thành công.</p>
                <p class="small">Nhân viên ILA sẽ liên hệ với bạn trong thời gian sớm nhất</p>
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
            <li><a href="http://ilavietnam.edu.vn/elite-generation/dang-ky?utm_campaign=Elite+Book&utm_medium=statis&utm_source=Website">SÁCH CỦA JOHN VŨ</a></li>
            <li><a href="{!!route('homepage')!!}">TIN TỨC - SỰ KIỆN </a></li>
            <li><a href="http://ilavietnam.edu.vn/elite-generation/dang-ky?utm_campaign=Elite+Book&utm_medium=statis&utm_source=Website">LIÊN HỆ</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>  <!-- end footer -->

@endsection

@section('script')

@endsection
