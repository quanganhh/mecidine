<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Trang chủ - Dailyvita.vn</title>
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
<!--Requie CSS-->
<link href="{{ asset('bower_components/assets_frontend/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('bower_components/assets_frontend/css/sprite.css') }}" rel="stylesheet">
<link href="{{ asset('bower_components/assets_frontend/css/menu.css') }}" rel="stylesheet">
<link href="{{ asset('bower_components/assets_frontend/css/style.css')}}" rel="stylesheet">
<link href="{{ asset('bower_components/assets_frontend/css/animate.css')}}" rel="stylesheet">
<link href="{{ asset('bower_components/assets_frontend/css/responsive.css')}}" rel="stylesheet">
<link href="{{ asset('bower_components/assets_frontend/css/font-awesome.min.css')}}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/assets_frontend/css/jcarousel.responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/assets_frontend/css/cloudzoom.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/assets_frontend/css/checkout.css') }}" />
<!--Requie JS-->
<script src="{{ asset('bower_components/assets_frontend/js/jquery.min.js') }}"></script>
<script src="{{ asset('bower_components/assets_frontend/js/bootstrap.min.js') }}"></script>
{{-- <script src="{{ asset('bower_components/assets_frontend/js/slimscroll.js') }}"></script> --}}
<script type="text/javascript" src="{{ asset('bower_components/assets_frontend/js/jcarousel.responsive.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/assets_frontend/js/jquery.jcarousel.min.js') }}"></script>
<script src="{{ asset('bower_components/assets_frontend/js/style.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/assets_frontend/js/cloudzoom.js') }}"></script>

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
 @include('header')
   <div class="navigation-menu">
  <div class="container">
      <div class="row">
        <div class="col-lg-2 col-md-2 col-xs-4 main-menu">
              <div class="m-menu">
                  <select name="1" class="form-control">
                      <option>Chăm sóc da, tóc & móng</option>
                        <option>&nbsp;&nbsp;&nbsp;&nbsp;Nở ngực</option>
                        <option>&nbsp;&nbsp;&nbsp;&nbsp;Tóc & móng</option>
                        <option>&nbsp;&nbsp;&nbsp;&nbsp;Chăm sóc da toàn thân</option>
                        <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Làm trắng da & trị nám
                        </option>
                        <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Trị mụn & sẹo</option>
                        <option>&nbsp;&nbsp;&nbsp;&nbsp;Dưỡng ẩm</option>
                        <option>&nbsp;&nbsp;&nbsp;&nbsp;Nở ngực</option>
                        <option>&nbsp;&nbsp;&nbsp;&nbsp;Nở ngực</option>
                        
                        <option>Bổ sung dinh dưỡng</option>
                        <option>Vitamin & Khoáng chất</option>
                        <option>Sản phẩm cho trẻ em</option>
                        <option>Sản phẩm cho phụ nữ</option>
                        <option>Sản phẩm cho nam giới</option>
                        <option>Hỗ trợ điều trị</option>
                    </select>
                </div>
            <div class="menu-outer">
                    <div class="menu-click">
                        <span class="menu-title">{{ trans('message.category') }}</span>
                        <div class="menu-popup">
                            <span class="arrow-sub"></span>
                            <ul class="menu-sub1">
                               @foreach($cate_list as $key => $cate)
                                <li>
                                  <a href="{{ route('categoryPage',$cate->id) }}">{{ $cate->category_name }}</a>
                                </li>
                               @endforeach
                            </ul>
                            </ul>
                            <div class="menu-line"></div>
                        </div><!--menu-popup-->
                    </div><!--menu-click-->
                </div><!--menu-outer-->
          </div>
        <div class="col-lg-10 col-md-10 col-xs-8 header-search-box">            
                <div class="search-box">
                    <div class="search-inner">            
                        <div class="input-group">
                            <input type="text" class="form-control" id="keyword"
                            onfocus="javascript:if(this.value=='Nhập từ khóa cần tìm kiếm...'){this.value='';};" 
                            onblur="javascript:if(this.value==''){this.value='Nhập từ khóa cần tìm kiếm...';};" 
                            value="Nhập từ khóa cần tìm kiếm...">
                        </div>
                    </div>
                   <button type="submit" id="search" onclick="searchData();" class="btn btn-success">Tìm kiếm</button>

                </div>          
            </div>        
      </div>
    </div>
  </div>
 @yield('content')
 @include('footer')
 </div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.1&appId=422195711471662&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

@section('scripts')
<script>
      function searchData()
{
    let keyword = $('#keyword').val().trim();
    window.location.href = "{{ route('search') }}" + "?keyword="+keyword;
}
</script>
</body>
</html>
