@extends('layouts.default')
@section('title','ELITE GENERATION - REGISTER')

@section('content')

  <div class="section">
    <div class="container">
      <div class="row">
        <div class="inner-section">
          <h2 class="title-section">Đăng ký nhận sách<br/>Kiến tạo thế hệ Việt Nam Ưu Việt</h2>
          <div class="wrap-form-content clearfix">
            <div class="right">
              <div class="wrap-form">
                <p class="note">Bạn vui lòng hoàn tất bản thông tin dưới đây, chúng tôi sẽ liên lạc lại với bạn trong 24 giờ tới.</p>
                
                <form id="testfile" method="POST" action="">
                  {!!Form::token()!!}
                	<input type="text" name="fullname" class="form-control" placeholder="Fullname">
                  <input type="text" name="phone" class="form-control" placeholder="phone">
                	<input type="submit" class="btn-submit" value="dang ky">
                </form>
                  <!--WIDGET-->
                  <script type="text/javascript" src="{!!asset('public/assets/dms-analytics-elite.js')!!}"></script>
                  <script type="text/javascript">
                      _swga.base_url_post = 'http://marketingtool.ilavietnam.edu.vn';
                      _swga.init("SW-000016", "testfile", "default");
                      _swga.loadForm({
                          fullname: 'fullname',
                          phone: 'phone',
                      });
                  </script>
                    <!--WIDGET-->
              </div>
            </div>
          </div>  <!-- end wrap-form-content -->
        </div>
      </div>
    </div>
  </div>


@stop

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
      $('#testfile').validate({
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
          // console.log('test');
        }
      })
    })
  </script>


@stop
