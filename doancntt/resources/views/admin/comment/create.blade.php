@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        Tạo mới đánh giá
                    </h4>
                </div>
                <div class="card-body">
                    <form class="form-valide-with-icon" action="{{ route('admin.comment.create') }}" method="POST"
                        novalidate="novalidate">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label class="text-label">Họ Tên</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                </div>
                                <input type="text" class="form-control" id="val-username1" name="fullname"
                                    placeholder="Họ Tên.." value="">
                            </div>
                            @if (!empty($errors->first('fullname')))
                                <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                    {{ $errors->first('fullname') }}</div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="text-label">Sản Phẩm</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-list" aria-hidden="true"></i></span>
                                </div>
                                <select class="form-control" name="product">
                                    <option value="">Vui lòng chọn sản phẩm</option>
                                    @foreach ($products as $product)
                                        <option value="{{ $product->id }}">
                                            {{ $product->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @if (!empty($errors->first('product')))
                                <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                    {{ $errors->first('product') }}</div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="text-label">Ngày tạo đánh giá</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <input type="text" id="date-format1" name="created_date" class="form-control date-time-1"
                                    placeholder="Ngày tạo đánh giá.." data-dtp="dtp_qv6YX" value="">
                            </div>
                            @if (!empty($errors->first('created_date')))
                                <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                    {{ $errors->first('created_date') }}</div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="text-label">Số sao</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-star" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <input type="number" class="form-control" id="val-username1" name="star" value=""
                                    placeholder="Số sao..">
                            </div>
                            @if (!empty($errors->first('star')))
                                <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                    {{ $errors->first('star') }}</div>
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
                            <label class="text-label">Mô tả</label>
                            <div class="input-group">
                                <textarea name="description" class="form-control" id="note" cols="30" rows="7"></textarea>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Thêm</button>
                    </form>

                </div>
            </div>
        </div>

    </div>
@endsection
