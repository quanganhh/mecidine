@extends('admin.layout')
@section('content')
<div class="col-lg-12">
        <h3 class="text-center">{{ trans('message.create_product') }}</h3>
</div>
    <div class="row">
        <div class="col-lg-12">
        	<div class="col-md-4">
        		@if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        	</div>
        </div>
        <div class="col-md-12">
        	  {!! Form::open(['route' => ['products.store'], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="name">{{ trans('message.name_pr') }}</label>
                    <input type="text" name="name" class="form-control" required="required">    
                </div>
                <div class="form-group">
                    <label for="category_id">{{ trans('message.category') }}</label>
                    <select name="category_id" class="form-control" id="cat_id">
                        @foreach ($categories as $key => $value)
                            <option value="{{ $value->id }}">{{ $value->category_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">{{ trans('message.image') }}</label><br/>
                    <input type="file" id="name" name="image" required="required"/>
                </div>
                <div class="form-group">
                    <label for="price">{{ trans('message.price') }}</label>
                    <input type="number" name="unit_price" class="form-control" required="required">
                </div>
                <div class="form-group">
                	<labe for="hot"><b>{{ trans('message.hot') }}</b></label><br/>
                	</strong><input type="checkbox" name="hot">
                </div>
                <div class="form-group">
                    <label for="sale">{{ trans('message.sale') }}</label>
                    <input type="number" name="promotion_price" class="form-control">
                </div>
                 <div class="form-group">
                    <label for="qty">{{ trans('message.qty') }}</label>
                    <input type="number" name="quantity" class="form-control" required="required">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="description">{{ trans('message.short_des') }}</label>
                    <textarea name="short_description" class="form-control" rows="3" required="required"></textarea>
                </div>
                <div class="form-group">
                    <label for="description">{{ trans('message.full_des') }}</label>
                     <textarea name="full_description" class="form-control " id="editor1" required="required"></textarea>
                </div>
            </div>
        <div class="col-lg-3 offset-3">
            <button type="submit" class="btn btn-primary btn-block text-center">Thêm sản phẩm</button>
        </div>
	{!! Form::close() !!}
        </div>
   </div>
@endsection