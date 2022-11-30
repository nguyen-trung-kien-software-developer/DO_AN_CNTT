@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tạo mới chi nhánh</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form class="form-valide-with-icon" action="{{ route('admin.branch.store') }}" method="POST"
                            novalidate="novalidate">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label class="text-label">Tên chi nhánh</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-home"
                                                aria-hidden="true"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="name"
                                        placeholder="Tên chi nhánh.." value="">
                                </div>
                                @if (!empty($errors->first('name')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('name') }}</div>
                                @endif
                            </div>

                            @include('admin.layout.address')

                            <div class="form-group">
                                <label class="text-label">Số nhà, tên đường</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="housenumber_street"
                                        value="" placeholder="Số nhà, tên đường..">
                                </div>
                                @if (!empty($errors->first('housenumber_street')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('housenumber_street') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Thứ tự chi nhánh</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-home"
                                                aria-hidden="true"></i></span>
                                    </div>
                                    <input type="number" class="form-control" id="val-username1" name="order"
                                        placeholder="Thứ tự chi nhánh.." value="">
                                </div>
                                @if (!empty($errors->first('order')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('order') }}</div>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary">Thêm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
