@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Danh Sách Sản Phẩm</h4>
                </div>
                <div class="card-body">
                    <span class="scroll left-scroll"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
                    <span class="scroll right-scroll"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                    <div class="table-responsive">
                        <div id="example_wrapper" class="dataTables_wrapper">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>Mã</th>
                                        <th>Barcode</th>
                                        <th>Tên</th>
                                        <th>Hình ảnh nổi bật</th>
                                        <th>Gía gốc</th>
                                        <th>Gía giảm</th>
                                        <th>Danh mục chính</th>
                                        <th>Danh mục phụ</th>
                                        <th>Ngày tạo</th>
                                        <th>Kích hoạt</th>
                                        <th>Nổi bật</th>
                                        @can('Sao chép thông tin sản phẩm')
                                            <th>Sao chép thông tin</th>
                                        @endcan
                                        @can('Xem đánh giá sản phẩm')
                                            <th>Đánh giá</th>
                                        @endcan
                                        @can('Thêm hình ảnh liên quan sản phẩm')
                                            <th>Hình ảnh liên quan</th>
                                        @endcan
                                        @can('Xem mô tả chi tiết sản phẩm')
                                            <th>Mô tả chi tiết</th>
                                        @endcan
                                        <th>Xem Preview</th>
                                        @can('Chỉnh sửa sản phẩm')
                                            <th>Chỉnh sửa</th>
                                        @endcan
                                        @can('Xóa sản phẩm')
                                            <th>Xóa</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td>{{ $product->barcode }}</td>
                                            <td>{{ $product->name }}</td>
                                            @php
                                                $featured_image = $product->featured_image;
                                            @endphp
                                            <td class="text-center">
                                                <a href="{{ asset("storage/uploads/$featured_image") }}"
                                                    target="_blank"><img
                                                        src="{{ asset("storage/uploads/$featured_image") }}"
                                                        width="70px"></a>
                                            </td>
                                            <td>{{ number_format($product->price) }} VND</td>
                                            <td>{{ number_format($product->sale_price) }} VND</td>
                                            <td>{{ $product->parentCategory->name }}
                                            </td>
                                            <td>{{ !empty($product->sub_category_id) ? $product->subCategory->name : '' }}
                                            </td>
                                            <td>{{ $product->created_date }}</td>
                                            <td>
                                                {!! $product->is_active == 1
                                                    ? '<i class="fa fa-check-square" style="color: green;" aria-hidden="true"></i>'
                                                    : '<i class="fa fa-times-circle-o" style="color: red;" aria-hidden="true"></i>' !!}
                                            </td>
                                            <td>
                                                {!! $product->featured == 1
                                                    ? '<i class="fa fa-check-square" style="color: green;" aria-hidden="true"></i>'
                                                    : '<i class="fa fa-times-circle-o" style="color: red;" aria-hidden="true"></i>' !!}
                                            </td>
                                            @can('Sao chép thông tin sản phẩm')
                                                <td>
                                                    <form action="{{ route('admin.product.copy') }}" method="POST">
                                                        @csrf
                                                        @method('POST')
                                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                        <button type="submit" class="btn btn-warning">Copy
                                                        </button>
                                                    </form>
                                                </td>
                                            @endcan
                                            @can('Xem đánh giá sản phẩm')
                                                <td><a href="{{ route('admin.product.comments', $product->id) }}"
                                                        class="btn btn-primary">Xem</a></td>
                                            @endcan
                                            @can('Thêm hình ảnh liên quan sản phẩm')
                                                <td><a href="{{ route('admin.product.imageItems', $product->id) }}"
                                                        class="btn btn-secondary">Thêm</a></td>
                                            @endcan
                                            @can('Xem mô tả chi tiết sản phẩm')
                                                <td><a href="{{ route('admin.product.descriptionDetails', [$product->id]) }}"
                                                        class="btn btn-primary">Xem</a></td>
                                            @endcan
                                            <td>
                                                <a href="{{ route('site.product.show', [$product->slug]) }}"
                                                    class="btn btn-success" target="_blank">Preview</a>

                                            </td>
                                            @can('Chỉnh sửa sản phẩm')
                                                <td><a href="{{ route('admin.product.edit', [$product->id]) }}"
                                                        class="btn btn-info">Sửa</a></td>
                                            @endcan
                                            @can('Xóa sản phẩm')
                                                <td><button class="btn btn-danger btn sweet-confirm destroy"
                                                        data-url="{{ route('admin.product.destroy', $product->id) }}">Xóa</button>
                                                </td>
                                            @endcan
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Mã</th>
                                        <th>Barcode</th>
                                        <th>Tên</th>
                                        <th>Hình ảnh nổi bật</th>
                                        <th>Gía gốc</th>
                                        <th>Gía giảm</th>
                                        <th>Danh mục chính</th>
                                        <th>Danh mục phụ</th>
                                        <th>Ngày tạo</th>
                                        <th>Kích hoạt</th>
                                        <th>Nổi bật</th>
                                        @can('Sao chép thông tin sản phẩm')
                                            <th>Sao chép thông tin</th>
                                        @endcan
                                        @can('Xem đánh giá sản phẩm')
                                            <th>Đánh giá</th>
                                        @endcan
                                        @can('Thêm hình ảnh liên quan sản phẩm')
                                            <th>Hình ảnh liên quan</th>
                                        @endcan
                                        @can('Xem mô tả chi tiết sản phẩm')
                                            <th>Mô tả chi tiết</th>
                                        @endcan
                                        <th>Xem Preview</th>
                                        @can('Chỉnh sửa sản phẩm')
                                            <th>Chỉnh sửa</th>
                                        @endcan
                                        @can('Xóa sản phẩm')
                                            <th>Xóa</th>
                                        @endcan
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
