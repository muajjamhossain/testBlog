@extends('layouts.admin')
@section('content')
<div class="row bread_part">
    <div class="col-sm-12 bread_col">
        <h4 class="pull-left page-title bread_title">Product</h4>
        <ol class="breadcrumb pull-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Product</a></li>
            <li class="active">
              @if(@$data)
              Edit
              @else
              Add
              @endif
            </li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <form class="form-horizontal" method="post" action="{{url('dashboard/package/submit')}}" enctype="multipart/form-data">
          @csrf
          <div class="card">
              <div class="card-header">
                  <div class="row">
                      <div class="col-md-8">
                          <h3 class="card-title card_top_title"><i class="fa fa-gg-circle"></i>
                          @if(@$data)
                          Edit Product Information
                          @else
                          Add Product Information
                          @endif
                           </h3>
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
              <div class="card-body card_form">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-7">
                        @if(Session::has('success'))
                          <div class="alert alert-success alertsuccess" role="alert">
                             <strong>Successfully!</strong> upload product information.
                          </div>
                        @endif
                        @if(Session::has('error'))
                          <div class="alert alert-warning alerterror" role="alert">
                             <strong>Opps!</strong> please try again.
                          </div>
                        @endif
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <div class="form-group row custom_form_group{{ $errors->has('title') ? ' has-error' : '' }}">
                        <label class="col-sm-3 control-label">Title:<span class="req_star">*</span></label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="title" value="{{ @$data ? @$data->pd_title: old('title')}}">
                          @if ($errors->has('title'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('title') }}</strong>
                              </span>
                          @endif
                        </div>
                    </div>
                    <div class="form-group row custom_form_group{{ $errors->has('minute') ? ' has-error' : '' }}">
                        <label class="col-sm-3 control-label">Minute:<span class="req_star">*</span></label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="minute" value="{{ @$data ? @$data->pd_minute: old('minute')}}">
                          @if ($errors->has('minute'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('minute') }}</strong>
                              </span>
                          @endif
                        </div>
                    </div>
                    <div class="form-group row custom_form_group{{ $errors->has('reguler') ? ' has-error' : '' }}">
                        <label class="col-sm-3 control-label">Reguler Price:<span class="req_star">*</span></label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="reguler" value="{{ @$data ? @$data->pd_reguler: old('reguler')}}">
                          @if ($errors->has('reguler'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('reguler') }}</strong>
                              </span>
                          @endif
                        </div>
                    </div>
                    <div class="form-group row custom_form_group{{ $errors->has('oparetor') ? ' has-error' : '' }}">
                        <label class="col-sm-3 control-label">Oparetor Name:<span class="req_star">*</span></label>
                        <div class="col-sm-7">
                          <select class="form-control" name="oparetor">
                            <option value="">Select Oparetor Name</option>
                            <option value="GrameenPhone">GrameenPhone</option>
                            <option value="Banglalink">Banglalink</option>
                            <option value="Robi">Robi</option>
                            <option value="Airtel">Airtel</option>
                            <option value="Talitalk">Talitalk</option>
                          </select>
                          @if ($errors->has('oparetor'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('oparetor') }}</strong>
                              </span>
                          @endif
                        </div>
                    </div>
                    <div class="form-group row custom_form_group{{ $errors->has('validity') ? ' has-error' : '' }}">
                        <label class="col-sm-3 control-label">Validity:<span class="req_star">*</span></label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="validity" value="{{ @$data ? @$data->pd_val: old('validity')}}">
                          @if ($errors->has('validity'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('validity') }}</strong>
                              </span>
                          @endif
                        </div>
                    </div>
                    <div class="form-group row custom_form_group{{ $errors->has('pic') ? ' has-error' : '' }}">
                        <label class="col-sm-3 control-label">Product Image:<span class="req_star">*</span></label>
                        <div class="col-sm-7">
                          <div class="input-group">
                              <span class="input-group-btn">
                                  <span class="btn btn-default btn-file btnu_browse">
                                      Browse… <input type="file" name="pic" id="imgInp">
                                  </span>
                              </span>
                              <input type="text" class="form-control" readonly>
                          </div>
                          @if ($errors->has('pic'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('pic') }}</strong>
                              </span>
                          @endif
                          <img id='img-upload'/>
                        </div>
                    </div>

                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="form-group row custom_form_group">
                        <label class="col-sm-3 control-label">Details:</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="details" value="{{ @$data ? @$data->pd_subtitle: old('details')}}">
                        </div>
                    </div>
                    <div class="form-group row custom_form_group{{ $errors->has('data') ? ' has-error' : '' }}">
                        <label class="col-sm-3 control-label">Data:<span class="req_star">*</span></label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="data" value="{{ @$data ? @$data->pd_data: old('data')}}">
                          @if ($errors->has('data'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('data') }}</strong>
                              </span>
                          @endif
                        </div>
                    </div>
                    <div class="form-group row custom_form_group{{ $errors->has('offer') ? ' has-error' : '' }}">
                        <label class="col-sm-3 control-label">Offer Price:<span class="req_star">*</span></label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="offer" value="{{ @$data ? @$data->pd_offer: old('offer')}}">
                          @if ($errors->has('offer'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('offer') }}</strong>
                              </span>
                          @endif
                        </div>
                    </div>
                    <div class="form-group row custom_form_group{{ $errors->has('offer_type') ? ' has-error' : '' }}">
                        <label class="col-sm-3 control-label">Offer Type:<span class="req_star">*</span></label>
                        <div class="col-sm-7">
                          <select class="form-control" name="offer_type">
                            <option value="">Select Offer Type</option>
                            <option value="Data-Pack">Data Pack</option>
                            <option value="Minute-Pack">Minute Pack</option>
                            <option value="Combo-Pack">Combo Pack</option>
                          </select>
                          @if ($errors->has('offer_type'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('offer_type') }}</strong>
                              </span>
                          @endif
                        </div>
                    </div>
                    <div class="form-group row custom_form_group">
                        <label class="col-sm-3 control-label">Number Check:</span></label>
                        <div class="col-sm-7">
                          <input type="checkbox" class="form-control" name="check" value="1" {{@$data->pd_check==1 ? 'checkrd': ''}}>
                        </div>
                    </div>

                  </div>
                </div>

              </div>
              <div class="card-footer card_footer_button text-center">
                  <button type="submit" class="btn btn-primary waves-effect">UPLOAD</button>
              </div>
          </div>
        </form>
    </div>
</div>
@endsection
