@extends('master')
@section('content')
<section>
<div class="container">
   <div class="row pages-content">
        <div class="col-lg-9 col-md-9 col-sm-12 left-slider-bar">
            <ol class="breadcrumb">
               <li><a href=""><i class="glyphicon glyphicon-home"></i></a></li>
               {{-- <li><a href="#">{{ $cate_list->category_name }}</a></li> --}}
            </ol>
            <div class="slider-hot-product slider-model-product">
            	
            </div><!--Slider model product-->
            <ul class="nav nav-pills product-filter">
                <li class="form-inline">Sắp xếp theo 
                    <select class="form-control">
                          <option>Mới nhất</option>
                          <option>Cũ nhất</option>
                          <option>Giá nhỏ dần</option>
                          <option>Giá tăng dần</option>
                    </select>
                </li>
                <li>Có tất cả <strong class="text-warning">{{ count($data) }}
                </strong> sản phẩm</li>
            </ul>
            <div class="row col-product-home">
            @foreach($data as $value)
            <div class="col-lg-3 col-md-4 col-sm-3">
                    <div class="item-product">
                          @if($value->promotion_price != 0)
                            <div class="sticker"><span>sale</span></div>
                            @endif
                            <div class="img-pro">
                            <em class="overlay">&nbsp;</em>
                            <a href="{{ route('productDetail',$value->id) }}" alt="" title="">
                                 <img src="{{ URL::to('/').'/uploads/images/'.$value->image }}" 
                                 alt="" title="">
                            </a>
                        </div>
                        <h4><a href="#" title="Tên sản phẩm">{{ $value->name }}</a></h4>
                         @if($value->promotion_price == 0)
                           <span class="item-price">{{ number_format($value->unit_price) }} vnđ</span>
                           @else
                           <span class="flash-dell">{{ number_format($value->unit_price) }} vnđ</span>
                           <span class="item-price">{{ number_format($value->promotion_price) }} vnđ</span>
                           @endif
                        <p class="single-item-caption">
                                     <a class="add-to-cart pull-left" href="">
                                     <i class="fa fa-shopping-cart"></i></a>
                                     <a href="{{ route('productDetail',$value->id) }}" 
                                     class="beta-btn primary pull-right" >{{ trans('message.detail') }}<i 
                                     class="fa fa-chevron-right"></i></a>
                                     <div class="clearfix"></div>
                         </p>
                    </div>
                </div> 
                @endforeach                                                          
            </div>
            <ul class="pagination pull-right">
                 {{ $data->appends(request()->query())->links() }}
            </ul>    
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 right-slider-bar">
            <div class="panel slide-box">
                <div class="panel-heading">{{ trans('message.category') }}</div>
                <div class="panel-body">                    
                    <ul class="list-menu-cat clearfix">
                        @foreach($cate_list as $cate)
                         <li><a href="{{ route('categoryPage', $cate->id) }}">{{ $cate->category_name }}</a></li>
                        @endforeach
                   </ul>
                </div>
            </div><!--List category block--->
            <div class="panel slide-box">
                <div class="panel-heading">{{ trans('message.khgia') }}</div>
                <div class="panel-body">   
                    <ul class="list-menu-cat list-brand clearfix">
                        <li><div class="checkbox"><label><input type="checkbox"> Dưới 500.000</label></div>
                        </li>
                        <li><div class="checkbox"><label><input type="checkbox"> 500.000 - 1.000.000</label>
                        </div></li>
                        <li><div class="checkbox"><label><input type="checkbox"> 1.000.000 - 2.000.000
                        </label></div></li>
                        <li><div class="checkbox"><label><input type="checkbox"> 2.000.000 - 5.000.000
                        </label></div></li>
                        <li><div class="checkbox"><label><input type="checkbox"> Trên 5.000.000
                        </label></div></li>                    </ul>
                        <div class="clearfix">
                             <a href="#" class="pull-right">Bỏ lọc khoảng giá</a>
                        </div>                    
                    </div>
                </div><!--Filter Price--->  
                <div class="panel slide-box">
                    <div class="panel-heading">Giảm giá</div>
                    <div class="panel-body">   
                        <ul class="list-menu-cat list-brand clearfix">
                           <li><a href="#">Dưới 10%</a></li>
                           <li><a href="#">Trên 10%</a></li>
                           <li><a href="#">Trên 20%</a></li>
                           <li><a href="#">Trên 30%</a></li>
                           <li><a href="#">Trên 40%</a></li>
                           <li><a href="#">Trên 50%</a></li>
                           <li><a href="#">Trên 60%</a></li>
                           <li><a href="#">Trên 70%</a></li>
                        </ul>
                    <div class="clearfix">
                       <a href="#" class="pull-right">Bỏ lọc khoảng giá</a>
                    </div>                    
                    </div>
                </div><!--Discount Price--->                                          	
            </div>
            <div class="clearfix"></div>            
        </div>
    </div>
</section>
@endsection