@extends('admin.layout')
@section('content')
<div class="col-lg-12">
        <h3 class="text-center">{{ trans('message.edit_product') }}</h3>
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
        <div class="col-md-12">
        </div>
     {!! Form::model($data, ['route' => ['products.update', $data->id], 'method' => 'PUT', 'files' => true]) !!}
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="name">{{ trans('message.name_pr') }}</label>
                    <input type="text" name="name" class="form-control" required="required" value="{{ $data->name }}">    
                </div>
                <div class="form-group">
                    <label for="category_id">{{ trans('message.category') }}</label>
                    {{ Form::select('category_id', $cats, null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    <label for="image">{{ trans('message.image') }}</label><br/>
                    <input type="file" name="image" value="{{ $data->image }}"  required="required"/><br/>
                    <img src="{{ URL::to('/').'/uploads/images/'.$data->image }}" alt="" width="120" height="125">
                </div>
                <div class="form-group">
                    <label for="price">{{ trans('message.price') }}</label>
                    <input type="number" name="unit_price" value="{{ $data->unit_price }}" class="form-control" required="required">
                </div>
                <div class="form-group">
                	<labe for="hot"><b>{{ trans('message.hot') }}</b></label><br/>
                	</strong><input type="checkbox" name="hot" value="{{ ($data->hot == 1) ? 1 : 0 }}" {{ ($data->hot == 1) ? 'checked' : '' }}>
                </div>
                <div class="form-group">
                    <label for="sale">{{ trans('message.sale') }}</label>
                    <input type="number" name="promotion_price" class="form-control" value="{{ $data->promotion_price }}">
                </div>
            </div>
            <div class="col-lg-6">
                 <div class="form-group">
                    <label for="qty">{{ trans('message.qty') }}</label>
                    <input type="number" name="quantity" class="form-control" value="{{ $data->quantity }}" required="required">
                </div>
                <div class="form-group">
                    <label for="description">{{ trans('message.short_des') }}</label>
                    <textarea name="short_description" class="form-control" rows="3" required="required">{{ $data->short_description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="description">{{ trans('message.full_des') }}</label>
                     <textarea name="full_description" class="form-control" id="editor1" required="required">{!! $data->full_description !!}</textarea>
                </div>
            </div>
        <div class="col-lg-3 offset-3">
                <button type="submit" class="btn btn-primary pull-left btn-block text-center">{{ trans('message.save_product') }}</button>
        </div>
	{!! Form::close() !!}
        </div>
   </div>
@endsection