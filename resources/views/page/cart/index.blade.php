@extends('master')
@section('content')
<section>
    <div class="container">
        <div class="row pages-content">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <ol class="breadcrumb">
                  <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
                  <li class="active"><a href="#">{{ trans('message.payment') }}</a></li>
                </ol>
                <div class="box-content">
                    <div class="box-step">
                        <ul>
                            <li class="step1 active">
                                <span>0</span>
                                <div class="step-link">
                                    <h2>{{trans('message.input_info')}}</h2>
                                </div>
                            </li>
                        </ul>                                   
                    </div><!--box-step-->
                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err )
                            <ul><li>{{$err}}</li></ul><br/>
                            @endforeach
                        </div>
                    @endif
                    <form action="{{ route('cart_complete') }}" method="post">
                        @csrf
                        <div class="your-cart">
                            <div class="yc-content">
                                <div class="col-lg-12 col-md-12 col-sm-12 box">
                                    <div class="box-title-cart">
                                        <label><i class="fa fa-map-marker"></i>{{ trans('message.info_Customer')}}</label>
                                    </div><!--box-title-->
                                    <div class="box-content">
                                        <div class="form-horizontal">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                  <p class="form-control-static">&nbsp;</p>
                                                </div>
                                            </div>      
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">{{ trans('message.namecustomer') }}:</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" name="name"  placeholder="Họ và tên" value="{{ $user->name }}">
                                                </div>
                                            </div>   
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">{{ trans('message.phone') }}:</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" name="phone"  placeholder="Số điện thoại" value="{{ $user->phone }}">
                                                </div>
                                            </div>   
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Email:</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" name="email"  placeholder="Email" value="{{ $user->email }}">
                                                </div>
                                            </div>   
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">
                                                {{ trans('message.address') }}:</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" name="address"  placeholder="Địa chỉ" value="{{ $user->address }}">
                                                </div>
                                            </div>       
                                        </div><!--form-->
                                    </div><!--box-content-->
                                </div><!--box-->
                            </div><!--yc-content-->
                            <div class="yc-content">
                            <div class="panel panel-default">
                                  <div class="panel-heading"><h5> <i class="fa fa-credit-card"></i>{{ trans('message.paymentmethod') }}</h5></div>
                                  <div class="panel-body form-inline">
                                        <div class="form-group">
                                            <div class="radio">
                                                <label><input type="radio" name="payment" value="0" checked="checked" required> {{ trans('message.received')}}</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="radio">
                                                <label><input type="radio" name="payment" value="1"> {{ trans('message.atm')}}</label>
                                            </div>
                                        </div>
                                   </div>
                              </div><!--in-country-->
                              <div class="panel panel-default">
                                  <div class="panel-heading"><h5> <i class="fa fa-truck"></i>{{ trans('message.transport') }}</h5></div>
                                  <div class="panel-body form-inline">
                                        <div class="form-group">
                                            <div class="radio">
                                                <label><input type="radio" name="rd-trans" value="0" checked="checked" required> {{ trans('message.max_speed')}}</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="radio">
                                                <label><input type="radio" name="rd-trans" value="1"> {{ trans('message.speed')}}</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="radio">
                                                <label><input type="radio" name="rd-trans" value="2"> {{ trans('message.saving')}}</label>
                                            </div>
                                        </div>
                                   </div>
                              </div><!--in-country-->
                            </div>                    
                            <div class="yc-content">
                                <div class="table-responsive">
                                    <table class="table table-bordered" cellpadding="0" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th width="50%" align="left">{{ trans('message.product') }}</th>
                                            <th width="10%" align="center">{{ trans('message.deleteP')}}</th>
                                            <th width="10%" align="center">{{ trans('message.qty')}}</th>
                                            <th width="15%" align="center">{{ trans('message.unitprice')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach(Session::get('cart') as $product)
                                        <tr>
                                            <td>
                                                <div class="menu-item">
                                                    <div class="m-thumb"><a href="#"><img src="{{ URL::to('/').'/uploads/images/'.$product['attributes']['image'] }}" alt="thumb"></a></div>
                                                    <div class="m-content">
                                                        <div class="m-row"><h5><a href="#">{{ $product->name }}</a></h5></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td align="center"><span class="fa fa-trash text-warning fs16"></span></td>
                                            <td align="center"><input type="number" name="quantity" class="form-control" value="{{ $product->quantity }}"></td>
                                            <td align="right">{{ number_format($product->unit_price) }} vnđ </td>
                                        </tr>
                                        @endforeach
                                    </tbody>                            
                                    <tfoot>
                                        <tr>
                                            <td colspan="3" align="right" style="border-right:none;">
                                                <div class="total-price">
                                                    <p><strong>{{ trans('message.totalPrice')}}:</strong></p>
                                                </div>
                                            </td>
                                            <td colspan="2" align="right">
                                                <div class="total-price">
                                                    <p><strong>{{ number_format(Session::get('subTotal')) }} vnđ</strong></p>
                                                    </div>
                                                </div>                                    
                                            </td>
                                        </tr>                             
                                    </tfoot>                            
                                </table>
                                </div>
                                <div class="form-group">
                                    <div class="pull-right">
                                        <label><input type="checkbox"> <strong>Tôi hoàn toàn đồng ý với <a target="_blank" href="#"> chính sách đổi trả hàng của 1top.vn</a></strong></label>
                                    </div>
                                </div><!--form-->                        
                            </div><!--yc-content-->
                            <div class="yc-bottom">
                                <button type="submit" class="btn btn-success btn-lg pull-right">{{ trans('message.continue')}}</button>
                            </div><!--yc-bottom-->  
                        </div><!--your-cart--> 
                    </form> 
                </div>
            </div>
            <div class="clearfix"></div>            
        </div>
    </div>
</section>
@endsection