@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Danh Sách Khách Hảng</h4>
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
                                        <th>Tên khách hàng</th>
                                        <th>Số điện thoại</th>
                                        <th>Email</th>
                                        <th>Địa chỉ</th>
                                        <th>Tên người nhận</th>
                                        <th>Số điện thoại người nhận</th>
                                        <th>Kích hoạt</th>
                                        <th>Đã xác thực</th>


                                        @can('Chỉnh sửa khách hàng')
                                            <th>Chỉnh sửa</th>
                                        @endcan
                                        @can('Xóa khách hàng')
                                            <th>Xóa</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customers as $customer)
                                        <tr>
                                            <td>{{ $customer->id }}</td>
                                            <td>{{ $customer->name }}</td>
                                            <td>{{ $customer->mobile }}</td>
                                            <td>{{ $customer->email }}</td>
                                            <td>{{ !empty($customer->ward_id) ? $customer->housenumber_street . ', ' . $customer->ward->name . ', ' . $customer->ward->district->name . ', ' . $customer->ward->district->province->name : '' }}
                                            </td>
                                            <td>{{ $customer->shipping_name }}</td>
                                            <td>{{ $customer->shipping_mobile }}</td>
                                            <td>
                                                {!! $customer->is_active == 1 ? '<i class="fa fa-check-square" style="color: green;" aria-hidden="true"></i>' : '<i class="fa fa-times-circle-o" style="color: red;" aria-hidden="true"></i>' !!}
                                            </td>
                                            <td>
                                                {!! $customer->email_verified_at != null ? '<i class="fa fa-check-square" style="color: green;" aria-hidden="true"></i>' : '<i class="fa fa-times-circle-o" style="color: red;" aria-hidden="true"></i>' !!}
                                            </td>
                                            @can('Chỉnh sửa khách hàng')
                                                <td><a href="{{ route('admin.customer.edit', [$customer->id]) }}"
                                                        class="btn btn-info">Sửa</a></td>
                                            @endcan
                                            @can('Xóa khách hàng')
                                                <td><button class="btn btn-danger btn sweet-confirm destroy"
                                                        data-url="{{ route('admin.customer.destroy', $customer->id) }}">Xóa</button>
                                                </td>
                                            @endcan
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Mã</th>
                                        <th>Tên khách hàng</th>
                                        <th>Số điện thoại</th>
                                        <th>Email</th>
                                        <th>Địa chỉ</th>
                                        <th>Tên người nhận</th>
                                        <th>Số điện thoại người nhận</th>
                                        <th>Kích hoạt</th>
                                        <th>Đã xác thực</th>

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
