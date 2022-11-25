@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Chỉnh sửa danh mục phụ có mã <span
                            style="color: red;">#{{ $subCategory->id }}</span>
                    </h4>
                </div>
                <div class="card-body">
                    <form class="form-valide-with-icon" action="{{ route('admin.subCategory.update', [$subCategory->id]) }}"
                        method="POST" novalidate="novalidate">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="text-label">Tên danh mục phụ</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-header" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="val-username1" name="name"
                                    placeholder="Danh mục phụ.." value="{{ $subCategory->name }}">
                            </div>
                            @if (!empty($errors->first('name')))
                                <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                    {{ $errors->first('name') }}</div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="text-label">Danh mục chính</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <select class="form-control" name="parentCategory">
                                    <option value="">Vui lòng chọn danh mục chính</option>
                                    @foreach ($parentCategories as $parentCategory)
                                        <option value="{{ $parentCategory->id }}"
                                            {{ $subCategory->parentCategory->id == $parentCategory->id ? 'selected' : '' }}>
                                            {{ $parentCategory->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            @if (!empty($errors->first('parentCategory')))
                                <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                    {{ $errors->first('parentCategory') }}</div>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
