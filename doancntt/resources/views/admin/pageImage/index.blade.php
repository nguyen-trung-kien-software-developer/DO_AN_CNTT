@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Danh Sách Tất Cả Hình Ảnh Của Các Trang Thông Tin</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="example_wrapper" class="dataTables_wrapper">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>Ảnh</th>
                                        <th>Tên hình ảnh</th>
                                        <th>Đường dẫn</th>
                                        <th>Mô tả hình ảnh</th>
                                        @can('Chỉnh sửa hình ảnh trang thông tin')
                                            <th>Sửa</th>
                                        @endcan

                                        @can('Xóa hình ảnh trang thông tin')
                                            <th>Xóa</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($images as $image)
                                        <tr>
                                            <td class="text-center">
                                                <a href="{{ asset("storage/uploads/$image->name") }}" target="_blank"><img
                                                        src="{{ asset("storage/uploads/$image->name") }}"
                                                        width="80px"></a>
                                            </td>
                                            <td>{{ $image->name }}</td>
                                            <td>{{ $image->url }}</td>
                                            <td>{{ $image->description }}</td>
                                            @can('Chỉnh sửa hình ảnh trang thông tin')
                                                <td><a href="{{ route('admin.image.edit', $image->id) }}"
                                                        class="btn btn-info">Sửa</a></td>
                                            @endcan

                                            @can('Xóa hình ảnh trang thông tin')
                                                <td><button class="btn btn-danger btn sweet-confirm destroy"
                                                        data-url="{{ route('admin.image.destroy', $image->id) }}">Xóa</button>
                                                </td>
                                            @endcan
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Ảnh</th>
                                        <th>Tên hình ảnh</th>
                                        <th>Đường dẫn</th>
                                        <th>Mô tả hình ảnh</th>
                                        @can('Chỉnh sửa hình ảnh trang thông tin')
                                            <th>Sửa</th>
                                        @endcan

                                        @can('Xóa hình ảnh trang thông tin')
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
