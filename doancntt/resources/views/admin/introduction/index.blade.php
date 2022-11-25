@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Danh Sách Bài Giới Thiệu</h4>
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
                                        <th>Tiêu đề</th>
                                        <th>Hình ảnh đại diện</th>
                                        <th>video</th>
                                        @can('Xem mô tả bài giới thiệu')
                                            <th>Mô tả</th>
                                        @endcan
                                        @can('Xem nội dung bài giới thiệu')
                                            <th>Nội dung chi tiết</th>
                                        @endcan
                                        @can('Chỉnh sửa bài giới thiệu')
                                            <th>Chỉnh sửa</th>
                                        @endcan
                                        @can('Xóa bài giới thiệu')
                                            <th>Xóa</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($introductions as $introduction)
                                        <tr>
                                            <td>{{ $introduction->id }}</td>
                                            <td>{{ $introduction->title }}</td>
                                            <td class="text-center">
                                                <a href="{{ asset("storage/uploads/$introduction->represented_image") }}"
                                                    target="_blank"><img
                                                        src="{{ asset("storage/uploads/$introduction->represented_image") }}"
                                                        width="80px"></a>
                                            </td>
                                            <td>{{ $introduction->video }}</td>
                                            @can('Xem mô tả bài giới thiệu')
                                                <td><a href="{{ route('admin.introduction.description', [$introduction->id]) }}"
                                                        class="btn btn-primary">Xem</a></td>
                                            @endcan
                                            @can('Xem nội dung bài giới thiệu')
                                                <td><a href="{{ route('admin.introduction.content', [$introduction->id]) }}"
                                                        class="btn btn-primary">Xem</a></td>
                                            @endcan
                                            @can('Chỉnh sửa bài giới thiệu')
                                                <td><a href="{{ route('admin.introduction.edit', [$introduction->id]) }}"
                                                        class="btn btn-info">Sửa</a></td>
                                            @endcan
                                            @can('Xóa bài giới thiệu')
                                                <td><button class="btn btn-danger btn sweet-confirm destroy"
                                                        data-url="{{ route('admin.introduction.destroy', $introduction->id) }}">Xóa</button>
                                                </td>
                                            @endcan
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Mã</th>
                                        <th>Tiêu đề</th>
                                        <th>Hình ảnh đại diện</th>
                                        <th>video</th>
                                        <th>Mô tả</th>
                                        <th>Nội dung chi tiết</th>
                                        <th>Chỉnh sửa</th>
                                        <th>Xóa</th>
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
