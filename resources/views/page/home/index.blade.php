@extends('master')
@section('content')
<div class="container">
   <div class="slider-banner-wrapper">
    <div id="slider-home-img" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#slider-home-img" data-slide-to="0" class=""></li>
        <li data-target="#slider-home-img" data-slide-to="1" class="active"></li>
        <li data-target="#slider-home-img" data-slide-to="2" class=""></li>
      </ol>
    <div class="carousel-inner">
        <div class="item">
          <a href="#"><img src="{{ asset('bower_components/assets_frontend/images/data/slider2.jpg') }}"></a>
      </div>
      <div class="item active">
          <a href="#"><img src="{{ asset('bower_components/assets_frontend/images/data/slider1.jpg') }}"></a>
      </div>
      <div class="item">
          <a href="#"><img src="{{ asset('bower_components/assets_frontend/images/data/slider3.jpg') }}" /></a>
      </div>
  </div>
  <a class="left carousel-control" href="#slider-home-img" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
</a>
<a class="right carousel-control" href="#slider-home-img" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
</a>
</div> <!--Heart banner--> 
<div class="home-banner-wrapper">
   <div class="banner-small">
       <a href="#"><img src="{{ asset('bower_components/assets_frontend/images/data/banner.png') }}" /></a>
   </div>
   <div class="banner-small">
       <a href="#"><img src="{{ asset('bower_components/assets_frontend/images/data/banner.png') }}" /></a>
   </div>
   <div class="banner-small end">
       <a href="#"><img src="{{ asset('bower_components/assets_frontend/images/data/banner.png') }}" /></a>
   </div>
</div><!--Home banner-->      	
</div><!--Block slider banner-->


<div class="home-product slider-hot-product">
   <div class="center-title clearfix">
      <h1 class="center-tabs pull-left">{{ trans('message.highlight') }}</h1>				                
  </div>
  <div id="slider-hot-pro" class="carousel slide" data-ride="carousel">
    <div class="jcarousel-wrapper">
        <div class="jcarousel">
            <ul>
                @foreach($list_product_hot as $list_hot)
                <li><div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="item-product">
                        <div class="img-pro">
                            @if($list_hot->promotion_price != 0)
                            <div class="sticker"><span>sale</span></div>
                            @endif
                            <a href="{{ route('productDetail', $list_hot->id) }}" alt="" title=""><img src="{{ URL::to('/').'/uploads/images/'.$list_hot->image }}" alt="" title="" /></a>
                        </div>
                        <h4><a href="{{ route('productDetail', $list_hot->id) }}" title="Tên sản phẩm">{{ $list_hot->name }}</a></h4>
                        @if($list_hot->promotion_price == 0)
                        <span class="item-price">{{ number_format($list_hot->unit_price) }} vnđ</span>
                        @else
                        <span class="flash-del">{{ number_format($list_hot->unit_price) }} vnđ</span>
                        <span class="item-price">{{ number_format($list_hot->promotion_price) }} vnđ</span>
                        @endif
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
    <!-- Controls -->
    <a href="#" class="jcarousel-control-prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a href="#" class="jcarousel-control-next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>

</div> <!--Slider sản phẩm nổi bật-->
</div> <!--Block sản phẩm nổi bật-->
@foreach($data as $value)
<div class="home-product">
   <div class="center-title clearfix">
      <h1 class="center-tabs pull-left">{{ $value['category_name'] }}</h1>
  </div>
  <div class="content-product">
   <div class="row col-product-home">
       <div class="col-lg-3 col-md-4 col-sm-4 home-banner-pro"><a href="#" title=""><img src="{{ asset('bower_components/assets_frontend/data/heart-cat4.') }}" alt="" title=""/></a></div>
       <div class="col-lg-9 col-md-8 col-sm-12">
           <div class="row">  
            @foreach($value['products'] as $category_product)
            <div class="col-lg-3 col-md-4 col-sm-3">
                <div class="item-product">
                    <div class="img-pro">
                        @if($category_product->promotion_price != 0)
                        <div class="sticker"><span>sale</span></div>
                        @endif
                        <em class="overlay">&nbsp;</em>
                        <a href="{{ route('productDetail', $category_product->id) }}" alt="" title=""><img src="{{ URL::to('/').'/uploads/images/'.$category_product->image }}" alt="" title=""/></a>
                    </div>
                    <h4><a href="{{ route('productDetail', $category_product->id) }}" title="Tên sản phẩm">{{ $category_product->name }}</a></h4>
                    @if($category_product->promotion_price == 0)
                    <span class="item-price">{{ number_format($category_product->unit_price) }} vnđ</span>
                    @else
                    <span class="flash-del">{{ number_format($category_product->unit_price) }} vnđ</span>
                    <span class="item-price">{{ number_format($category_product->promotion_price) }} vnđ</span>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</div>
</div> <!--Block Hiển thị sản phẩm theo danh mục-->
@endforeach
</div>
@endsection