@extends('layouts.default')

@section('script')
<!--REVO-->
<link rel="stylesheet" href="{!!asset('public/assets/frontend/')!!}/js/revoslider/css/settings.css"/>
<script  src="{!!asset('public/assets/frontend/')!!}/js/revoslider/js/jquery.themepunch.plugins.min.js"></script>
<script src="{!!asset('public/assets/frontend/')!!}/js/revoslider/js/jquery.themepunch.revolution.min.js"></script>
<script>
  $(document).ready(function(){
    $('.wrap-banner .tp-banner').revolution({
        delay:5000,
        startwidth:1170,
        startheight:724,
        navigationType: 'none',
        navigationArrows: 'none'
    })
  })
</script>
@stop

@section('content')
<div class="header">
  <div class="container">
    <div class="row">
      <div class="inner-header">
        <div class="wrap-banner">
          <div class="tp-banner-container">
            <div class="tp-banner">
              <ul>
                  <li data-transition="boxslide" data-slotamount="7" data-masterspeed="500" data-link="{!!route('registerBook')!!}">
                      <!-- MAIN IMAGE -->
                      <img src="{!!asset('public/assets/frontend/images/slider-news/harvard.jpg')!!}"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                  </li>
                  <li data-transition="boxslide" data-slotamount="7" data-masterspeed="500" data-link="{!!route('registerBook')!!}">
                      <!-- MAIN IMAGE -->
                      <img src="{!!asset('public/assets/frontend/images/slider-news/MIT.jpg')!!}"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                  </li>
                  <li data-transition="boxslide" data-slotamount="7" data-masterspeed="500" data-link="{!!route('registerBook')!!}">
                      <!-- MAIN IMAGE -->
                      <img src="{!!asset('public/assets/frontend/images/slider-news/Standford.jpg')!!}"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                  </li>
                  <li data-transition="boxslide" data-slotamount="7" data-masterspeed="500" data-link="{!!route('registerBook')!!}">
                      <!-- MAIN IMAGE -->
                      <img src="{!!asset('public/assets/frontend/images/slider-news/University-of-California.jpg')!!}"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                  </li>
                  <li data-transition="boxslide" data-slotamount="7" data-masterspeed="500" data-link="{!!route('registerBook')!!}">
                      <!-- MAIN IMAGE -->
                      <img src="{!!asset('public/assets/frontend/images/slider-news/University-of-Cambridge.jpg')!!}"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                  </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>  <!-- end header -->

<div class="navigation-bar">
  <div class="container">
    <div class="row">
      <div class="inner-navbar">
        <div class="navbar-header">
          <!-- <a href="{!!route('homepage')!!}" class="navbar-brand">Tiên Phong kiến tạo<br/> thế hệ Việt Nam ưu việt</a> -->
          <a href="{!!route('homepage')!!}" class="navbar-brand"><img src="{!!asset('public/assets/frontend')!!}/images/text-mobile.png" class="img-responsive" style="max-width:190px" alt=""></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="main-navigation">
          <ul class="list-nav">
            <li><a href="{!!route('homepage')!!}">ELITE GENERATION</a></li>
            <li><a href="http://ilavietnam.edu.vn/elite-generation/dang-ky?utm_campaign=Elite+Book&utm_medium=statis&utm_source=Website">SÁCH CỦA JOHN VŨ</a></li>
            <li><a href="{!!route('homepage')!!}">TIN TỨC - SỰ KIỆN </a></li>
            <li><a href="http://ilavietnam.edu.vn/elite-generation/dang-ky?utm_campaign=Elite+Book&utm_medium=statis&utm_source=Website">LIÊN HỆ</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>  <!-- end navigation bar -->

<div class="section section06" id="news-detail">
  <div class="container">
    <div class="row">
      <div class="inner-section">
        <h2 class="title-section">5 học bổng, mỗi học bổng trị giá 500 triệu đồng dành cho <span>5 học viên đầu tiên giành được học bổng toàn phần của:</span> <span>Harvard, Stanford, Massachusetts Institute of Technology (MIT),</span> <span> University of California at Berkeley, University of Cambridge trước tháng 1/2022.</span></h2>
        <p class="desc-section">Từ nay đến tháng 1-2022, học viên nếu giành được học bổng toàn phần vào các trường đại học hàng đầu của thế giới như: Harvard, Stanford, Massachusetts Institute of Technology (MIT), University of California at Berkeley, University of Cambridge sẽ có cơ hội nhận học bổng ILA Elite trị giá 500 triệu đồng/suất. Giải thưởng lớn này chỉ dành cho 5 học viên đầu tiên của ILA có hồ sơ hợp lệ theo yêu cầu chương trình.</p>
        <p class="desc-section">Bên cạnh 5 suất học bổng lớn này, hành trình “Kiến tạo thế hệ Việt Nam ưu Việt” của ILA còn có nhiều nhiều hoạt động khác. Trong đó, nổi bật là việc áp dụng phương pháp “Tư duy thế kỷ 21” trong giảng dạy. Giáo trình của ILA sẽ xây dựng để đạt được song song hai mục đích, vừa nâng cao tiếng Anh, vừa trang bị 6 kỹ năng mềm để thành công vượt trội trong cuộc sống, bao gồm: kỹ năng giao tiếp, kỹ năng hợp tác, khả năng sáng tạo, tư duy phản biện, kiến thức công nghệ, khả năng tự hoàn thiện bản thân. ILA cũng sẽ là trung tâm Anh ngữ áp dụng bài thi Cambridge vào kỳ thi cuối khóa. </p>
        <p class="desc-section">Nhân lễ khởi động chương trình diễn ra sáng 14-3, ILA cũng đã trao tặng 10.000 ấn phẩm đặc biệt của giáo sư John Vũ “Kiến tạo thế hệ Việt Nam ưu Việt – tiếng Anh và 6 chìa khóa vàng” cho học viên. Cuốn sách có thể gọi là cẩm nang cho các bạn trẻ trên con đường hoàn thiện bản thân, nâng cao năng lực để có thể đáp ứng được yêu cầu từ phía xã hội trong thế kỷ 21. </p>
        <p class="desc-section">Nội dung trong sách được tuyển chọn từ các bài viết của giáo sư John Vũ trên Internet. Những bài viết này đã thu hút hàng triệu lượt xem vì tính thiết thực cao. <a href="{!!route('registerBook')!!}" class="read">Đăng ký nhận sách!</a></p>
      </div>
    </div>
  </div>
</div>  <!-- end hanhtrinh -->

<div class="footer">
  <div class="container">
    <div class="row">
      <div class="inner-footer">
        <ul class="list-nav nav-footer">
          <li><a href="{!!route('homepage')!!}">ELITE GENERATION</a></li>
          <li><a href="http://ilavietnam.edu.vn/elite-generation/dang-ky?utm_campaign=Elite+Book&utm_medium=statis&utm_source=Website">SÁCH CỦA JOHN VŨ</a></li>
          <li><a href="{!!route('homepage')!!}">TIN TỨC - SỰ KIỆN</a></li>
          <li><a href="http://ilavietnam.edu.vn/elite-generation/dang-ky?utm_campaign=Elite+Book&utm_medium=statis&utm_source=Website">LIÊN HỆ</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>  <!-- end footer -->
@stop
