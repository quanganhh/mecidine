@extends('admin.layout')
@section('content')
<div class="row">
	  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">{{ trans('message.category') }}</h3>
      </div>
      <div class="col-md-12">
      	<select name="role" id="role" style="height: 31px">
            <option value="-1">Tất cả</option>
            <option value="0">Quản lý</option>
            <option value="1">Người dùng</option>
        </select>
        <input type="text" name="" id="keyword" value="{{-- {{ $key }} --}}">
        <button type="button" class="btn-default" id="search" onclick="searchData();">{{ trans('message.search') }}</button>
        <a href="{{ route('user') }}">
            <button type="button" class="btn btn-success pull-right col-md-3">{{ trans('message.add') }}
            </button>
        </a>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
               <th>ID</th>
               <th>{{ trans('message.namecustomer') }}</th>
               <th>Email</th>
               <th>{{ trans('message.phone') }}</th>
               <th>{{ trans('message.address') }}</th>
               <th>{{ trans('message.level') }}</th>
               <th>{{ trans('message.status') }}</th>
              <th>{{ trans('message.action') }}</th>
            </tr>
          </thead>
          <tbody>
            @foreach($listAccount as $value)
            <tr>
               <td>{{ $value->id }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->email }}</td>
                    <td>{{ $value->phone }}</td>
                    <td>{{ $value->address }}</td>
                    <td>{{ ($value->level == 3) ? 'Người dùng' : (($value->level == 0) ? 'Super Admin' : 'người dùng') }}</td>
                    <td>{{ ($value->status == 1) ? 'Hoạt động' : 'Ngừng hoạt động' }}</td>
                    <td colspan="" rowspan="" headers="">
                <div>
                  <span>
                    <button type="button" class="btn btn-primary editCate" data-target="#editCate" data-toggle="modal" data-id="{{ $value->id }}">{{ trans('message.edit') }}</button>
                  </span>
                </span>
                <span>
                  <button type="button" class="btn btn-danger " data-toggle="modal" data-target="#delete-{{$value->id}}">{{ trans('message.delete') }}</button>
                </span>
              </span>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="pull-right">
      {{ $listAccount->appends(request()->query())->links() }}
    </div>
  </div>
  <!-- /.box-body -->
</div>
@endsection