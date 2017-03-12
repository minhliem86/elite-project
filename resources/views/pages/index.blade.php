@extends('layouts.default')

@section('content')
  <div class="header">
    <div class="container">
      <div class="row">
        <div class="inner-header">
          <a href="#"><img src="{!!asset('public/assets/frontend')!!}/images/banner.png" class="img-responsive" alt="ELITE GENERATION"></a>
        </div>
      </div>
    </div>
  </div>  <!-- end header -->

  <div class="navigation-bar">
    <div class="container">
      <div class="row">
        <div class="inner-navbar">
          <div class="navbar-header">
            <a href="#" class="navbar-brand">ELITE GENERATION</a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="list-nav">
              <li><a class="archor" href="#hanhtrinh">ELITE GEN</a></li>
              <li><a class="archor" href="#johnVu">BOOK - JOHN VŨ</a></li>
              <li><a class="archor" href="#event">NEWS - EVENTS</a></li>
              <li><a href="">LIÊN HỆ</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>  <!-- end navigation bar -->

  <div class="section section01" id="hanhtrinh">
    <div class="container">
      <div class="row">
        <div class="inner-section">
          <h2 class="title-section">“Hành trình<br/>Kiến tạo thế hệ Việt Nam Ưu Việt”</h2>
          <p class="desc-section">Với kim chỉ nam <b>“Học viên là mối quan tâm duy nhất và lớn nhất”</b> trong mọi hoạt động, ILA sẽ hết lòng vì sứ mệnh chia sẻ, nuôi dưỡng những giá trị tốt đẹp nhất trong hành trình chinh phục tiếng Anh của từng học viên trong thế kỷ 21. Đây là hành trình ý nghĩa thể hiện sự đam mê gắn kết, thấu hiểu và quan tâm của ILA dành cho hàng trăm ngàn học viên đang khao khát vươn tới một tương lai tốt đẹp hơn thông qua việc xuất sắc Tiếng Anh và 6 chìa khóa vàng mở cửa thành công. Thế hệ trẻ Việt Nam sẽ tự tin và đường hoàng sánh vai các tài năng trẻ thế giới như những công dân toàn cầu ưu tú.</p>
          <div class="wrap-video">

          </div>
        </div>
      </div>
    </div>
  </div>  <!-- end hanhtrinh -->

  <div class="section section02" id="chuongtrinh">
    <div class="container">
      <div class="row">
        <div class="inner-section">
          <h2 class="title-section">Chuỗi 5 Chương trình hành Động</h2>
          <img src="{!!asset('public/assets/frontend')!!}/images/banner-apdung.png" class="img-responsive img-banner-apdung" alt="Chuong trinh">
          <div class="wrap-content-section02">
            <p class="desc-section">
              Chính thức áp dụng phương pháp Tư Duy Thế Kỷ 21 trong giảng dạy tại 31 trung tâm của ILA cho chương trình Tiếng Anh Trẻ Em, Tiếng Anh Người Lớn, Tiếng Anh dành cho doanh nghiệp. Học viên trở thành trung tâm chủ động tiếp cận nguồn kiến thức, nâng cao Tiếng Anh và 6 kỹ năng mềm để thành công vượt trội trong cuộc sống: Communication - Kỹ năng giao tiếp, Collaboration - Kỹ năng hợp tác, Creativity - Khả năng sáng tạo, Critical thinking - Tư duy phản biện, Digital literacy - Kiến thức công nghệ, Self-reflection - Khả năng tự hoàn thiện bản thân.
            </p>
            <img src="{!!asset('public/assets/frontend')!!}/images/map.png" class="img-responsive img-map" alt="">
            <p class="desc-section">Môi trường học thế kỷ 21 của ILA là sự kết hợp hoàn hảo của công nghệ hiện đại, mô hình lớp học kiểu mới cùng phương pháp học phát triển tư duy mang đến cho học viên những trải nghiệm học tập giá trị giúp thay đổi cuộc sống.</p>
          </div>

        </div>
      </div>
    </div>
  </div>  <!-- end chuong trinh -->

  <div class="section section03" id="johnVu">
    <div class="container">
      <div class="row">
        <div class="inner-section">
          <div class="wrap-top-content clearfix">
            <img src="{!!asset('public/assets/frontend')!!}/images/John-Vu.png" class="img-responsive hidden-sm hidden-xs img-JohnVu" alt="John Vũ">
              <p class="num">#2</p>
              <h3 class="title-John">Giáo sư John Vũ<br/>Niềm tự hào của người Việt Nam</h3>
              <img src="{!!asset('public/assets/frontend')!!}/images/John-Vu.png" class="img-responsive visible-sm visible-xs img-JohnVu-mobile img-JohnVu" alt="John Vũ">
              <p class="desc-section">Giáo sư John Vũ – Nguyên Phong là nhà khoa học nổi tiếng ở Mỹ, đứng trong Top 10 người sáng tạo nhất thế giới (mà đứng đầu là Bill Gates và Steve Jobs). Giáo sư John Vũ cũng là một người rất quan tâm đến khoa học công nghệ, với trên 10.000 bài viết đã được đăng trên blog Science-Technology.</p>
              <div class="wrap-btn">
                <a href="#" class="btn-readmore">Tìm hiểu thêm</a>
              </div>

          </div>
          <div class="wrap-bottom-content clearfix">
            <div class="left-bottom clearfix">
              <div class="wrap-img">
                <img src="{!!asset('public/assets/frontend')!!}/images/book-small.png" class="img-responsive" alt="">
              </div>
              <div class="info">
                <h4 class="title-bottom">Ra mắt sách<br/>“Kiên tạo thế hệ Việt Nam ưu việt”</h4>
                <img src="{!!asset('public/assets/frontend')!!}/images/book-small.png" class="img-responsive img-mobile visible-sm visible-xs" alt="">
                <p class="desc-book">Đây là cuốn sách dành cho các bạn trẻ<span> Việt Nam trên con đường hoàn thiện bản thân</span><span> để trở thành thế hệ Việt Nam ưu việt trong thế kỷ 21.........</span></p>
                <div class="wrap-btn">
                  <a href="#" class="btn-readmore">Tìm hiểu thêm</a>
                </div>

              </div>
            </div>
            <div class="right-bottom">
              <h4 class="title-bottom">Đăng ký ngay để nhận sách<br/>( Số lượng có hạn)</h4>
              <p class="dieukien">ĐIỀU KIỆN:</p>
              <ul class="list-dieukien">
                <li>Đăng ký khóa học tại ILA trước 30/3/2017.</li>
                <li>Là học viên đang học tại ILA.</li>
              </ul>
              <div class="wrap-btn">
                <a href="#" class="btn-readmore">Đăng Ký Ngay</a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  <!-- end johnvu -->

  <div class="section section04" id="event">
    <div class="container">
      <div class="row">
        <div class="inner-section">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-4">
                <div class="each-event">
                  <h3 class="title-event"><a href="#">#3 - 5 Học Bổng Danh Giá <br/>
                    Trị Giá 500 Triệu Đồng</a></h3>
                  <a href="#">
                    <img src="{!!asset('public/assets/frontend')!!}/images/even.png" class="img-responsive" alt="">
                  </a>
                  <div class="wrap-desc">
                    <p><a href="#">Lần đầu tiên công bố học bổng danh giá gồm 5 học bổng, mỗi học bổng trị giá 500 triệu đồng cho 5 học viên đầu tiên giành được học bổng toàn phần của Harvard, Stanford, Massachusetts Institute of Technology (MIT), University of California at Berkeley, University of Cambridge trước tháng 1/2022.</a></p>
                    <a href="#" class="btn-more"></a>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="each-event">
                  <h3 class="title-event"><a href="#">#4 - Elite Champion 2017</a></h3>
                  <a href="#">
                    <img src="{!!asset('public/assets/frontend')!!}/images/even.png" class="img-responsive" alt="">
                  </a>
                  <div class="wrap-desc">
                    <p><a href="#">Lần đầu tiên kiến tạo sân chơi Tiếng Anh thế kỷ 21 thông qua việc: Tổ chức cuộc thi “ILA ELITE CHAMPION 2017” từ tháng 5/2017 đến tháng 8/2017 với nội dung thi Tiếng Anh độc đáo, Ban Giám Khảo uy tín gồm Forbes Việt Nam, National Geographic và Toastmaster với giải thưởng giá trị cho 3 tài năng đứng đầu cuộc thi. </a></p>
                    <a href="#" class="btn-more"></a>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="each-event">
                  <h3 class="title-event"><a href="#">#5 - LA Amazing Summer</a></h3>
                  <a href="#">
                    <img src="{!!asset('public/assets/frontend')!!}/images/even.png" class="img-responsive" alt="">
                  </a>
                  <div class="wrap-desc">
                    <p><a href="#">Khởi động chương trình ILA AMAZING SUMMER 2017 với việc trao tặng cuốn sách “7 Thói Quen Của Thế Hệ Ưu Việt Nhí” của tác giả nổi tiếng thế giới Sean Covey cho 10.000 phụ huynh và học sinh tham gia chương trình hè 2017 của ILA từ 15/4/2017.</a></p>
                    <a href="#" class="btn-more"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- end event -->

  @include('layouts.footer')
@endsection

@section('script')
<script type="text/javascript">
$(document).ready(function(){
  $('.each-event').matchHeight();

  // NAVIGATION MENU
  $('.list-nav li a').click(function(){
    if($(this).hasClass('archor')){
      var id = $(this).attr('href');
      $('html, body').animate({scrollTop: $(id).offset().top}, 2000)
      return false;
    }
  })
})
</script>
@endsection
