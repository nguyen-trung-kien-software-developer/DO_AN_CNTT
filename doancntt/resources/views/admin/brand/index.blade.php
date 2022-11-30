@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Danh Sách Thương Hiệu</h4>
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
                                        <th>Tên thương hiệu</th>
                                        @can('Xem mô tả thương hiệu')
                                            <th>Mô tả thương hiệu</th>
                                        @endcan
                                        @can('Chỉnh sửa thương hiệu')
                                            <th>Chỉnh sửa</th>
                                        @endcan
                                        @can('Xóa thương hiệu')
                                            <th>Xóa</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($brands as $brand)
                                        <tr>
                                            <td>{{ $brand->id }}</td>
                                            <td>{{ $brand->name }}</td>
                                            @can('Xem mô tả thương hiệu')
                                                <td><a href="{{ route('admin.brand.description', [$brand->id]) }}"
                                                        class="btn btn-primary">Xem</a></td>
                                            @endcan
                                            @can('Chỉnh sửa thương hiệu')
                                                <td><a href="{{ route('admin.brand.edit', [$brand->id]) }}"
                                                        class="btn btn-info">Sửa</a></td>
                                            @endcan
                                            @can('Xóa thương hiệu')
                                                <td><button class="btn btn-danger btn sweet-confirm destroy"
                                                        data-url="{{ route('admin.brand.destroy', $brand->id) }}">Xóa</button>
                                                </td>
                                            @endcan
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Mã</th>
                                        <th>Tên thương hiệu</th>
                                        <th>Mô tả thương hiệu</th>

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
