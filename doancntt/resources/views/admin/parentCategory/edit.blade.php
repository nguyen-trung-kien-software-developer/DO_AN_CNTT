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
                            <label class="text-label">Bài giới thiệu</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <select class="form-control" name="introduction">
                                    <option value="">Vui lòng chọn bài giới thiệu</option>
                                    @foreach ($introductions as $introduction)
                                        <option value="{{ $introduction->id }}"
                                            {{ $parentCategory->introduction_id == $introduction->id ? 'selected' : '' }}>
                                            {{ $introduction->title }}</option>
                                    @endforeach
                                    <option value="null" {{ $parentCategory->introduction_id == null ? 'selected' : '' }}>
                                        Không có</option>
                                </select>
                            </div>
                            @if (!empty($errors->first('customer')))
                                <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                    {{ $errors->first('customer') }}</div>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
