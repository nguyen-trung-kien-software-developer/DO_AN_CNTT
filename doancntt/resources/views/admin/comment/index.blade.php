@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Danh Sách Tất Cả Đánh Gía Của Sản Phẩm</span></h4>
                </div>
                <div class="card-body">
                    <span class="scroll left-scroll"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
                    <span class="scroll right-scroll"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                    <div class="table-responsive">
                        <div id="example_wrapper" class="dataTables_wrapper">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>Tên Sản Phẩm</th>
                                        <th>Hình ảnh sản phẩm</th>
                                        <th>Email</th>
                                        <th>Số điện thoại</th>
                                        <th>Tên</th>
                                        <th>Số sao</th>
                                        <th>Ngày Tạo</th>
                                        <th>Nội dung</th>
                                        @can('Chỉnh sửa đánh giá')
                                            <th>Sửa</th>
                                        @endcan
                                        @can('Xóa đánh giá sản phẩm')
                                            <th>Xóa</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($comments as $comment)
                                        <tr>
                                            <td>{{ $comment->product->name }}</td>
                                            @php
                                                $featured_image = $comment->product->featured_image;
                                            @endphp
                                            <td class="text-center">
                                                <a href="{{ asset("storage/uploads/$featured_image") }}"
                                                    target="_blank"><img
                                                        src="{{ asset("storage/uploads/$featured_image") }}"
                                                        width="80px"></a>
                                            </td>
                                            <td>{{ $comment->email }}</td>
                                            <td>{{ $comment->mobile }}</td>
                                            <td>{{ $comment->fullname }}</td>
                                            <td>{{ $comment->star }}</td>
                                            <td>{{ $comment->created_date }}</td>
                                            <td>{{ $comment->description }}</td>
                                            @can('Chỉnh sửa đánh giá')
                                                <td>
                                                    <a href="{{ route('admin.comment.edit', [$comment->id]) }}"
                                                        class="btn btn-info">Sửa
                                                    </a>
                                                </td>
                                            @endcan
                                            @can('Xóa đánh giá sản phẩm')
                                                <td><button class="btn btn-danger btn sweet-confirm destroy"
                                                        data-url="{{ route('admin.product.destroyComment', $comment->id) }}">Xóa</button>
                                                </td>
                                            @endcan
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Tên Sản Phẩm</th>
                                        <th>Hình ảnh sản phẩm</th>
                                        <th>Email</th>
                                        <th>Số điện thoại</th>
                                        <th>Tên</th>
                                        <th>Số sao</th>
                                        <th>Ngày Tạo</th>
                                        <th>Nội dung</th>
                                        @can('Chỉnh sửa đánh giá')
                                            <th>Sửa</th>
                                        @endcan
                                        @can('Xóa đánh giá sản phẩm')
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
