@extends('admin.layout')
@section('content')
    <section class="content-header">
        <h1>
            {{ trans('message.home') }}
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i>{{ trans('message.home') }}</a></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>150</h3>
                        <p>{{ trans('message.neworder') }}</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>53<sup>%</sup></h3>
                        <p>{{ trans('message.rate') }}</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>44</h3>
                        <p>{{ trans('message.userR') }}</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>65</h3>
                        <p>{{ trans('message.unique') }}</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
            <section class="col-lg-12 connectedSortable">
                <!-- quick email widget -->
                <div class="box box-info">
                    <div class="box-header">
                        <i class="fa fa-envelope"></i>
                        <h3 class="box-title">{{ trans('message.quickemail') }}</h3>
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                                title="Remove">
                            <i class="fa fa-times"></i></button>
                        </div>
                        <!-- /. tools -->
                    </div>
                    <div class="box-body">
                        {!! Form::open(array('route' => 'email', 'method' => 'get', 'class' => 'sidebar-form')) !!}
                        <div>
                            {!! Form::email('email', '', array('class' => 'form-control' ,'placeholder' => 'Email...')) !!}
                        </div>
                        <div>
                            {!! Form::text('subject', '', array('class' => 'form-control', 'placeholder' => 'Tiêu đề...')) !!}
                        </div>
                        <div>
                            {!! Form::textarea('content', '', array('id' =>'editor1', 'class' => 'form-control', 'placeholder' => 'Message...', 'rows' => '3')) !!}
                        </div>
                        <div class="box-footer clearfix">
                            {!! Form::submit('Gửi tin nhắn', array('class' => 'pull-right btn btn-primary fa fa-arrow-circle-right')) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </section>
            <!-- right col -->
        </div>
        <!-- /.row (main row) -->
    </section>
<!-- /.content -->
@endsection
