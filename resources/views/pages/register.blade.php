@extends('layouts.default')
@section('title','ELITE GENERATION - REGISTER')

@section('content')
  <div class="section" id="giaosu">
    <div class="container">
      <div class="row">
        <div class="inner-section">
           <div class="top-giaosu clearfix">
             <div class="left-logo">
               <a href="{!!route('homepage')!!}"> <img src="{!!asset('public/assets/frontend')!!}/images/logo.png" class="img-responsive" alt=""></a>
             </div>
             <div class="right-logo">
               <h2 class="title">Giáo sư John Vũ<br/>Niềm tự hào của người Việt Nam</h2>
             </div>
           </div>  <!-- end top-giaosu-->
           <div class="bottom-giaosu clearfix">
             <img src="{!!asset('public/assets/frontend')!!}/images/John-Vu.png" class="img-responsive img-JohnVu" alt="JOHN VŨ">
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
              <p class="imp">Lần đầu tiên ra mắt ấn phẩm xuất bản đặc biệt của <span>Giáo Sư John Vũ “Kiến tạo Thế Hệ Việt Nam Ưu Việt”,</span> <span>Tiếng Anh và 6 chìa khóa vàng</span></p>
              <img src="{!!asset('public/assets/frontend')!!}/images/book-large.png" class="img-responsive img-book visible-sm visible-xs" alt="Book John Vũ">

              <p class="desc-book">
                Đây là cuốn sách dành cho các bạn trẻ Việt Nam trên con đường hoàn thiện bản thân, nâng cao tiềm năng, năng lực để trở thành thế hệ Việt Nam ưu việt trong thế kỷ 21. Nội dung trong sách được tuyển chọn từ các bài viết của giáo sư John Vũ chia sẻ với thanh niên Việt Nam. Quyển sách “Kiến tạo Thế Hệ Việt Nam Ưu Việt” của Giáo Sư John Vũ sẽ được phát hành rộng rãi vào ngày 14.3.2017 tại các nhà sách trên toàn quốc; 10.000 ấn bản đặc biệt sẽ được dành tặng riêng cho học viên của ILA, ưu tiên cho các học viên đăng ký nhận sách trước ngày 30/3
              </p>

              <p class="dieukien">Điều kiện nhận sách</p>
              <ul class="list-dieukien">
                <li>Đăng ký khóa học tại ILA trước 30/3/2017.</li>
                <li>Là học viên đang học tại ILA</li>
              </ul>

              <img src="{!!asset('public/assets/frontend')!!}/images/book-large.png" class="img-responsive img-book hidden-sm hidden-xs" alt="Book John Vũ">

            </div>
            <div class="right">
              <div class="wrap-form">
                <p class="note">Bạn vui lòng hoàn tất bản thông tin dưới đây, chúng tôi sẽ liên lạc lại với bạn trong 24 giờ tới.</p>
                <form action="{!!route('postRegisterBook')!!}" class="form_book" id="form_landing" method="POST">
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
                    {!!Form::select('id_city',[''=>'Vui lòng chọn thành phố'] + $data_city, old('id_city'), ['class'=>'form-control','id'=>'id_city'] )!!}
                  </div>
                  <div class="form-group" >
                    <label for="id_center">Chọn trung tâm ILA</label>
                    <div id="center-load">
                      <select name="id_center" id="id_center" class="form-control">
                        <option value="">--- Trung tâm ---</option>
                      </select>
                    </div>
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
                    <div id="error_study_id"></div>
                  </div>
                  <div class="form-group">
                    <label for="message">Đặt câu hỏi để nhận được tư vấn</label>
                    <textarea name="message" id="message" class="form-control"></textarea>
                  </div>
                  <div class="wrap-btn">
                    <input type="submit" class="btn-submit" value="Đăng ký">
                  </div>
                </form>
              </div>
            </div>
          </div>  <!-- end wrap-form-content -->
        </div>
      </div>
    </div>
  </div>


  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="inner-footer">
          <ul class="list-nav nav-footer">
            <li><a href="{!!route('homepage')!!}">ELITE GENERATION</a></li>
            <li><a href="{!!route('homepage')!!}">SÁCH CỦA JOHN VŨ</a></li>
            <li><a href="{!!route('homepage')!!}">TIN TỨC - SỰ KIỆN</a></li>
            <li><a href="{!!route('registerBook')!!}">LIÊN HỆ</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>  <!-- end footer -->
@endsection

@section('script')

  <script type="text/javascript">
    $(document).ready(function(){
      $('#id_center').prop('disabled',true);
      $('#id_city').on('change',function(){
        var id_city = $(this).val();
        console.log(id_city);
        $.ajax({
          url: "{!!route('ajaxCenter')!!}",
          type: 'POST',
          data:{id:id_city, _token: $('meta[name="csrf"]').attr('content')},
          success:function(data){
            $('#id_center').prop('disabled',false);
            $('#center-load').empty();
            $('#center-load').append(data.rs);
          }
        })
      })


    })
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
      // VALIDATION
      $('#form_landing').validate({
        errorElement: "span",
        errorPlacement: function(error, element) {
            //Custom position: first name
            if (element.attr("name") == "study_ila" ) {
                $("#error_study_id").text($(error).html());
            }else{
               element.after(error);
            }
        },
        rules: {
          fullname: "required",
          email: {required: true, email: true},
          phone: { required: true, digits: true, minlength: 10, maxlength: 11 },
          id_city: 'required',
          id_center: 'required',
          study_ila: 'required',
        },
        messages: {
          fullname: "Vui lòng điền vào vị trí này",
          email: {
            required: "Vui lòng điền email của bạn",
            email: "Email không hợp lệ"
          },
          phone:{
            required: "Vui lòng điền số điện thoại di động của bạn",
            digits: "Vui lòng điền số điện thoại di động của bạn",
            minlength: "Vui lòng điền số điện thoại di động",
          },
          id_city:"Vui lòng chọn Thành phố",
          id_center: "Vui lòng chọn trung tâm",
          study_ila: "Vui lòng chọn 1 mục bên trên"
        
        },
        submitHandler: function (form) {
          _swga.postLead();
        }
      })
    })
  </script>
  <!--WIDGET-->
  <script type="text/javascript" src="{!!asset('public/assets/dms-analytics-elite.js')!!}"></script>
  <script type="text/javascript">
      _swga.base_url_post = 'http://marketingtool.ilavietnam.edu.vn';
      _swga.init('SW-000016', "form_landing", "manual");
      _swga.loadForm({
          fullname: 'fullname',
          phone: 'phone',
          email: 'email',
          id_city: 'id_city',
          id_center: 'id_center',
          // note: 'message',
      });
  </script>
    <!--WIDGET-->

@endsection
