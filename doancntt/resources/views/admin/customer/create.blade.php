@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tạo mới khách hàng</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form class="form-valide-with-icon" action="{{ route('admin.customer.store') }}" method="POST"
                            novalidate="novalidate">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label class="text-label">Tên khách hàng</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="name"
                                        placeholder="Tên khách hàng.." value="">
                                </div>
                                @if (!empty($errors->first('name')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('name') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="text-label">Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="email"
                                        placeholder="Email.." value="">
                                </div>
                                @if (!empty($errors->first('email')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('email') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="text-label">Số điện thoại</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-mobile" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="mobile"
                                        placeholder="Số điện thoại.." value="">
                                </div>
                                @if (!empty($errors->first('mobile')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('mobile') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="text-label">Mật khẩu</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="password" class="form-control" id="val-username1" name="password"
                                        placeholder="Mật khẩu.." value="">
                                </div>
                                @if (!empty($errors->first('password')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('password') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Tên người nhận</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="shipping_name"
                                        placeholder="Họ và tên người nhận.." value="">
                                </div>
                                @if (!empty($errors->first('shipping_name')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('shipping_name') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="text-label">Số điện thoại người nhận</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-mobile" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="shipping_mobile"
                                        placeholder="Số điện thoại người nhận.." value="">
                                </div>
                                @if (!empty($errors->first('shipping_mobile')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('shipping_mobile') }}</div>
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
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="is_active" class="form-check-input" value="1"
                                            checked>Kích
                                        hoạt
                                    </label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Thêm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
