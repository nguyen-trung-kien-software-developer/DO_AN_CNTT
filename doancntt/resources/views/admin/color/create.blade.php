@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tạo mới màu sắc</span>
                    </h4>
                </div>
                <div class="card-body">
                    <form class="form-valide-with-icon" action="{{ route('admin.color.store') }}" method="POST"
                        novalidate="novalidate">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label class="text-label">Tên màu sắc</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-header" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="val-username1" name="name"
                                    placeholder="Tên màu sắc.." value="">
                            </div>
                            @if (!empty($errors->first('name')))
                                <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                    {{ $errors->first('name') }}</div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="text-label">Mã màu sắc</label>
                            <div class="input-group">
                                <div class="asColorPicker-wrap">
                                    <input type="text" name="color_code"
                                        class="gradient-colorpicker form-control asColorPicker-input" value="#bee0ab"><a
                                        href="#" class="asColorPicker-clear"></a>
                                </div>
                            </div>

                            @if (!empty($errors->first('color_code')))
                                <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                    {{ $errors->first('color_code') }}</div>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary">Thêm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
