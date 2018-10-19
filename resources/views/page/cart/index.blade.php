@extends('master')
@section('content')
<section>
	<div class="container">
		<div class="row pages-content">
        	<div class="col-lg-12 col-md-12 col-sm-12">
            	<ol class="breadcrumb">
                  <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
                  <li class="active"><a href="#">Thanh toán</a></li>
                </ol>
                <div class="box-content">
                    <div class="box-step">
                        <ul>
                            <li class="step1 active">
                                <span>0</span>
                                <div class="step-link">
                                    <h2>Điền thông tin mua hàng</h2>
                                </div>
                            </li>
                        </ul>                                	
                    </div><!--box-step-->
                    <div class="your-cart">
                        <div class="yc-content">
                        	<div class="col-lg-12 col-md-12 col-sm-12 box">
                                <div class="box-title-cart">
                                    <label><i class="fa fa-map-marker"></i> Thông tin người mua hàng</label>
                                </div><!--box-title-->
                                <div class="box-content">
                                    <div class="form-horizontal">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                              <p class="form-control-static">&nbsp;</p>
                                            </div>
                                        </div>      
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Họ và tên:</label>
                                            <div class="col-sm-9">
                                              <input type="text" class="form-control" name="name"  placeholder="Họ và tên">
                                            </div>
                                        </div>   
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Điện thoại:</label>
                                            <div class="col-sm-9">
                                              <input type="text" class="form-control" name="phone"  placeholder="Số điện thoại">
                                            </div>
                                        </div>   
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Email:</label>
                                            <div class="col-sm-9">
                                              <input type="text" class="form-control" name="email"  placeholder="Email">
                                            </div>
                                        </div>   
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Địa chỉ:</label>
                                            <div class="col-sm-9">
                                              <input type="text" class="form-control" name="address"  placeholder="Địa chỉ">
                                            </div>
                                        </div>       
                                    </div><!--form-->
                                </div><!--box-content-->
                            </div><!--box-->
                        </div><!--yc-content-->
                        <div class="yc-content">
                        <div class="panel panel-default">
                              <div class="panel-heading"><h5><i class="fa fa-truck"></i> Hình thức vận chuyển</h5></div>
                              <div class="panel-body form-inline">
                                    <div class="form-group">
                                        <div class="radio">
                                            <label><input type="radio" name="rd-trans" checked=""> Hỏa tốc (dưới 2h)</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="radio">
                                            <label><input type="radio" name="rd-trans"> Nhanh (2-3 ngày)</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="radio">
                                            <label><input type="radio" name="rd-trans"> Tiết kiệm (5-7 ngày)</label>
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
                                        <th width="50%" align="left">Sản phẩm</th>
                                        <th width="10%" align="center">Xoá</th>
                                        <th width="10%" align="center">Số lượng</th>
                                        <th width="15%" align="center">Đơn giá(VNĐ)</th>
                                        <th width="15%" align="right">Thành Tiền (VNĐ)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="menu-item">
                                                <div class="m-thumb"><a href="#"><img src="images/data/10.jpg" alt="thumb"></a></div>
                                                <div class="m-content">
                                                    <div class="m-row"><h5><a href="#">NEW Michael Kors  Sunglasses MMK 696 HAVANA 206 DAVENPORT AUTH</a></h5></div>
                                                    <div class="m-row"><label>Danh mục:</label><span>Tăng cân</span></div>
                                                    <div class="m-row"><label>Trọng lượng:</label><span>1,23kg/sản phẩm</span></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td align="center"><span class="fa fa-trash text-warning fs16"></span></td>
                                        <td align="center"><input type="number" name="quantity" class="form-control" value="1"></td>
                                        <td align="right">6.238.000 đ</td>
                                        <td align="right" class="text-danger">6.238.000 đ</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" align="right" style="border-right:none;">
                                            <div class="total-price">
                                                <p><strong>Tổng tiền hàng:</strong></p>
                                                <p>Phí vận chuyển:</p>
                                                <p>Mã coupon:</p>
                                            </div>
                                        </td>
                                        <td colspan="2" align="right">
                                            <div class="total-price">
                                                <p><strong>476.000 đ</strong></p>
                                                <p>-6.000 đ</p>
                                                <input type="text" class="form-control" placeholder="Nhập mã coupon">
                                                 <span class="input-group-btn">
                                                    <button class="btn btn-success" type="button">Sử dụng</button>
                                                  </span>
                                                </div>
                                            </div>                                    
                                        </td>
                                    </tr>
                                </tbody>                            
                                <tfoot>
                                    <tr>
                                        <td colspan="3" align="right" style="border-right:none;"><b>Tổng phải thanh toán:</b></td>
                                        <td colspan="2" align="right" class="text-danger"><strong>12.476.000</strong></td>
                                    </tr>                                
                                </tfoot>                            
                            </table>
                            </div>
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Ghi chú:</label>
                                    <div class="col-sm-10">
                                        <textarea name="" rows="4" class="form-control"></textarea>   
                                    </div>
                                </div>
                            </div><!--form-->
                            <div class="form-group">
                                <div class="pull-right">
                                    <label><input type="checkbox"> <strong>Tôi hoàn toàn đồng ý với <a target="_blank" href="#"> chính sách đổi trả hàng của 1top.vn</a></strong></label>
                                </div>
                            </div><!--form-->                        
                        </div><!--yc-content-->
                        <div class="yc-bottom">
                            <a href="#" class="btn btn-success btn-lg pull-right">Tiếp tục mua hàng</a>
                        </div><!--yc-bottom-->	
                    </div><!--your-cart-->	
                </div>
            </div>
            <div class="clearfix"></div>            
        </div>
    </div>
</section>
@endsection