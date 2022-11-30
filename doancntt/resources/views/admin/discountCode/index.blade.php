@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Danh Sách Tất Cả Mã Giảm Giá</h4>
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
                                        <th>Mã giảm giá</th>
                                        <th>Ngày bắt đầu</th>
                                        <th>Ngày kết thúc</th>
                                        <th>Mô tả</th>
                                        <th>Giá giảm</th>
                                        <th>Kích hoạt</th>
                                        @can('Chỉnh sửa mã giảm giá')
                                            <th>Chỉnh Sửa</th>
                                        @endcan
                                        @can('Xóa mã giảm giá')
                                            <th>Xóa</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($discountCodes as $key => $discountCode)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $discountCode->code }}</td>
                                            <td>{{ $discountCode->from_date }}</td>
                                            <td>{{ $discountCode->to_date }}</td>
                                            <td>{{ $discountCode->description }}</td>
                                            <td>{{ number_format($discountCode->discount_price) }} VND</td>
                                            <td>
                                                {!! $discountCode->active == 1 ? '<i class="fa fa-check-square" style="color: green;" aria-hidden="true"></i>' : '<i class="fa fa-times-circle-o" style="color: red;" aria-hidden="true"></i>' !!}
                                            </td>
                                            @can('Chỉnh sửa mã giảm giá')
                                                <td><a href="{{ route('admin.discountCode.edit', [$discountCode->id]) }}"
                                                        class="btn btn-info">Sửa</a></td>
                                            @endcan
                                            @can('Xóa mã giảm giá')
                                                <td><button class="btn btn-danger btn sweet-confirm destroy"
                                                        data-url="{{ route('admin.discountCode.destroy', $discountCode->id) }}">Xóa</button>
                                                </td>
                                            @endcan
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>STT</th>
                                        <th>Mã giảm giá</th>
                                        <th>Ngày bắt đầu</th>
                                        <th>Ngày kết thúc</th>
                                        <th>Mô tả</th>
                                        <th>Giá giảm</th>
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
