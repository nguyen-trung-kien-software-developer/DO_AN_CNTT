@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tạo mới sản phẩm</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form class="form-valide-with-icon" action="{{ route('admin.product.store') }}" method="POST"
                            novalidate="novalidate">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label class="text-label">Tên sản phẩm</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-archive" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="name"
                                        placeholder="Tên sản phẩm.." value="">
                                </div>
                                @if (!empty($errors->first('name')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('name') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Barcode</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-barcode" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="barcode"
                                        placeholder="Barcode.." value="">
                                </div>
                                @if (!empty($errors->first('barcode')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('barcode') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Trọng lượng</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="number" class="form-control" id="val-username1" name="weight"
                                        placeholder="Trọng lượng.." value="">
                                </div>
                                @if (!empty($errors->first('weight')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('weight') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Sản xuất bởi</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-plane" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="made_by" value=""
                                        placeholder="Sản xuất bởi..">
                                </div>
                                @if (!empty($errors->first('made_by')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('made_by') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Số lượng tồn kho</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-th" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="number" class="form-control" id="val-username1" name="inventory_qty"
                                        value="" placeholder="Số lượng tồn kho..">
                                </div>
                                @if (!empty($errors->first('inventory_qty')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('inventory_qty') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Gía gốc</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-money" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="number" class="form-control" id="val-username1" name="price"
                                        placeholder="Gía gốc.." value="">
                                </div>
                                @if (!empty($errors->first('price')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('price') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Gía giảm</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-money" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="number" class="form-control" id="val-username1" name="sale_price"
                                        placeholder="Gía giảm.." value="">
                                </div>
                                @if (!empty($errors->first('sale_price')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('sale_price') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Danh mục cha</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-list"
                                                aria-hidden="true"></i></span>
                                    </div>
                                    <select class="form-control" name="parentCategory">
                                        <option value="">Vui lòng chọn danh mục cha</option>
                                        @foreach ($parentCategories as $parentCategory)
                                            <option value="{{ $parentCategory->id }}">
                                                {{ $parentCategory->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @if (!empty($errors->first('parentCategory')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('parentCategory') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Danh mục con</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-list"
                                                aria-hidden="true"></i></span>
                                    </div>
                                    <select class="form-control" name="subCategory">
                                        <option value="">Vui lòng chọn danh mục con</option>

                                    </select>
                                </div>
                                @if (!empty($errors->first('subCategory')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('subCategory') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Thương hiệu</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-th-list" aria-hidden="true"></i>
                                        </span>
                                    </div>

                                    <select class="form-control" name="brand">
                                        <option value="">Vui lòng chọn thương hiệu</option>
                                        @foreach ($brands as $brand)
                                            <option value="{{ $brand->id }}">
                                                {{ $brand->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                @if (!empty($errors->first('brand')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('brand') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-primary" type="button">ảnh nổi bật</button>
                                    </div>

                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input">
                                        <input type="hidden" name="featured_image" value="">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                    @if (!empty($errors->first('featured_image')))
                                        <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                            {{ $errors->first('featured_image') }}</div>
                                    @endif
                                </div>
                                <input type="hidden" id="image_type" value="product_image">

                                <div id="image_show">

                                </div>
                            </div>

                            <div class="form-group" style="user-select: auto;">
                                <div class="form-check form-check-inline" style="user-select: auto;">
                                    <label class="form-check-label" style="user-select: auto;">
                                        <input type="checkbox" name="is_active" class="form-check-input" value="1"
                                            checked>Kích hoạt
                                    </label>
                                </div>
                            </div>

                            <div class="form-group" style="user-select: auto;">
                                <div class="form-check form-check-inline" style="user-select: auto;">
                                    <label class="form-check-label" style="user-select: auto;">
                                        <input type="checkbox" name="featured" class="form-check-input" value="1"
                                            checked>Nổi bật
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
