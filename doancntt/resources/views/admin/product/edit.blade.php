@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Chỉnh sửa sản phẩm có mã <span style="color: red;">#{{ $product->id }}</span>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form class="form-valide-with-icon" action="{{ route('admin.product.update', [$product->id]) }}"
                            method="POST" novalidate="novalidate">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="text-label">Tên sản phẩm</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-archive" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="name"
                                        placeholder="Tên sản phẩm.." value="{{ $product->name }}">
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
                                        placeholder="Barcode.." value="{{ $product->barcode }}">
                                </div>
                                @if (!empty($errors->first('barcode')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('barcode') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Ngày tạo sản phẩm</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" id="date-format1" name="created_date"
                                        class="form-control date-time-1" placeholder="Ngày tạo sản phẩm.."
                                        data-dtp="dtp_qv6YX"
                                        value="{{ date('d-m-Y h:m:s', strtotime($product->created_date)) }}">
                                </div>
                                @if (!empty($errors->first('created_date')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('created_date') }}</div>
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
                                        placeholder="Trọng lượng.." value="{{ $product->weight }}">
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
                                    <input type="text" class="form-control" id="val-username1" name="made_by"
                                        value="{{ $product->made_by }}" placeholder="Sản xuất bởi..">
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
                                        value="{{ $product->inventory_qty }}" placeholder="Số lượng tồn kho..">
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
                                        placeholder="Gía gốc.." value="{{ $product->price }}">
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
                                        placeholder="Gía giảm.." value="{{ $product->sale_price }}">
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
                                            <option value="{{ $parentCategory->id }}"
                                                {{ $product->subCategory->parentCategory->id == $parentCategory->id ? 'selected' : '' }}>
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
                                        @foreach ($product->subCategory->parentCategory->subCategories as $subCategory)
                                            <option value="{{ $subCategory->id }}"
                                                {{ $product->subCategory->id == $subCategory->id ? 'selected' : '' }}>
                                                {{ $subCategory->name }}</option>
                                        @endforeach
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
                                            <option value="{{ $brand->id }}"
                                                {{ $product->brand->id == $brand->id ? 'selected' : '' }}>
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
                                        <input type="hidden" name="featured_image"
                                            value="{{ $product->featured_image }}">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                    @if (!empty($errors->first('featured_image')))
                                        <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                            {{ $errors->first('featured_image') }}</div>
                                    @endif
                                </div>
                                <input type="hidden" id="image_type" value="product_image">

                                <div id="image_show">
                                    <a href="{{ asset("storage/uploads/$product->featured_image") }}" target="_blank">
                                        <img id="upload-image"
                                            src="{{ asset("storage/uploads/$product->featured_image") }}"
                                            width="35%" height="300px">
                                    </a>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="is_active" class="form-check-input" value="1"
                                            {{ $product->is_active == 1 ? 'checked' : '' }}>Kích hoạt
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="featured" class="form-check-input" value="1"
                                            {{ $product->featured == 1 ? 'checked' : '' }}>Nổi bật
                                    </label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mr-5">Cập nhật</button>

                            @can('Xem đánh giá sản phẩm')
                                <a href="{{ route('admin.product.comments', $product->id) }}" target="_blank">
                                    <button type="button" class="btn btn-warning mr-2">Đánh giá sản phẩm</button>
                                </a>
                            @endcan

                            @can('Thêm hình ảnh liên quan sản phẩm')
                                <a href="{{ route('admin.product.imageItems', $product->id) }}" target="_blank">
                                    <button type="button" class="btn btn-secondary mr-2">Hình ảnh liên
                                        quan</button>
                                </a>
                            @endcan

                            @can('Xem mô tả sản phẩm')
                                <a href="{{ route('admin.product.description', [$product->id]) }}" target="_blank">
                                    <button type="button" class="btn btn-info mr-2">Mô tả</button>
                                </a>
                            @endcan

                            @can('Xem mô tả chi tiết sản phẩm')
                                <a href="{{ route('admin.product.descriptionDetails', [$product->id]) }}" target="_blank">
                                    <button type="button" class="btn btn-info mr-2">Mô tả chi
                                        tiết</button>
                                </a>
                            @endcan

                            @can('Xem hướng dẫn sử dụng sản phẩm')
                                <a href="{{ route('admin.product.useTutorials', [$product->id]) }}" target="_blank">
                                    <button type="button" class="btn btn-info mr-2">Hướng
                                        dẫn sử
                                        dụng</button>
                                </a>
                            @endcan

                            <a href="{{ route('site.product.show', [$product->slug]) }}" target="_blank">
                                <button type="button" class="btn btn-success" style="user-select: auto;">Preview
                                    <span class="btn-icon-right" style="user-select: auto;"><i class="fa fa-check"
                                            style="user-select: auto;"></i></span>
                                </button>
                            </a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
