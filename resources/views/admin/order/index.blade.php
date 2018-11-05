@extends('admin.layout')
@section('content')
<div class="box">
            <div class="box-header">
                <h3 class="box-title">{{ trans('message.ordertext') }}</h3>
            </div>
            <div class="col-md-12">
                <input type="text" name="" id="keyword" value="{{-- {{ $key }} --}}">
                <button type="submit" class="btn-default" id="search" onclick="searchData();">{{ trans('message.search') }}</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>ID</th>
                <th>{{ trans('message.namecustomer') }}</th>
                  <th>{{ trans('message.paymentmethod') }}</th>
                <th>{{ trans('message.address') }}</th>
                <th>{{ trans('message.shipdate') }}</th>
                <th>{{ trans('message.order_stt') }}</th>
                <th>{{ trans('message.order_status') }}</th>
                  <th>{{ trans('message.action') }}</th>
                </tr>
                </thead>
                <tbody>
               @foreach($list_order as $key => $val)
                <tr>
                    <td>{{ $val->id }}</td>
                    <td>{{ $val->user->name }}</td>
                    <td>{{ $val->payment->name  }}</td>
                    <td>{{ $val->address }}</td>
                    <td>{{ $val->ship_date }}</td>
                     <td>
                        <button onclick="ship({{ $val->id }})" class="btn btn-info btn-sm" type="button" title="Ship" {{ ($val->order_status_id == 3) ? 'disabled': (($val->order_status_id == 2) ? 'disabled': '')}}>Giao hàng</button>
                        <button onclick="done({{ $val->id }})" class="btn btn-success btn-sm" type="button" title="Success" {{ ($val->order_status_id == 3) ? 'disabled': ''}}>Đã nhận hàng</button>
                    </td>
                     <td>
                        @if($val->status == 0)
                        <span class="span<?=  $val->id ?>"><button type="button" class="btn btn-warning btn-sm status" data-id="<?= $val->id ?>">{{ trans('message.wait')}}</button></span>
                        @elseif( $val->status == 1 )
                        <span><button type="button" class="btn btn-success btn-sm" data-id="<?= $val->id ?>">{{ trans('message.done')}}</button></span>
                        @endif
                        <span class="hidden-status done<?= $val->id ?>"><button type="button" class="btn btn-success btn-sm " data-id="<?= $val->id ?>">{{ trans('message.done')}}</button></span>
                    </td>
                    <td>
                      <span><a class="btn btn-info btn-sm" href="{{ route('detail',['id'=>$val->id]) }}" title="Edit">Chi tiết</a>
                    </td>
                </tr>
              <div class="modal fade" id="delete-{{-- {{$value->id}} --}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">{{ trans('message.deleteP') }}</h4>
                      </div>
                      <div class="modal-body">
                        <h5>{{ trans('message.deleteConfirm') }}</h5>
                      </div>
                      <div class="modal-footer">
                        {!! Form::open(['route' => 'order', 'method' => 'get']) !!}
                        <button type="submit" class="btn btn-danger pull-left">{{ trans('message.delete') }}</button>
                        {!! Form::close() !!}
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" >{{ trans('message.close') }}</button>
                      </div>
                    </div>
                  </div>
                 </div> <!--Modal delete product the end -->
                @endforeach
              </table>
               <div class="pull-right">
                  {{ $list_order->appends(request()->query())->links() }}
               </div>
            </div>
            <!-- /.box-body -->
</div><!-- /.box -->
</tbody>
@section('scripts')
<script>
    function ship(id)
    {
        $.ajax({
            url: "{{ route('ship') }}",
            type: "POST",
            data: {id: id},
            success: function(res) {
                res = $.trim(res);
                if (res === 'OK') {
                    toastr["success"]("Đơn hàng bắt đầu được giao");
                    setTimeout(function(){
                    window.location.reload(true);
                    }, 2000);
                } else {
                    toastr["warning"]("Có lỗi xảy ra");
                }
            }
        });
    }
    
    function done(id)
    {
        $.ajax({
            url: "{{ route('done') }}",
            type: "POST",
            data: {id: id},
            success: function(res) {
                res = $.trim(res);
                if (res === 'OK') {
                    toastr["success"]("Đơn hàng đã giao thành công");
                    setTimeout(function(){
                    window.location.reload(true);
                    }, 2000);
                    
                } else {
                    toastr["warning"]("Có lỗi xảy ra");
                }
            }
        });
    }

    $(document).ready(function(){
        $( ".status" ).click(function(id){
            var id = $(this).data('id');
             $.ajax({
            url: "ajaxStatus",
            type: "GET",
            data: {id: id},
            success: function(done)
            {
                $('.span'+id).hide();
                $('.done'+id).css('display', 'block');
                   toastr["success"]("Đã duyệt đơn");
            }
          });
        });
    })
</script>
@endsection
@endsection 
