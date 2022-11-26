@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Danh Sách Tin Tức</h4>
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
                                        <th>Ngày tạo</th>
                                        <th>Hình ảnh nổi bật</th>
                                        <th>Mô tả tin tức</th>

                                        @can('Xem nội dung chi tiết tin tức')
                                            <th>Nội dung chi tiết</th>
                                        @endcan
                                        <th>Xem Preview</th>
                                        @can('Chỉnh sửa tin tức')
                                            <th>Chỉnh sửa</th>
                                        @endcan
                                        @can('Xóa tin tức')
                                            <th>Xóa</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blogs as $blog)
                                        <tr>
                                            <td>{{ $blog->id }}</td>
                                            <td>{{ $blog->title }}</td>
                                            <td>{{ $blog->created_date }}</td>
                                            <td class="text-center">
                                                <a href="{{ asset("storage/uploads/$blog->featured_image") }}"
                                                    target="_blank"><img
                                                        src="{{ asset("storage/uploads/$blog->featured_image") }}"
                                                        width="80px"></a>
                                            </td>
                                            <td>{{ $blog->description }}</td>

                                            @can('Xem nội dung chi tiết tin tức')
                                                <td><a href="{{ route('admin.blog.content', [$blog->id]) }}"
                                                        class="btn btn-primary">Xem</a></td>
                                            @endcan
                                            <td>
                                                <a href="{{ route('site.blog.show', [$blog->slug]) }}"
                                                    class="btn btn-success" target="_blank">Preview</a>

                                            </td>
                                            @can('Chỉnh sửa tin tức')
                                                <td><a href="{{ route('admin.blog.edit', [$blog->id]) }}"
                                                        class="btn btn-info">Sửa</a></td>
                                            @endcan
                                            @can('Xóa tin tức')
                                                <td><button class="btn btn-danger btn sweet-confirm destroy"
                                                        data-url="{{ route('admin.blog.destroy', $blog->id) }}">Xóa</button>
                                                </td>
                                            @endcan
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Mã</th>
                                        <th>Tiêu đề</th>
                                        <th>Ngày tạo</th>
                                        <th>Hình ảnh nổi bật</th>
                                        <th>Mô tả tin tức</th>

                                        @can('Xem nội dung chi tiết tin tức')
                                            <th>Nội dung chi tiết</th>
                                        @endcan
                                        <th>Xem Preview</th>
                                        @can('Chỉnh sửa tin tức')
                                            <th>Chỉnh sửa</th>
                                        @endcan
                                        @can('Xóa tin tức')
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
