@extends('layouts.admin')
@section('content')
<div class="row bread_part">
    <div class="col-sm-12 bread_col">
        <h4 class="pull-left page-title bread_title">Banner</h4>
        <ol class="breadcrumb pull-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Banner</a></li>
            <li class="active">View</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="card-title card_top_title"><i class="fa fa-gg-circle"></i> View Banner Information</h3>
                    </div>
                    <div class="col-md-4 text-right">
                         @if(Auth::user()->role_id<=2)
                          <a href="{{url('dashboard/package')}}" class="btn btn-md btn-primary waves-effect card_top_button"><i class="fa fa-th"></i> All Package</a>
                        @else
                          <a href="{{url('dashboard/package/my')}}" class="btn btn-md btn-primary waves-effect card_top_button"><i class="fa fa-th"></i> My Package</a>
                        @endif
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <table class="table table-bordered table-striped table-hover custom_view_table">
                            <tr>
                                <td>Title</td>
                                <td>:</td>
                                <td>{{$data->ban_title}}</td>
                            </tr>
                            <tr>
                                <td>Details</td>
                                <td>:</td>
                                <td>{{$data->ban_details}}</td>
                            </tr>
                            <tr>
                                <td>Button</td>
                                <td>:</td>
                                <td>{{$data->ban_button}}</td>
                            </tr>
                            <tr>
                                <td>Button URL</td>
                                <td>:</td>
                                <td>{{$data->ban_button_url}}</td>
                            </tr>
                            <tr>
                                <td>Photo</td>
                                <td>:</td>
                                <td>
                                    @if($data->ban_image!='')
                                        <img class="table_image_ban_big" src="{{asset('uploads/banner/'.$data->ban_image)}}" alt="banner"/>
                                    @else
                                        <img class="table_image_ban_big" src="{{asset('uploads')}}/no-image-big.jpg" alt="banner"/>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Create Time</td>
                                <td>:</td>
                                <td>{{$data->created_at->format('d-m-Y | h:i:s a')}}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
            <div class="card-footer card_footer_expode">
                <a href="#" class="btn btn-secondary waves-effect">PRINT</a>
                <a href="#" class="btn btn-warning waves-effect">EXCEL</a>
                <a href="#" class="btn btn-success waves-effect">PDF</a>
            </div>
        </div>
    </div>
</div>
@endsection
