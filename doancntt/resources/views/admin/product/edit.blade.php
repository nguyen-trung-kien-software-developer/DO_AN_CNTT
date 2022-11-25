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
                                        <span class="input-group-text"> <i class="fa fa-list" aria-hidden="true"></i></span>
                                    </div>
                                    <select class="form-control" name="parentCategory">
                                        <option value="">Vui lòng chọn danh mục cha</option>
                                        @foreach ($parentCategories as $parentCategory)
                                            <option value="{{ $parentCategory->id }}"
                                                {{ (!empty($product->parentCategory) && $product->parentCategory->id == $parentCategory->id) || (!empty($product->subCategory) && $product->subCategory->parentCategory->id == $parentCategory->id) ? 'selected' : '' }}>
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
                                        <option value="null" {{ empty($product->subCategory) ? 'selected' : '' }}>Không
                                            thuộc danh mục con nào</option>
                                        @if (!empty($product->subCategory))
                                            @foreach ($product->subCategory->parentCategory->subCategories as $subCategory)
                                                <option value="{{ $subCategory->id }}"
                                                    {{ $product->subCategory->id == $subCategory->id ? 'selected' : '' }}>
                                                    {{ $subCategory->name }}</option>
                                            @endforeach
                                        @else
                                            @foreach ($product->parentCategory->subCategories as $subCategory)
                                                <option value="{{ $subCategory->id }}">
                                                    {{ $subCategory->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                @if (!empty($errors->first('subCategory')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('subCategory') }}</div>
                                @endif
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

                            <div class="form-group">
                                <h4 class="card-title">Danh sách kích cỡ đã chọn</h4>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>Mã</th>
                                            <th>Số size</th>
                                            <th>Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody class="tbody-sizeAndColorlist">
                                        @foreach ($product->sizes as $size)
                                            <tr class="no-data">
                                                <input type="hidden" name="size_ids[]" value="{{ $size->id }}">
                                                <td>{{ $size->id }}</td>
                                                <td>{{ $size->size_number }}</td>
                                                <td><a class="btn btn-danger remove-size" href="javascript:void(0)"
                                                        onclick="deleteItemInBoughtList(this)"><i class="fa fa-trash"
                                                            aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="form-group">
                                <h4 class="card-title">Danh sách màu sắc đã chọn</h4>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>Mã</th>
                                            <th>Tên màu sắc</th>
                                            <th>Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody class="tbody-sizeAndColorlist">
                                        @foreach ($product->colors as $color)
                                            <tr class="no-data">
                                                <input type="hidden" name="color_ids[]" value="{{ $color->id }}">
                                                <td>{{ $color->id }}</td>
                                                <td>{{ $color->name }}</td>
                                                <td><a class="btn btn-danger remove-color" href="javascript:void(0)"
                                                        onclick="deleteItemInBoughtList(this)"><i class="fa fa-trash"
                                                            aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="form-group">
                                <label class="text-label">Kích cỡ</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-list"
                                                aria-hidden="true"></i></span>
                                    </div>
                                    <select class="form-control" name="size" id="size">
                                        <option value="">- Vui lòng chọn size -</option>
                                        @foreach ($sizes as $size)
                                            <option value="{{ $size->id }}">
                                                {{ $size->size_number }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                @if (!empty($errors->first('size')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('size') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <h4 class="card-title">Danh sách kích cỡ được chọn</h4>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered table-striped verticle-middle table-responsive-sm"
                                    id="size_table">
                                    <thead>
                                        <tr>
                                            <th>Mã</th>
                                            <th>Số size</th>
                                            <th>Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody class="tbody-sizeAndColorlist">
                                        <tr class="no-data">
                                            <td>No data</td>
                                            <td>No data</td>
                                            <td>No data</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="form-group">
                                <label class="text-label">Màu sắc</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-list"
                                                aria-hidden="true"></i></span>
                                    </div>
                                    <select class="form-control" name="color" id="color">
                                        <option value="">- Vui lòng chọn màu sắc -</option>
                                        @foreach ($colors as $color)
                                            <option value="{{ $color->id }}">
                                                {{ $color->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                @if (!empty($errors->first('color')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('color') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <h4 class="card-title">Danh sách màu sắc được chọn</h4>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered table-striped verticle-middle table-responsive-sm"
                                    id="color_table">
                                    <thead>
                                        <tr>
                                            <th>Mã</th>
                                            <th>Tên màu sắc</th>
                                            <th>Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody class="tbody-sizeAndColorlist">
                                        <tr class="no-data">
                                            <td>No data</td>
                                            <td>No data</td>
                                            <td>No data</td>
                                        </tr>
                                    </tbody>
                                </table>
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
                                            src="{{ asset("storage/uploads/$product->featured_image") }}" width="35%"
                                            height="300px">
                                    </a>
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

                            @can('Xem mô tả chi tiết sản phẩm')
                                <a href="{{ route('admin.product.descriptionDetails', [$product->id]) }}" target="_blank">
                                    <button type="button" class="btn btn-info mr-2">Mô tả chi
                                        tiết</button>
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
