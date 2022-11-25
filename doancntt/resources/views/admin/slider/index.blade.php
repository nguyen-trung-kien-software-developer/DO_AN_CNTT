@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Danh Sách Tất Cả Slider</h4>
                </div>
                <div class="card-body">
                    <span class="scroll left-scroll"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
                    <span class="scroll right-scroll"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                    <div class="table-responsive">
                        <div id="example_wrapper" class="dataTables_wrapper">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên slider</th>
                                        <th>Đường dẫn</th>
                                        <th>Hình ảnh</th>
                                        <th>Thứ tự sắp xếp</th>
                                        <th>Kích hoạt</th>
                                        @can('Chỉnh sửa slider')
                                            <th>Chỉnh Sửa</th>
                                        @endcan
                                        @can('Xóa slider')
                                            <th>Xóa</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sliders as $key => $slider)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $slider->name }}</td>
                                            <td>{{ $slider->url }}</td>
                                            <td class="text-center">
                                                <a href="{{ asset("storage/uploads/$slider->thumb") }}"
                                                    target="_blank"><img
                                                        src="{{ asset("storage/uploads/$slider->thumb") }}"
                                                        width="80px"></a>
                                            </td>
                                            <td>{{ $slider->sort_by }}</td>

                                            <td>
                                                {!! $slider->active == 1 ? '<i class="fa fa-check-square" style="color: green;" aria-hidden="true"></i>' : '<i class="fa fa-times-circle-o" style="color: red;" aria-hidden="true"></i>' !!}
                                            </td>
                                            @can('Chỉnh sửa slider')
                                                <td><a href="{{ route('admin.slider.edit', [$slider->id]) }}"
                                                        class="btn btn-info">Sửa</a></td>
                                            @endcan
                                            @can('Xóa slider')
                                                <td><button class="btn btn-danger btn sweet-confirm destroy"
                                                        data-url="{{ route('admin.slider.destroy', $slider->id) }}">Xóa</button>
                                                </td>
                                            @endcan
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên slider</th>
                                        <th>Đường dẫn</th>
                                        <th>Hình ảnh</th>
                                        <th>Thứ tự sắp xếp</th>
                                        <th>Kích hoạt</th>

                                        <th>Chỉnh Sửa</th>
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
