@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Danh Sách Màu Sắc</h4>
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
                                        <th>Tên màu sắc</th>
                                        <th>Mã màu</th>

                                        @can('Chỉnh sửa màu sắc')
                                            <th>Chỉnh sửa</th>
                                        @endcan
                                        @can('Xóa màu sắc')
                                            <th>Xóa</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($colors as $color)
                                        <tr>
                                            <td>{{ $color->id }}</td>
                                            <td>{{ $color->name }}</td>
                                            <td>
                                                <div class="asColorPicker-wrap">
                                                    <input type="text" name="color_code"
                                                        class="gradient-colorpicker form-control asColorPicker-input"
                                                        value="{{ $color->color_code }}"><a href="#"
                                                        class="asColorPicker-clear"></a>
                                                </div>
                                            </td>

                                            @can('Chỉnh sửa màu sắc')
                                                <td><a href="{{ route('admin.color.edit', [$color->id]) }}"
                                                        class="btn btn-info">Sửa</a></td>
                                            @endcan
                                            @can('Xóa màu sắc')
                                                <td><button class="btn btn-danger btn sweet-confirm destroy"
                                                        data-url="{{ route('admin.color.destroy', $color->id) }}">Xóa</button>
                                                </td>
                                            @endcan
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Mã</th>
                                        <th>Tên màu sắc</th>
                                        <th>Mã màu</th>

                                        @can('Chỉnh sửa màu sắc')
                                            <th>Chỉnh sửa</th>
                                        @endcan
                                        @can('Xóa màu sắc')
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
