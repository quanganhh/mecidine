@extends('master')
@section('content')
<div class="container">
<div id="wrap-inner" class="col-md-9">
    <div class="row list-product">
        <div class="col-md-12">
            <div class="clearfix"></div>
            <h3>{{ trans('message.searchkey') }}: <span>{{ $key }}</span></h3>
            <span>Tìm thấy {{ count($product) }} sản phẩm : </span><br/><br/>
            @foreach($product as $item)
            <div class=" hoverimg col-xs-6 col-xs-offset-3 col-sm-offset-0 col-md-offset-0 col-sm-6 col-md-3 text-center post">
                <a href="{{ route('productDetail', $item->id) }}">
                <img src="{{ URL::to('/').'/uploads/images/'.$item->image }}"  class="hihi">
                </a>
                <span>{{ number_format($item->unit_price) }}</span> vnđ
                <p><a href="{{ route('productDetail',$item->id) }}">{{ $item->name }}</a></p>
                <div class=" hover col-xs-12 col-sm-12 col-md-12">
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</div>
@endsection
