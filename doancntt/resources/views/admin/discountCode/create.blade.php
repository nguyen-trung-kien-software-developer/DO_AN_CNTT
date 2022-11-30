@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tạo mới mã giảm giá</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form class="form-valide-with-icon" action="{{ route('admin.discountCode.store') }}" method="POST"
                            novalidate="novalidate">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label class="text-label">Mã sản phẩm</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-barcode" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="code"
                                        placeholder="Mã sản phẩm.." value="">
                                </div>
                                @if (!empty($errors->first('code')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('code') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Ngày bắt đầu giảm giá</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" id="date-format1" name="from_date" class="form-control date-time-1"
                                        placeholder="Ngày bắt đầu giảm giá.." data-dtp="dtp_qv6YX" value="">
                                </div>
                                @if (!empty($errors->first('from_date')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('from_date') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Ngày kết thúc giảm giá</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" id="date-format2" name="to_date" class="form-control"
                                        placeholder="Ngày kết thúc giảm giá.." data-dtp="dtp_qv6YX" value="">
                                </div>
                                @if (!empty($errors->first('to_date')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('to_date') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Giá giảm</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-money" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="number" class="form-control" id="val-username1" name="discount_price"
                                        placeholder="Gía giảm.." value="">
                                </div>
                                @if (!empty($errors->first('discount_price')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('discount_price') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="description">Mô tả mã giảm giá</label>
                                <input type="text" name="description" id="description" class="form-control">
                                @if (!empty($errors->first('description')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('description') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="active" class="form-check-input" value="1" checked>Kích
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
