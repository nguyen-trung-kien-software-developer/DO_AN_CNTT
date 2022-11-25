@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Danh Sách Đơn Hàng</h4>
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
                                        <th>Ngày tạo đơn hàng</th>
                                        <th>Khách hàng</th>
                                        <th>Số điện thoại</th>
                                        <th>Email</th>
                                        <th>Tình trạng đơn hàng</th>
                                        <th>Tình trạng giao hàng</th>
                                        <th>Phương thức thanh toán</th>
                                        <th>Tên người nhận</th>
                                        <th>Số điện thoại người nhận</th>
                                        <th>Email người nhận</th>
                                        <th>Ngày giao hàng</th>
                                        <th>Địa chỉ giao hàng</th>
                                        <th>Phí giao hàng</th>
                                        <th>Tạm tính</th>
                                        <th>Giảm giá</th>
                                        <th>Tổng tiền</th>
                                        <th>Ghi chú</th>
                                        @can('Xem chi tiết đơn hàng')
                                            <th>Chi tiết</th>
                                        @endcan
                                        @can('Chỉnh sửa đơn hàng')
                                            <th>Chỉnh sửa</th>
                                        @endcan
                                        @can('Xóa đơn hàng')
                                            <th>Xóa</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        @php
                                            $sub_price = 0;
                                            foreach ($order->orderItems as $orderItem) {
                                                $sub_price += $orderItem->total_price;
                                            }

                                            $discountPrice = !empty($order->discount_code_id) ? $order->discountCode->discount_price : 0;
                                        @endphp
                                        <tr>
                                            <td><a
                                                    href="{{ route('admin.order.details', [$order->id]) }}">{{ $order->id }}</a>
                                            </td>
                                            <td>{{ $order->created_date }}</td>
                                            <td>{{ $order->customer->name }}</td>
                                            <td>{{ $order->customer->mobile }}</td>
                                            <td>{{ $order->customer->email }}</td>
                                            <td>{{ $order->orderStatus->description }}</td>
                                            <td>{{ $order->shippingStatus->description }}</td>
                                            <td>{{ $order->payment_method == 0 ? 'COD' : 'BANK' }}</td>
                                            <td>{{ $order->shipping_fullname }}</td>
                                            <td>{{ $order->shipping_mobile }}</td>
                                            <td>{{ $order->shipping_email }}</td>
                                            <td>{{ $order->delivered_date }}</td>
                                            <td>{{ $order->shipping_housenumber_street . ', ' . $order->ward->name . ', ' . $order->ward->district->name . ', ' . $order->ward->district->province->name }}
                                            </td>
                                            <td>{{ number_format($order->shipping_fee) }} VND</td>
                                            <td>{{ number_format($sub_price) }} VND</td>
                                            <td>{{ number_format($discountPrice) }}
                                                VND</td>
                                            <td>{{ number_format($order->shipping_fee + $sub_price - $discountPrice) }}
                                                VND</td>
                                            <td>{{ $order->note }}</td>
                                            @can('Xem chi tiết đơn hàng')
                                                <td><a href="{{ route('admin.order.details', [$order->id]) }}"
                                                        class="btn btn-primary">Xem</a></td>
                                            @endcan
                                            @can('Chỉnh sửa đơn hàng')
                                                <td><a href="{{ route('admin.order.edit', [$order->id]) }}"
                                                        class="btn btn-info">Sửa</a></td>
                                            @endcan
                                            @can('Xóa đơn hàng')
                                                <td><button class="btn btn-danger btn sweet-confirm destroy"
                                                        data-url="{{ route('admin.order.destroy', $order->id) }}">Xóa</button>
                                                </td>
                                            @endcan
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Mã</th>
                                        <th>Ngày tạo đơn hàng</th>
                                        <th>Khách hàng</th>
                                        <th>Số điện thoại</th>
                                        <th>Email</th>
                                        <th>Tình trạng đơn hàng</th>
                                        <th>Tình trạng giao hàng</th>
                                        <th>Phương thức thanh toán</th>
                                        <th>Tên người nhận</th>
                                        <th>Số điện thoại người nhận</th>
                                        <th>Email người nhận</th>
                                        <th>Ngày giao hàng</th>
                                        <th>Địa chỉ giao hàng</th>
                                        <th>Phí giao hàng</th>
                                        <th>Tạm tính</th>
                                        <th>Giảm giá</th>
                                        <th>Tổng tiền</th>
                                        <th>Ghi chú</th>
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
