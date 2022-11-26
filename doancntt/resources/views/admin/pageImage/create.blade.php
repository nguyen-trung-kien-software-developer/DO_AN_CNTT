@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Thêm Hình ảnh vào trang thông tin</span></h4>
                </div>
                <div class="card-body">

                    <div class="basic-form">
                        <form class="form-valide-with-icon" action="{{ route('admin.image.store') }}" method="POST"
                            novalidate="novalidate">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label for="url"> Đường dẫn hình ảnh:</label>
                                <input type="text" name="url" id="url" class="form-control" readonly>
                                @if (!empty($errors->first('url')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('url') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-primary" type="button">Tải ảnh lên</button>
                                    </div>

                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input">
                                        <input type="hidden" name="page_image" value="">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                    @if (!empty($errors->first('page_image')))
                                        <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                            {{ $errors->first('page_image') }}</div>
                                    @endif
                                </div>
                                <input type="hidden" id="image_type" value="page_image">

                                <div id="image_show">

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="description">Mô tả hình ảnh:</label>
                                <input type="text" name="description" id="description" class="form-control">
                                @if (!empty($errors->first('description')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('description') }}</div>
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
