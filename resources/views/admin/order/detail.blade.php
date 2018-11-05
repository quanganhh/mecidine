@extends('admin.layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h3 class="text-center">{{ trans('message.order_detail') }}</h3>
    </div>
    <div class="col-lg-12 mt-3">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>{{ trans('message.namecustomer') }}</th>
                    <th>{{ trans('message.name_pr') }}</th>
                    <th>{{ trans('message.qty') }}</th>
                    <th>{{ trans('message.price') }}</th>
                    <th>{{ trans('message.phone') }}</th>
                    <th>{{ trans('message.address') }}</th>
                    <th>{{ trans('message.action') }}</th>
                </tr>
            </thead>
            <tbody>
                @php 
                    $total = 0;
                @endphp
				@foreach($list_detail as $key => $val)
					 @foreach($val->products as $product)
					 <tr>
						 	<td>{{ $val->id }}</td>
	                        <td>{{ $val->user->name }}</td>
	                        <td>{{ $product->name }}</td> 
	                        <td>{{ $product->quantity }}</td>
	                        <td>{{ number_format($product->unit_price) }}</td>
	                       	@php
					          $subTotal = $product->quantity*$product->unit_price;
					          $total += $subTotal;
				            @endphp
	                   		 <td>{{ $val->user->phone }}</td>
                        	<td>{{ $val->user->address }}</td>
                        	<td>
                        		<span><a href="#"><i class="fa fa-delete">delete</i></a></span>
                        	</td>
                	@endforeach
	               </tr>
				@endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="1">{{ trans('message.totalPrice') }} :</td>
                    <td>{{ number_format($total) }}</td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
<script type="text/javascript">
    function searchData()
    {
        // let keyword = $('#keyword').val().trim();
        // window.location.href = "{{-- route('admin.order') --}}" + "?keyword="+keyword;
    }
    // function deletePd(id)
    // {
    //     $.ajax({
    //         url: "{{-- route('admin.order.delete') --}}",
    //         type: "POST",
    //         data: {id: id},
    //         success: function(res) {
    //             res =$.trim(res);
    //             if (res === 'OK') {
    //                 alert('Xóa thành công');
    //                 window.location.reload(true);
    //             } else {
    //                 alert('có lỗi xảy ra');
    //             }
    //         }
    //     });
    // }
</script>
@endsection
