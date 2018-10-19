  @extends('admin.layout')
  @section('content')

  <div class="row">
  @if(session()->get('success'))
   <div class="alert alert-success">
    {{ session()->get('success') }}  
  </div>
  @endif

  @if(session()->get('message'))
   <div class="alert alert-success">
    {{ session()->get('message') }}  
  </div>
  @endif
  
  @if(session()->get('wanning'))
   <div class="alert btn-warning">
    {{ session()->get('wanning') }}  
  </div>
  @endif

  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">{{ trans('message.category') }}</h3>
      </div>
      <div class="col-md-12">
        <input type="text" name="" id="keyword" value="{{ $key }}">
        <button type="submit" class="btn-default" id="search" onclick="searchData();">{{ trans('message.search') }}</button>
        <button type="button" class="btn btn-success pull-right col-md-3"  data-toggle="modal" data-target="#myModal">{{ trans('message.add') }}</button>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>{{ trans('message.product_cate') }}</th>
              <th>{{ trans('message.action') }}</th>
            </tr>
          </thead>
          <tbody>
            @foreach($listCate as $value)
            <tr>
              <td>{{ $value->id }}</td>
              <td id="title-{{ $value->id }}">{{ $value->category_name }}</td>
              <td colspan="" rowspan="" headers="">
                <div>
                  <span>
                    <button type="button" class="btn btn-primary editCate" data-target="#editCate" data-toggle="modal" data-id="{{ $value->id }}" data-name="{{ $value->category_name }}">{{ trans('message.edit') }}</button>
                  </span>
                </span>
                <span>
                  <button type="button" class="btn btn-danger " data-toggle="modal" data-target="#delete-{{$value->id}}">{{ trans('message.delete') }}</button>
                </span>
              </span>
            </div>
          </td>
        </tr>
        <div class="modal fade" id="delete-{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">{{ trans('message.deleteConfirm') }}</h4>
              </div>
              <div class="modal-body">
                <h5>{{ trans('message.deleteC') }}</h5>
              </div>
              <div class="modal-footer">

                {!! Form::open(['route' => ['categories.destroy', $value->id], 'method' => 'DELETE']) !!}
                <button type="submit" class="btn btn-danger pull-left">{{ trans('message.delete') }}</button>
                {!! Form::close() !!}
                <button type="button" class="btn btn-secondary" data-dismiss="modal" >{{ trans('message.close') }}</button>
              </div>
            </div>
          </div>
        </div> <!--At the end -->
        @endforeach
      </tbody>
    </table>
    <div class="pull-right">
      {{ $listCate->appends(request()->query())->links() }}
    </div>
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
<!-- Modal Add Category-->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog modal-dialog-center">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">{{ trans('message.addC') }}</h4>
      </div>
      <div class="modal-body">
        {!! Form::open(['method' => 'get','route' => 'categories.create']) !!}
        <span>{!! Form::label('Tên danh mục :', '', array('class' => '')) !!}</span>
        {!! Form::text('name', null, array('class' => 'form-control', 'required')) !!}
      </div>
      <div class="modal-footer">
        <a href="{{ route('categories.create') }}">
          <button type="submit" class="btn btn-success pull-left">{{ trans('message.add') }}</button>
        </a>
        <button type="button" class="btn btn-default"  data-dismiss="modal">{{ trans('message.close') }}</button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
</div>
<!-- Modal Edit Category-->
<div class="modal fade" id="editCate" role="dialog">
  <div class="modal-dialog modal-dialog-center">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">{{ trans('message.editC') }}</h4>
      </div>
      <div class="modal-body">
        {!! Form::open(['method' => 'get','url' => 'admin/category/ajaxEdit/{id}']) !!}
        {{ Form::hidden('id', null, array('id' => 'fid')) }}
        <span>{!! Form::label('Tên danh mục :', '', array('class' => '')) !!}</span>
        {!! Form::text('name', '', array('class' => 'form-control', 'id' => 'n', 'required')) !!}
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-primary pull-left edit">{{ trans('message.edit') }}</button>
        <button type="button" class="btn btn-default"  data-dismiss="modal">{{ trans('message.close') }}</button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
</div>
@endsection
<!-- Delete Cate-->
@section('scripts')
<script>
 $(document).on('click', '.editCate', function() {
  var id_cate = $(this).attr('data-id');
  var name_cate = $(this).attr('data-name');
  $('#fid').val($(this).data('id'));
  $('.edit').attr('data-id',id_cate);
          $('#n').val(name_cate);// ok baby ok a:
          $('#editCate').modal('show');
        });

  //edit ajax
  $('body').on('click', '.edit', function(e) {
    e.preventDefault();
    var cate_id =  $(this).attr('data-id');
    var name = $(this).attr('#n');
    $.ajax({
      type: 'get',
      url: '/admin/category/ajaxEdit/' + cate_id,
      data: {
                  'id': cate_id,
                  'name': $('#n').val(),
                },
                success: function(data) {
                  if(data)
                  {
                    $('#title-'+cate_id).html(data);
                    $('.editCate'+cate_id).attr('data-name',data);
                    $('#editCate').modal('hide');
                  }
                },
            });
  });

  //search js 
  function searchData()
{
    let keyword = $('#keyword').val().trim();
    window.location.href = "{{ route('categories.index') }}" + "?keyword="+keyword;
}
</script>
@endsection