@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Chỉnh sửa danh mục chính có mã <span
                            style="color: red;">#{{ $parentCategory->id }}</span>
                    </h4>
                </div>
                <div class="card-body">
                    <form class="form-valide-with-icon"
                        action="{{ route('admin.parentCategory.update', [$parentCategory->id]) }}" method="POST"
                        novalidate="novalidate">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="text-label">Tên danh mục chính</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-header" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="val-username1" name="name"
                                    placeholder="Danh mục chính.." value="{{ $parentCategory->name }}">
                            </div>
                            @if (!empty($errors->first('name')))
                                <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                    {{ $errors->first('name') }}</div>
                            @endif
                        </div>

                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-primary" type="button">ảnh icon</button>
                                </div>

                                <div class="custom-file">
                                    <input type="file" class="custom-file-input">
                                    <input type="hidden" name="icon_image" value="{{ $parentCategory->icon_image }}">
                                    <label class="custom-file-label">Choose file</label>
                                </div>
                                @if (!empty($errors->first('icon_image')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('icon_image') }}</div>
                                @endif
                            </div>
                            <input type="hidden" id="image_type" value="product_image">

                            <div id="image_show">
                                <a href="{{ asset("storage/uploads/$parentCategory->icon_image") }}" target="_blank">
                                    <img id="upload-image"
                                        src="{{ asset("storage/uploads/$parentCategory->icon_image") }}" width="35%"
                                        height="300px">
                                </a>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-primary" type="button">ảnh banner</button>
                                </div>

                                <div class="custom-file">
                                    <input type="file" class="custom-file-input">
                                    <input type="hidden" name="banner_image" value="{{ $parentCategory->banner_image }}">
                                    <label class="custom-file-label">Choose file</label>
                                </div>
                                @if (!empty($errors->first('banner_image')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('banner_image') }}</div>
                                @endif
                            </div>
                            <input type="hidden" id="image_type" value="product_image">

                            <div id="image_show">
                                <a href="{{ asset("storage/uploads/$parentCategory->banner_image") }}" target="_blank">
                                    <img id="upload-image"
                                        src="{{ asset("storage/uploads/$parentCategory->banner_image") }}" width="35%"
                                        height="300px">
                                </a>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
