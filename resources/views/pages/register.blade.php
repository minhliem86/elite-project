@extends('layouts.default')
@section('title','ELITE GENERATION - REGISTER')

@section('content')
  <div class="section" id="giaosu">
    <div class="container">
      <div class="row">
        <div class="inner-section">
           <div class="top-giaosu clearfix">
             <div class="left-logo">
               <a href="#"> <img src="images/logo.png" class="img-responsive" alt=""></a>
             </div>
             <div class="right-logo">
               <h2 class="title">Giáo sư John Vũ<br/>Niềm tự hào của người Việt Nam</h2>
             </div>
           </div>  <!-- end top-giaosu-->
           <div class="bottom-giaosu clearfix">
             <img src="images/John-Vu.png" class="img-responsive img-JohnVu" alt="JOHN VŨ">
             <p class="text">Giáo sư John Vũ – Nguyên Phong là nhà khoa học nổi tiếng ở Mỹ, đứng trong Top 10 người sáng tạo nhất thế giới (mà đứng đầu là Bill Gates và Steve Jobs). Giáo sư John Vũ cũng là một người rất quan tâm đến khoa học công nghệ, với trên 10.000 bài viết đã được đăng trên blog Science-Technology.</p>
             <p class="text">Ông từng giữ vị trí Phó Chủ Tịch phụ trách tất cả vấn đề về kỹ thuật của tập đoàn Boeing (CMM/CMMI). Ông cũng là sáng lập viên của SPIN Seatle và quản lý tổ chức này từ 1996 tới 2003</p>
             <p class="text">Đặc biệt trong lĩnh vực giáo dục và đào tạo, Giáo sư John Vũ – Nguyên Phong vô cùng tâm huyết với nền giáo dục và phát triển tri thức của thế hệ trẻ Việt Nam – nguồn nhân lực chủ chốt về việc chọn lựa nghề nghiệp</p>
             <p class="text">và hướng đến những ngành tiềm năng. Và ông cũng là dịch giả - tác giả của nhiều tác phẩm nổi tiếng, sống với thời gian như Hành trình về phương Đông, Minh triết trong đời sống, bộ sách dành cho các bạn trẻ Khởi hành, Kết nối…</p>
           </div>  <!-- end bottom giaosu -->
        </div>
      </div>
    </div>
  </div>  <!-- end section giaosu -->

  <div class="section" id="form">
    <div class="container">
      <div class="row">
        <div class="inner-section">
          <h2 class="title-section">Đăng ký nhận sách<br/>Kiến tạo thế hệ Việt Nam Ưu Việt</h2>
          <div class="wrap-form-content clearfix">
            <div class="left">
              <p class="dieukien">Điều kiện nhận sách</p>
              <ul class="list-dieukien">
                <li>Đăng ký khóa học tại ILA trước 30/3/2017.</li>
                <li>Là học viên đang học tại ILA</li>
              </ul>

              <p class="desc-book">
                Đây là cuốn sách dành cho các bạn trẻ Việt Nam trên con đường hoàn thiện bản thân, nâng cao tiềm năng, năng lực để trở thành thế hệ Việt Nam ưu việt trong thế kỷ 21. Nội dung trong sách được tuyển chọn từ các bài viết của giáo sư John Vũ chia sẻ với thanh niên Việt Nam. Quyển sách “Kiến tạo Thế Hệ Việt Nam Ưu Việt” của Giáo Sư John Vũ sẽ được phát hành rộng rãi vào ngày 14.3.2017 tại các nhà sách trên toàn quốc; 10.000 ấn bản đặc biệt sẽ được dành tặng riêng cho học viên của ILA, ưu tiên cho các học viên đăng ký nhận sách trước ngày 30/3
              </p>

              <img src="images/book-large.png" class="img-responsive img-book" alt="Book John Vũ">

              <p class="imp">Lần đầu tiên ra mắt ấn phẩm xuất bản đặc biệt của <span>Giáo Sư John Vũ “Kiến tạo Thế Hệ Việt Nam Ưu Việt”,</span> <span>Tiếng Anh và 6 chìa khóa vàng</span></p>
            </div>
            <div class="right">
              <div class="wrap-form">
                <p class="note">Bạn vui lòng hoàn tất bản thông tin dưới đây, chúng tôi sẽ liên lạc lại với bạn trong 24 giờ tới.</p>
                <form action="" class="form_book" method="POST">
                  {!!Form::token()!!}
                  <div class="form-group">
                    <label for="fullname">Họ và tên</label>
                    <input type="text" name="fullname" id="fullname" class="form-control" value="{!!old('fullname')!!}">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email" value="{!!old('email')!!}">
                  </div>
                  <div class="form-group">
                    <label for="phone">Điện thoại</label>
                    <input type="text" class="form-control" name="phone" id="phone" value="{!!old('phone')!!}">
                  </div>
                  <div class="form-group">
                    <label for="id_city">Thành Phố</label>
                    <select name="id_city" id="id_city" class="form-control">
                      <option value="">--- Thành Phố ---</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="id_center">Chọn trung tâm ILA</label>
                    <select name="id_center" id="id_center" class="form-control">
                      <option value="">--- Trung tâm ---</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Bạn có đang là học viên ILA?</label>
                    <div class="inline-group">
                      <span class="inline">
                        <input type="radio" name="study_ila" id="yes"><label for="yes">Có</label>
                      </span>
                      <span class="inline">
                        <input type="radio" name="study_ila" id="no"><label for="no">Không</label>
                      </span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="message">Đặt câu hỏi để nhận được tư vấn</label>
                    <textarea name="message" id="message" class="form-control"></textarea>
                  </div>
                  <div class="wrap-btn">
                    <input type="submit" name="submit" value="Đăng ký">
                  </div>
                </form>
              </div>
            </div>
          </div>  <!-- end wrap-form-content -->
        </div>
      </div>
    </div>
  </div>


  @include('layouts.footer')
@endsection

@section('script')
  
@endsection
