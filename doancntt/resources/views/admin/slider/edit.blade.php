@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Chỉnh sửa slider có mã <span style="color: red;">#{{ $slider->id }}</span>
                    </h4>
                </div>
                <div class="card-body">
                    <form class="form-valide-with-icon" action="{{ route('admin.slider.update', $slider->id) }}"
                        method="POST" novalidate="novalidate">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="text-label">Tên slider</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-sliders" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="val-username1" name="name"
                                    placeholder="Tên slider.." value="{{ $slider->name }}">
                            </div>
                            @if (!empty($errors->first('name')))
                                <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                    {{ $errors->first('name') }}</div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="text-label">Hình ảnh (1600px x 560px)</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-primary" type="button">slider</button>
                                </div>

                                <div class="custom-file">
                                    <input type="file" class="custom-file-input">
                                    <input type="hidden" name="thumb" value="{{ $slider->thumb }}">
                                    <label class="custom-file-label">Choose file</label>
                                </div>
                                @if (!empty($errors->first('thumb')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('thumb') }}</div>
                                @endif
                            </div>
                            <input type="hidden" id="image_type" value="slider_image">

                            <div id="image_show">
                                <a href="{{ asset("storage/uploads/$slider->thumb") }}" target="_blank">
                                    <img id="upload-image" src="{{ asset("storage/uploads/$slider->thumb") }}" width="35%"
                                        height="300px">
                                </a>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="text-label">Đường dẫn</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-link" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="val-username1" name="url"
                                    placeholder="Đường dẫn.." value="{{ $slider->url }}">
                            </div>
                            @if (!empty($errors->first('url')))
                                <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                    {{ $errors->first('url') }}</div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="text-label">Thứ tự sắp xếp</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-sort-numeric-asc"
                                            aria-hidden="true"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="val-username1" name="sort_by"
                                    placeholder="Thứ tự sắp xếp.." value="{{ $slider->sort_by }}">
                            </div>
                            @if (!empty($errors->first('sort_by')))
                                <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                    {{ $errors->first('sort_by') }}</div>
                            @endif
                        </div>

                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" name="active" class="form-check-input" value="1"
                                        {{ $slider->active = 1 ? 'checked' : '' }}>Kích
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
@endsection
