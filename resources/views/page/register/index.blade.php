@extends('master')
@section('content')
<section>
    <div class="container">
        <div class="row pages-content">
            <div class="col-lg-12 col-md-12 col-sm-12 left-slider-bar">
                <ol class="breadcrumb">
                  <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
                  <li class="active">Thông tin cá nhân</li>
                </ol>
                    <div class="panel panel-success page-register">
                  <!-- Default panel contents -->
                  <div class="panel-heading"><h3>Tạo tài khoản khách hàng mới</h3></div>
                  <div class="panel-body">
                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err )
                            <ul><li>{{$err}}</li></ul><br/>
                            @endforeach
                        </div>
                    @endif
                    <form action="{{ route('postRegister') }}" method="post">
                      @csrf
                        {{-- <input type="hidden" name="_toke" value=""> --}}
                        <div class="col-lg-7 col-md-6 col-sm-12">
                            <div class="form-horizontal clearfix">
                              <div class="form-group">
                                <label class="col-sm-3 control-label">Tên đăng nhập</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" name="username" placeholder="Tên đăng nhập">
                                  {{-- <span class="help-block">Tên đăng nhập không để trống !</span> --}}
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-3 control-label">Mật khẩu</label>
                                <div class="col-sm-9">
                                  <input type="password" class="form-control" name="password" placeholder="Mật khẩu">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-3 control-label">Nhập lại mật khẩu</label>
                                <div class="col-sm-9">
                                  <input type="password" class="form-control" name="re_password" placeholder="Nhập lại mật khẩu">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" name="email" placeholder="Email">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-3 control-label">Tên thật</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" name="name" placeholder="Tên Thật">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-3 control-label">Địa chỉ</label>
                                <div class="col-sm-9">
                                  <textarea class="form-control" name="address" cols="55"></textarea>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-3 control-label">Điện thoại</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" name="phone" placeholder="Điện thoại">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-3 control-label hidden-xs">&nbsp;</label>
                                <div class="col-sm-9">
                                  <label><input type="checkbox" /> *Tôi đã đọc và đồng ý với <a href="#">chính sách</a> của Dailyvita</label>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                  <button type="submit" class="btn btn-primary">Đăng ký</button>
                                </div>
                              </div>
                            </div>
                        </div>
                    </form>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <div class="box-login-label clearfix">
                            <div class="box-login-level">
                                <div class="clearfix">
                                    <p>Bạn có thể đăng nhập bằng tài khoản</p>
                                    <div class="logo-social">
                                    <a href="/user/sso?service=facebook" class="logo-fb"></a>
                                    <a href="/user/sso?service=google_oauth" class="logo-google"></a>
                                    </div>
                                </div>
                                <div class="clearfix">
                                        Bạn là thành viên nhưng quên mật khẩu? Hãy yêu cầu hệ thống <a href="#">gửi lại mật khẩu mới.</a>
                                    </div> 
                            </div>
                        </div>
                    </div>
                  </div>
                </div>  
            </form>
            </div>
         </div>
            
    </div>
</section>
@endsection