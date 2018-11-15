@extends('master')
@section('content')
<section>
    <div class="container">
        <div class="row pages-content">
            <div class="col-lg-9 col-md-9 col-sm-12 left-slider-bar">
                <ol class="breadcrumb">
                  <li><a href=""><i class="glyphicon glyphicon-home"></i></a></li>
                  <li class="active">{{ __('message.info')}}</li>
                </ol>
                <div class="slider-hot-product slider-model-product">
                    <h1 class="">{{ __('message.info')}}</h1>                               
                </div><!--Slider model product-->
                <div class="form-user-backend">
                    <div class="form-horizontal clearfix">
                              <div class="form-group">
                                <label class="col-sm-3 control-label">{{ __('message.info')}}</label>
                                <div class="col-sm-7">
                                  <p class="form-control-static">{{ $user->username}}</p>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-3 control-label">{{ __('message.userL')}}</label>
                                <div class="col-sm-7">
                                    <p class="form-control-static">{{ $user->name}}</p>
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-7">
                                  <p class="form-control-static">{{ $user->email}}</p>
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="col-sm-3 control-label">{{ __('message.address')}}</label>
                                <div class="col-sm-7">
                                  <p class="form-control-static">{{ $user->address }}</p>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-3 control-label">{{ __('message.phone')}}</label>
                                <div class="col-sm-7">
                                  <p class="form-control-static">{{ $user->phone }}</p>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-7">
                                  <button type="submit" class="btn btn-primary">{{__('message.updateInfo')}}</button>
                                </div>
                              </div>
                            </div>                
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 right-slider-bar">
                <div class="panel slide-box">
                  <div class="panel-heading">Thông tin</div>
                  <div class="panel-body">                    
                      <ul class="list-menu-cat clearfix">
                    <li><a href="{{ route('info', Auth::user()->id) }}">{{ __('message.info')}}</a></li>
                    <li><a href="#">{{ __('message.settinginfo')}}</a></li>
                    <li><a href="#">{{ __('message.changePass')}}</a></li>
                    <li><a href="#">{{ __('message.myoder')}}(110)</a></li>
                </ul>
                  </div>
                </div><!--List category block--->
                <div class="panel slide-box">
                  <div class="panel-heading">Nhiều người mua</div>
                  <div class="panel-body">   
                    <div class="row slidebar-product">
                        <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                        <div class="item-product">
                            <div class="img-pro">
                                <div class="sticker"><span>-29%</span></div>
                                <em class="overlay">&nbsp;</em>
                                <a href="#" alt="" title=""><img src="images/data/24.jpg" alt="" title=""></a>
                            </div>
                            <h4><a href="#" title="Tên sản phẩm">Thảo dược giảm viêm họng cho trẻ em Organic Throat Coat (Traditional Medicinals) – Hộp 18 gói</a></h4>
                            <p class="item-price">312.000 VNĐ <img src="images/shipping-sm.png" class="free-shipping-icon"></p>
                        </div>
                    </div>                    
                        <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                            <div class="item-product">
                                <div class="img-pro">
                                    <div class="sticker"><span>-29%</span></div>
                                    <em class="overlay">&nbsp;</em>
                                    <a href="#" alt="" title=""><img src="images/data/13.jpg" alt="" title=""></a>
                                </div>
                                <h4><a href="#" title="Tên sản phẩm">Thảo dược giảm viêm họng cho trẻ em Organic Throat Coat (Traditional Medicinals) – Hộp 18 gói</a></h4>
                                <p class="item-price">312.000 VNĐ <img src="images/shipping-sm.png" class="free-shipping-icon"></p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                        <div class="item-product">
                            <div class="img-pro">
                                <div class="sticker"><span>-29%</span></div>
                                <em class="overlay">&nbsp;</em>
                                <a href="#" alt="" title=""><img src="images/data/10.jpg" alt="" title=""></a>
                            </div>
                            <h4><a href="#" title="Tên sản phẩm">Thảo dược giảm viêm họng cho trẻ em Organic Throat Coat (Traditional Medicinals) – Hộp 18 gói</a></h4>
                            <p class="item-price">312.000 VNĐ <img src="images/shipping-sm.png" class="free-shipping-icon"></p>
                        </div>
                    </div>
                        <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                        <div class="item-product">
                            <div class="img-pro">
                                <div class="sticker"><span>-29%</span></div>
                                <em class="overlay">&nbsp;</em>
                                <a href="#" alt="" title=""><img src="images/data/14.jpg" alt="" title=""></a>
                            </div>
                            <h4><a href="#" title="Tên sản phẩm">Thảo dược giảm viêm họng cho trẻ em Organic Throat Coat (Traditional Medicinals) – Hộp 18 gói</a></h4>
                            <p class="item-price">312.000 VNĐ <img src="images/shipping-sm.png" class="free-shipping-icon"></p>
                        </div>
                    </div>                      
                        <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                        <div class="item-product">
                            <div class="img-pro">
                                <div class="sticker"><span>-29%</span></div>
                                <em class="overlay">&nbsp;</em>
                                <a href="#" alt="" title=""><img src="images/data/24.jpg" alt="" title=""></a>
                            </div>
                            <h4><a href="#" title="Tên sản phẩm">Thảo dược giảm viêm họng cho trẻ em Organic Throat Coat (Traditional Medicinals) – Hộp 18 gói</a></h4>
                            <p class="item-price">312.000 VNĐ <img src="images/shipping-sm.png" class="free-shipping-icon"></p>
                        </div>
                    </div>                     
                    </div>              
                  </div>
                </div><!--Block nhiều người mua--->  
            <div class="clearfix"></div>            
        </div>
    </div>
</section>
@endsection