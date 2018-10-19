<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="
      #navigator-header">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="navigator-header">
        @php
            // dd(Session::get('cart'));
        @endphp
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ route('index') }}">Trang chủ</a></li>
        <li><a href="#">Giới thiệu</a></li>
        <li><a href="#">Tin tức</a></li>
        <li><a href="#">Hỏi đáp</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Liên hệ </a>
          <div class="dropdown-menu dropdown-menu-right" role="menu">
            <div class="form-contact">
                    <span class="popmenu-bullet"></span>
                    <div class="clearfix">
                            <div class="icon-support pull-left"><img src="{{ asset('bower_components/assets_frontend/images/icons/support.png') }}" /></div>
                            <div id="contentsupportfr">
                                <p><strong>Thời gian hỗ trợ: </strong></p>
                                <p class="mgleft">8h00 - 17h30 từ thứ 2 đến thứ 6, 8h - 12h00 thứ 7</p>
                                <p><strong>Ngoài giờ hành chính, Quý khách vui lòng liên hệ:</strong><p>
                                <p class="mgleft">Email: <a href="#">cskh@gmail.com </a></p>
                                <p class="mgleft">Hotline: <strong>0934537643</strong></p>
                                <p><strong>Đặt hàng qua điện thoại:</strong> 04 36321327</p>
                                <p class="mgleft"><a href="skype:dailyvita?chat"><i class="icon-skype"></i>
                                 dailyvita</a></p>
                                <p class="mgleft"><a href="http://facebook.com/daylivita.vn">
                                <i class="icon-facebook"></i> facebook.com/daylivita.vn</a></p>
                            </div>
                    </div><!--form-->                    
                </div>
          </div>
        </li>
      </ul>
      {{-- @dd(Session::get('cart'))    --}}
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{-- {{ route('register') }} --}}">Đăng ký</a></li>
        <li class="dropdown">
          <a href="{{-- {{ route('login') }} --}}">Đăng nhập </a>
        </li>
            @if(Session::has('cart'))
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="icon-cart"></span>
            <span class="message-count">
                    (@if(Session::has('cart')){{ count(Session::get('cart'))}} @else Không có sản phẩm nào @endif)
            </span>
          </a>
           
          <div class="dropdown-menu" role="menu">
            <div class="popmenu popup-cart">
                    <span class="popmenu-bullet"></span>
                    <div class="cart-list" id="cart-list">
                        <table class="table">

                            @foreach(Session::get('cart') as $checkout)

                          <tr>
                            <td><a class="img" href="#"><img src="{{ URL::to('/').'/uploads/images/'.$checkout['attributes']['image'] }}" alt="avatar" /></a>
                            </td>
                            <td width="45%"><a class="g-title" href="#">{{ $checkout->name }}</a>
                            </td>
                            <td width="15%">x {{ $checkout->quantity }}</td>
                            <td>{{ number_format($checkout->unit_price) }}</td>
                            <td><a href="{{ route('deleteCart') }}">X</a></td>
                          </tr>
                          @endforeach
                        </table>
                    </div><!--cart-list-->
                    <div class="popmenu-bottom clearfix">
                    <a href="{{ route('show') }}" class="pull-left">Thanh toán ngay <span class="glyphicon glyphicon-share-alt">
                    </span></a>
                        <span class="pull-right">Tổng tiền: <strong class="text-danger">{{ number_format(Session::get('subTotal')) }} vnđ</strong>
                        </span>
                    </div>
                </div>
           </div>
        </li>  
        @endif      
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-pull-leftuid -->
</nav>
<header>
    <div class="container">
        <div class="row header-pages">
            <div class="col-lg-3 col-md-3 col-xs-6 logo"><a href="{{ route('index') }}"><img src="{{ asset('bower_components/assets_frontend/images/logo-dailyvita.png') }}" />
            </a></div><!--Logo dailyvita-->
            <div class="col-lg-6 col-md-6 col-xs-12 process-order-block">
                <div class="process-order-left">
                <ul>
                    <li class="clearfix">
                        <div class="process-item">
                            <i class="icon-process icon-pr-order"></i>
                            <span>Đặt hàng</span>
                        </div>
                    </li>
                    <li class="clearfix">
                        <div class="process-item">
                            <i class="icon-process icon-pr-payment"></i>
                            <span>Thanh toán</span>
                        </div>
                    </li>
                    <li class="clearfix">
                        <div class="process-item">
                            <i class="icon-process icon-pr-usa"></i>
                            <span>Nhập hàng</span>
                        </div>
                    </li>
                    <li class="end clearfix">
                        <div class="process-item">
                            <i class="icon-process icon-pr-home"></i>
                            <span>Vận chuyển</span>
                        </div>
                    </li>                                        
                </ul>
            </div>            
            </div><!--Icon process-->
            <div class="col-lg-3 col-md-3 col-xs-6 support-wiget">
                <div class="support-block">
                    <div class="icon-phone">
                        <span>Hỗ trợ nhanh</span>
                        <div class="phone">
                            <a class="btn-support">0912.333.333<i class="caret text-info"></i></a>
                        </div>
                        <div class="popup-form form-contact">
                            <div class="clearfix">
                                <div class="icon-support pull-left eft"><img src="{{ asset('bower_components/assets_frontend/icons/support.png') }}" />
                                </div>
                                <div id="contentsupportfr">
                                    <p><strong>Thời gian hỗ trợ: </strong></p>
                                    <p class="mgleft">8h00 - 17h30 từ thứ 2 đến thứ 6, 8h - 12h00 thứ 7</p>
                                    <p><strong>Ngoài giờ hành chính, Quý khách vui lòng liên hệ:</strong><p>
                                    <p class="mgleft">Email: <a href="#">cskh@gmail.com </a></p>
                                    <p class="mgleft">Hotline: <strong>0934537643</strong></p>
                                    <p><strong>Đặt hàng qua điện thoại:</strong> 04 36321327</p>
                                    <p class="mgleft"><a href="skype:dailyvita?chat"><i class="icon-skype">
                                    </i> dailyvita</a></p>
                                    <p class="mgleft"><a href="http://facebook.com/daylivita.vn">
                                    <i class="icon-facebook"></i> facebook.com/daylivita.vn</a></p>
                                </div>
                            </div>
                         </div>
                    </div>
                </div>            
            </div><!--Support block-->                    
        </div>
    </div>
</header>
