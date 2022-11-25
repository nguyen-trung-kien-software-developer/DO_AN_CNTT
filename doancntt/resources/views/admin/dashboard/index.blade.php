@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="btn-group">
                        <a class="mr-2"
                            href="{{ request()->fullUrlWithQuery(['type' => 'today', 'from_date' => date('Y-m-d'), 'to_date' => date('Y-m-d')]) }}"><button
                                type="button" class="btn btn-primary">Hôm nay</button></a>
                        <a class="mr-2"
                            href="{{ request()->fullUrlWithQuery(['type' => 'yesterday', 'from_date' => date('Y-m-d', strtotime('-1 days')), 'to_date' => date('Y-m-d', strtotime('-1 days'))]) }}"><button
                                type="button" class="btn btn-primary">Hôm qua</button></a>
                        <a class="mr-2"
                            href="{{ request()->fullUrlWithQuery(['type' => 'thisweek', 'from_date' => date('Y-m-d', strtotime('this week')), 'to_date' => date('Y-m-d')]) }}"><button
                                type="button" class="btn btn-primary">Tuần này</button></a>
                        <a class="mr-2"
                            href="{{ request()->fullUrlWithQuery(['type' => 'thismonth', 'from_date' => date('Y-m-01'), 'to_date' => date('Y-m-d')]) }}"><button
                                type="button" class="btn btn-primary">Tháng này</button></a>
                        <a class="mr-2"
                            href="{{ request()->fullUrlWithQuery(['type' => '3months', 'from_date' => date('Y-m-d', strtotime('-3 months')), 'to_date' => date('Y-m-d')]) }}"><button
                                type="button" class="btn btn-primary">3 tháng</button></a>
                        <a class="mr-2"
                            href="{{ request()->fullUrlWithQuery(['type' => 'thisyear', 'from_date' => date('Y-01-01'), 'to_date' => date('Y-m-d')]) }}"><button
                                type="button" class="btn btn-primary">Năm này</button></a>
                        <div class="btn-group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle"
                                data-toggle="dropdown" aria-expanded="false">Tùy chọn</button>
                            <div class="dropdown-menu" x-placement="top-start"
                                style="user-select: auto; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, -2px, 0px);">
                                <div style="margin:20px">
                                    <form action="{{ route('admin.dashboard.index') }}">
                                        Từ ngày <input type="date" class="form-control" name="from_date" required
                                            value="{{ request()->input('type') == 'custome' ? request()->input('from_date') : '' }}">
                                        Đến ngày <input type="date" class="form-control" name="to_date" required
                                            value="{{ request()->input('type') == 'custome' ? request()->input('to_date') : '' }}">
                                        <br>
                                        <input type="hidden" value="custome" name="type">

                                        <button type="submit" class="btn btn-primary form-control mt-4">Lọc</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="stat-widget-one card-body">
                    <div class="stat-icon d-inline-block">
                        <i class="fa fa-th text-primary border-primary" aria-hidden="true"></i>
                    </div>
                    <div class="stat-content d-inline-block">
                        <div class="stat-text">Đơn Hàng</div>
                        <div class="stat-digit">{{ $new_order_quantity }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="stat-widget-one card-body">
                    <div class="stat-icon d-inline-block">
                        <i class="ti-money text-success border-success"></i>

                    </div>
                    <div class="stat-content d-inline-block">
                        <div class="stat-text">Doanh thu</div>
                        <div class="stat-digit">{{ number_format($revenue) }} VND</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="stat-widget-one card-body">
                    <div class="stat-icon d-inline-block">
                        <i class="fa fa-users border-warning text-warning" aria-hidden="true"></i>
                    </div>
                    <div class="stat-content d-inline-block">
                        <div class="stat-text">Số Lượng Khách Hàng</div>
                        <div class="stat-digit">{{ $customer_number }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="stat-widget-one card-body">
                    <div class="stat-icon d-inline-block">
                        <i class="fa fa-ban border-danger text-danger" aria-hidden="true"></i>
                    </div>
                    <div class="stat-content d-inline-block">
                        <div class="stat-text">Đơn Hàng Bị Hủy</div>
                        <div class="stat-digit">{{ $cancelled_order_number }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Thống Kê Đơn Hàng</h4>
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
