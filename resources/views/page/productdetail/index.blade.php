@extends('master')
@section('content')
<section>
    <div class="container">
        <div class="row pages-content">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <ol class="breadcrumb">
                    <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
                    <li class="active"><a href="#">{{ $product_detail->name }}</a></li>
                </ol>
                <div class="row product-detail-page clearfix">
                    <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 pd-left">
                        <div class="image-view-outer">
                            @if($product_detail->promotion_price != 0)
                            <div class="sticker"><span>sale</span></div>
                            @endif
                            <div class="image-view">
                                <a href="images/data/clock.jpg" class ="cloud-zoom" id="zoom1" rel="adjustX: 10, adjustY:-4">
                                    <img src="{{ URL::to('/').'/uploads/images/'.$product_detail->image }}" alt="Không thấy ảnh" />
                                </a>
                            </div>
                        </div><!--image-view-outer-->
                    </div><!--Images product --->
                    <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                        <div class="row">
                            <div class="col-xs-12 title-product-detail">
                                <h1> {{ $product_detail->name }}</h1>
                                <div class="share-detail-pro clearfix">
                                    <div class="btn-share pull-right">
                                        <img src="{{ asset('bower_components/assets_frontend/images/data/btn-share.png') }}">
                                    </div>
                                </div>
                                <hr />             
                            </div>           
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <div class="form-horizontal product-info-detail">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">{{ trans('message.producer') }}</label>
                                        <div class="col-sm-9">
                                            <div class="form-control-static">{{ $product_detail->short_description }}</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {{-- <label class="col-sm-3 control-label">Giá bán lẻ</label>
                                        <div class="col-sm-9">
                                            <div class="form-control-static"><span class="lbl-price">900.000 đ</span>  <span class="clr-99 lbl-price-old">1.800.000 đ</span></div>
                                        </div> --}}
                                         @if($product_detail->promotion_price == 0)
                                        <span class="item-price">{{ number_format($product_detail->unit_price) }} vnđ</span>
                                        @else
                                        <span class="clr-99 lbl-price-old">{{ number_format($product_detail->unit_price) }} vnđ</span>
                                        <span class="item-price">{{ number_format($product_detail->promotion_price) }} vnđ</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <div class="sale-price-visa clearfix"><h6>Giảm ngay 5% cho đơn hàng thanh toán bằng thẻ <strong>Visa</strong></h6></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Số lượng còn</label>
                                        <div class="col-sm-9">
                                            <div class="form-control-static">{{count($product_cate)}} sản phẩm</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12 control-label">Giá bán theo lố:</label>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="sale-price">
                                                <tr>
                                                    <th width="37%">Số lượng
                                                    </th><th width="63%">Giá/1 sản phẩm
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td>Trên 21<span> sp</span></td>
                                                    <td>700.000 VNĐ (-5%)</td>
                                                </tr>
                                                <tr>
                                                    <td>Từ 11 đến 20<span> sp</span></td>
                                                    <td>202.000 VNĐ (-15%)</td>
                                                </tr>
                                                <tr>
                                                    <td>Từ 2 đến 10<span> sp</span></td>
                                                    <td>207.000 VNĐ (-25%)</td>
                                                </tr> 
                                            </table>            
                                        </div>                           
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12 control-label">ĐẶT HÀNG:</label>                                    </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="order-box clearfix">
                                                    <div class="num-product">
                                                        <span>Số lượng:</span>                                
                                                        <div class="text-spell"><input name="" type="text" class="text" style="width:58px;"  value="1"/><span class="spell-up"></span><span class="spell-down"></span></div>
                                                    </div>
                                                    <div class="box-order-button">
                                                        <div class="clearfix"><a href="#" class="btn-order-form">Thanh toán ngay</a></div>
                                                        <a id="btn-pdcart-id" class="btn-pdcart" onclick="pussCart();"><i class="fa fa-shopping-cart"></i> Đưa vào giỏ hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 hidden-xs">
                                    <div class="info-shop-detail">
                                        <div class="info-shop-box">
                                            <ul class="commitment clearfix">
                                                <li class="iconcheck clearfix">
                                                    <h2>Hàng chính hãng</h2>
                                                    <p>100% hàng nhập khẩu trực tiếp từ Mỹ</p>
                                                </li>
                                                <li class="iconcheck clearfix">
                                                    <h2>Giá rẻ</h2>
                                                    <p>Cung cấp trực tiếp từ các thương hiệu hàng đầu tại Mỹ</p>
                                                </li>
                                                <li class="iconcheck clearfix">
                                                    <h2>Thanh toán an toàn</h2>
                                                    <p>Qua NgânLượng: Được bảo hiểm 100% giá trị đơn hàng.</p>
                                                </li>
                                                <li class="iconcheck clearfix">
                                                    <h2>Tư vấn chuyên môn</h2>
                                                    <p>Bởi các dược sỹ đại học có kinh nghiệm</p>
                                                </li>                                    
                                                
                                            </ul>
                                        </div>                            
                                    </div>
                                </div>
                            </div>
                        </div><!--Product info detail-->
                         <div class="clearfix"></div>
                    <div class="detail-product-content clearfix">
                        <div class="row">
                            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 slidebar-detail-left">
                              <!-- Nav tabs -->
                              <ul class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#tab-detail-pd" role="tab" data-toggle="tab">Chi tiết</a>
                        </li>
                               <li><a href="#tab-comments-pd" role="tab" data-toggle="tab">Bình luận</a></li>
                               </ul>                                
                               <!-- Tab panes -->
                               <div class="tab-content">
                               <div class="tab-pane active" id="tab-detail-pd">
                                {!! $product_detail->full_description !!}
                               </div><!---Chi tiết sản phẩm---->
                                    <div class="tab-pane" id="tab-comments-pd">
                                        <div class="fb-comments"  data-numposts="5"></div>
                                    </div>
                                    </div> <!--Content product detail--->
                                    <div class="relation-product">
                                        <div class="center-title clearfix">
                                             <h1 class="center-tabs pull-left">Sản phẩm cùng danh mục</h1>
                                        </div>
                                        <div class="row col-product-home">
                                            @foreach($product_cate as $vale)
                                            <div class="col-lg-3 col-md-4 col-sm-3">
                                                <div class="item-product">
                                            <div class="img-pro">
                                            @if ($vale->promotion_price != 0)
                                             <div class="sticker"><span>sale</span></div>
                                            @endif
                                            <em class="overlay">&nbsp;</em>
                                            <a href="{{ route('productDetail', $vale->id) }}" alt="" title="">
                                           <img src="{{ URL::to('/').'/uploads/images/'.$vale->image }}" 
                                           alt="" style="height: 230px" title="">
                                            </a>
                                            </div>
                                            <h4><a href="#" title="Tên sản phẩm">{{ $vale->name }}</a></h4>
                                            <p class="item-price">
                                            @if($vale->promotion_price == 0)
                                            <span class="item-price">{{ number_format($vale->unit_price) }} vnđ</span>
                                            @else
                                            <span class="flash-dell">{{ number_format($vale->unit_price) }} vnđ</span>
                                            <span class="item-price">{{ number_format($vale->promotion_price) }} vnđ</span>
                                            @endif
                                            </p>
                                        </div>
                                    </div>
                                    @endforeach                                                           
                                </div>
                             </div> <!--Sản phẩm cùng danh mục--->
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 slidebar-detail-pd">
                                <div class="panel slide-box">
                                  <div class="panel-heading">{{ trans('message.productnew') }}</div>
                                  <div class="panel-body">   
                                    <div class="row slidebar-product">
                                        <div class="col-sm-12">
                                    @foreach($new_product as $product_new)
                                        <div class="item-product">
                                            <div class="img-pro">
                                                @if($product_new->promotion_price != 0)
                                                <div class="sticker"><span>sale</span></div>
                                                @endif
                                                <em class="overlay">&nbsp;</em>
                                                <a href="{{ route('productDetail', $product_new->id) }}" alt="" title=""><img src="{{ URL::to('/').'/uploads/images/'.$product_new->image }}" alt="" title=""></a>
                                            </div>
                                            <h4><a href="#" title="Tên sản phẩm">{{ $product_new->name }}</a></h4>
                                            @if($product_new->promotion_price == 0)
                                            <span class="item-price">{{ number_format($product_new->unit_price) }} vnđ</span>
                                            @else
                                            <span class="flash-del">{{ number_format($product_new->unit_price) }} vnđ</span>
                                            <span class="item-price">{{ number_format($product_new->promotion_price) }} vnđ</span>
                                            @endif
                                        </div>
                                    @endforeach
                                    </div>                                    
                                    </div>              
                                  </div>
                                </div><!--Block nhiều người mua--->   
                            </div>
                     </div>
                  </div>
                    </div>
                </div>
                <div class="clearfix"></div>            
            </div>
        </div>
    </section>
    @endsection