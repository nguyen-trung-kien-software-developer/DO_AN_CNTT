@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tạo mới danh mục chính</span>
                    </h4>
                </div>
                <div class="card-body">
                    <form class="form-valide-with-icon" action="{{ route('admin.parentCategory.store') }}" method="POST"
                        novalidate="novalidate">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label class="text-label">Tên danh mục chính</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-header" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="val-username1" name="name"
                                    placeholder="Danh mục chính.." value="">
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
                                    <input type="hidden" name="icon_image" value="">
                                    <label class="custom-file-label">Choose file</label>
                                </div>
                                @if (!empty($errors->first('icon_image')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('icon_image') }}</div>
                                @endif
                            </div>
                            <input type="hidden" id="image_type" value="product_image">

                            <div id="image_show">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-primary" type="button">ảnh banner</button>
                                </div>

                                <div class="custom-file">
                                    <input type="file" class="custom-file-input">
                                    <input type="hidden" name="banner_image" value="">
                                    <label class="custom-file-label">Choose file</label>
                                </div>
                                @if (!empty($errors->first('banner_image')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('banner_image') }}</div>
                                @endif
                            </div>
                            <input type="hidden" id="image_type" value="product_image">

                            <div id="image_show">

                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Thêm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
