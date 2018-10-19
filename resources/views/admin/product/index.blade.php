@extends('admin.layout')
@section('content')
<div class="box">
            <div class="box-header">
                <h3 class="box-title">{{ trans('message.productL') }}</h3>
            </div>
            <div class="col-md-12">
                <input type="text" name="" id="keyword" value="{{ $key }}">
                <button type="submit" class="btn-default" id="search" onclick="searchData();">{{ trans('message.search') }}</button>
            <a href="{{ route('products.create') }}">
            <button type="button" class="btn btn-success pull-right col-md-3">{{ trans('message.add') }}</button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>ID</th>
                  <th>{{ trans('message.name_pr') }}</th>
                  <th>{{ trans('message.category') }}</th>
                  <th>{{ trans('message.image') }}</th>
                  <th>{{ trans('message.price') }}</th>
                  <th>{{ trans('message.sale') }}</th>
                  <th>{{ trans('message.qty') }}</th>
                  <th>{{ trans('message.status') }}</th>
                  <th>{{ trans('message.action') }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($product as $key => $value)
                <tr>
                  <td>{{ $value->id }}</td>
                  <td>{{ $value->name }}</td>
                  <td>{{ $value->category_name }}</td>
                  <td><img src="{{ URL::to('/').'/uploads/images/'.$value->image }}" style="max-width: 100px;"></td>
                  <td>{{ $value->unit_price }}</td>
                  <td>{{ $value->promotion_price }}</td>
                  <td>{{ $value->quantity }}</td>
                  <td>@if($value->status == 1)
                      {{ 'còn hàng' }}
                      @else
                      {{ 'hết hàng' }}
                      @endif
                  </td>
                 <td>
                  <span>
                    <a href="{{ route('products.edit',['product' => $value->id]) }}">
                    <button type="button" class="btn btn-primary">{{ trans('message.edit') }}</button>
                    </a>
                  </span>
                  <span>
                    <button type="button" data-toggle="modal" data-target="#delete-{{$value->id}}" class="btn btn-danger">{{ trans('message.delete') }}</button>
                  </span>
                 </td>
                </tr>
             <!--Modal delete Product -->
              <div class="modal fade" id="delete-{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                        {!! Form::open(['route' => ['products.destroy', $value->id], 'method' => 'DELETE']) !!}
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
                  {{ $product->appends(request()->query())->links() }}
               </div>
            </div>
            <!-- /.box-body -->
</div><!-- /.box -->
@endsection
{{-- Search data --}}
@section('scripts')
<script>
      function searchData()
{
    let keyword = $('#keyword').val().trim();
    window.location.href = "{{ route('products.index') }}" + "?keyword="+keyword;
}
</script>
@endsection