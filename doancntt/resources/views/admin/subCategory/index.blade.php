@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Danh Sách Danh Mục Phụ</h4>
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
                                        <th>Tên danh mục</th>
                                        <th>Danh Mục Chính</th>
                                        @can('Chỉnh sửa danh mục phụ')
                                            <th>Chỉnh sửa</th>
                                        @endcan
                                        @can('Xóa danh mục phụ')
                                            <th>Xóa</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subCategories as $subCategory)
                                        <tr>
                                            <td>{{ $subCategory->id }}</td>
                                            <td>{{ $subCategory->name }}</td>
                                            <td>{{ $subCategory->parentCategory->name }}</td>
                                            @can('Chỉnh sửa danh mục phụ')
                                                <td><a href="{{ route('admin.subCategory.edit', [$subCategory->id]) }}"
                                                        class="btn btn-info">Sửa</a></td>
                                            @endcan
                                            @can('Xóa danh mục phụ')
                                                <td><button class="btn btn-danger btn sweet-confirm destroy"
                                                        data-url="{{ route('admin.subCategory.destroy', $subCategory->id) }}">Xóa</button>
                                                </td>
                                            @endcan
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Mã</th>
                                        <th>Tên danh mục</th>
                                        <th>Danh Mục Chính</th>
                                        @can('Chỉnh sửa danh mục phụ')
                                            <th>Chỉnh sửa</th>
                                        @endcan
                                        @can('Xóa danh mục phụ')
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
