@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="row page-titles mx-0">
                    <div class="col-sm-3 p-md-0">
                        <div class="welcome-text">
                            <p class="mb-0">Mã Đơn Hàng</p>
                            <h4>{{ $order->id }}</h4>
                            <p class="mb-0">
                                {{ date('d-m-Y h:m:s', strtotime($order->created_date)) }}</p>
                        </div>
                    </div>
                    <div class="col-sm-3 p-md-0">
                        <div class="welcome-text">
                            <p class="mb-0">Tình Trạng Đơn Hàng</p>
                            <h4>{{ $order->orderStatus->description }}</h4>
                        </div>
                    </div>
                    <div class="col-sm-3 p-md-0">
                        <div class="welcome-text">
                            <p class="mb-0">Tình Trạng Giao Hàng</p>
                            <h4>{{ $order->shippingStatus->description }}</h4>
                        </div>
                    </div>
                    <div class="col-sm-3 p-md-0 text-right mt-auto">
                        <div class="welcome-text ">
                            <a href="{{ route('admin.order.billDetails', $order->id) }}" target="_blank"
                                rel="noopener noreferrer"><button type="button" class="btn btn-success">In Hóa Đơn<span
                                        class="btn-icon-right"><i class="fa fa-print color-success"
                                            aria-hidden="true"></i></span>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Hệ thống đơn hàng</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-primary">
                                        <tr>
                                            <th scope="col">Mã sản phẩm</th>
                                            <th scope="col">Tên sản phẩm</th>
                                            <th scope="col">Số lượng</th>
                                            <th scope="col">Đơn giá</th>
                                            <th scope="col">Tổng tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $qty = 0;
                                            $subTotal = 0;
                                        @endphp
                                        @foreach ($order->orderItems as $orderItem)
                                            @php
                                                $qty += $orderItem->qty;
                                                $subTotal += $orderItem->total_price;
                                            @endphp
                                            <tr>
                                                <th>{{ $orderItem->product->id }}</th>
                                                <td>{{ $orderItem->product->name }}</td>
                                                <td>{{ $orderItem->qty }}</td>
                                                <td>{{ number_format($orderItem->unit_price) }} VND</td>
                                                <td>{{ number_format($orderItem->total_price) }} VND</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @php
                            $total_price = $subTotal - (!empty($order->discountCode) ? $order->discountCode->discount_price : 0) + $order->shipping_fee;
                        @endphp
                        <div class="card-header text-right p-5">
                            <div class="row w-100">
                                <div class="col-lg-6 text-left">
                                    <h4 class="card-title mb-4">Số lượng sản phẩm: <span
                                            style="color: red;">{{ $qty }}</span></h4>
                                    <h4 class="card-title mb-4">Tạm tính: <span
                                            style="color: red;">{{ number_format($subTotal) }} VND</span></h4>
                                    <h4 class="card-title mb-4">Phí vận chuyển: <span
                                            style="color: red;">{{ number_format($order->shipping_fee) }} VND</span></h4>
                                    <h4 class="card-title mb-4">Giảm giá: <span
                                            style="color: red;">{{ !empty($order->discountCode) ? number_format($order->discountCode->discount_price) : 0 }}
                                            VND</span></h4>
                                    <h4 class="card-title mb-4">Tổng cộng: <span
                                            style="color: red;">{{ number_format($total_price) }} VND</span></h4>
                                </div>
                                <div class="col-lg-6 text-right">
                                    <h4 class="card-title mb-4">Ghi chú: </h4>
                                    <p class="mb-0">{{ $order->note }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" style="color: #593bdb;">Thông tin cá nhân</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-list-group">
                                <div class="list-group">
                                    <a href="javascript:void()"
                                        class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-3" style="color: #593bdb;">Thông tin người mua
                                            </h5>
                                        </div>
                                        <h5 class="card-title mb-4">Tên khách hàng: <span class="mb-1"
                                                style="color: red;">
                                                {{ $order->customer->name }}</span>
                                        </h5>
                                        <h5 class="card-title mb-4">Email khách hàng: <span class="mb-1"
                                                style="color: red;">
                                                {{ $order->customer->email }}</span>
                                        </h5>
                                    </a>
                                    <a href="javascript:void()"
                                        class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-3" style="color: #593bdb;">Thông tin giao hàng
                                            </h5>
                                        </div>
                                        <h5 class="card-title mb-4">Tên người nhận: <span class="mb-1"
                                                style="color: red;">
                                                {{ $order->shipping_fullname }}</span>
                                        </h5>
                                        <h5 class="card-title mb-4">Email người nhận: <span class="mb-1"
                                                style="color: red;">
                                                {{ $order->shipping_email }}</span>
                                        </h5>
                                        <h5 class="card-title mb-4">Số điện thoại người nhận: <span class="mb-1"
                                                style="color: red;">
                                                {{ $order->shipping_mobile }}</span>
                                        </h5>
                                        <h5 class="card-title mb-4">Phương thức thanh toán: <span class="mb-1"
                                                style="color: red;">
                                                {{ $order->payment_method == 0 ? 'COD' : 'BANK' }}</span>
                                        </h5>
                                        <h5 class="card-title mb-4">Địa chỉ giao hàng: <span class="mb-1"
                                                style="color: red;">{{ $order->shipping_housenumber_street . ', ' . $order->ward->name . ', ' . $order->ward->district->name . ', ' . $order->ward->district->province->name }}</span>
                                        </h5>
                                        <h5 class="card-title mb-4">Ngày giao hàng: <span class="mb-1"
                                                style="color: red;">{{ date('d-m-Y h:m:s', strtotime($order->delivered_date)) }}</span>
                                        </h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
