@extends("site.layout.main")

@section('content')
    <div class="wrapper_full wrapper_full_border_1">
        <div class="wrapper_full_1">
            <div class="wrapper_full_4">
                <div class="title_cate_list"> <a href="{{ route('site.home') }}" class="fist_menu_cate_a">Trang chủ</a> <a
                        href="{{ route('site.customer.orderHistory') }}">Lịch sử đơn hàng</a> </div>
            </div>
        </div>
    </div>
    <div class="wrapper_full">
        <div class="wrapper_full_1">
            @include('site.layout.accountSideBar')
            <div class="right_account_user_1">
                <div class="right_account_user2">
                    <p class="title_tt_2">Thông tin thành viên</p>
                    <span class="span_tt_1">
                        <p>Email:</p>
                        <b>{{ Auth::guard('customer')->user()->email }}</b>
                    </span>
                    <span class="span_tt_1">
                        <p>Họ tên:</p>
                        <b>{{ Auth::guard('customer')->user()->name }}</b>
                    </span>
                    <span class="span_tt_1">
                        <p>Địa chỉ:</p>
                        <b>{{ Auth::guard('customer')->user()->housenumber_street }}</b>
                    </span>
                    <span class="span_tt_1">
                        <p>Tỉnh thành:</p>
                        <b>{{ !empty(Auth::guard('customer')->user()->ward_id) ? Auth::guard('customer')->user()->ward->district->province->name : '' }}</b>
                    </span>
                    <span class="span_tt_1">
                        <p>Quận huyện:</p>
                        <b>{{ !empty(Auth::guard('customer')->user()->ward_id) ? Auth::guard('customer')->user()->ward->district->name : '' }}</b>
                    </span>
                    <span class="span_tt_1">
                        <p>Phường xã:</p>
                        <b>{{ !empty(Auth::guard('customer')->user()->ward_id) ? Auth::guard('customer')->user()->ward->name : '' }}</b>
                    </span>
                </div>
                <div class="right_account_user3 pb-5">
                    <p class="title_tt_3">Danh sách đơn hàng</p>
                    <table class="tablle_donhang_history history_order_tpl">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Mã đơn hàng</th>
                                <th>Ngày mua hàng</th>
                                <th>Trạng thái</th>
                                <th>Giảm giá</th>
                                <th>Phí giao hàng</th>
                                <th>Tổng tiền</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $key => $order)
                                @php
                                    $subTotal = 0;
                                    $total_price = 0;
                                @endphp
                                @foreach ($order->orderItems as $orderItem)
                                    @php
                                        $subTotal += $orderItem->total_price;
                                    @endphp
                                @endforeach
                                @php
                                    $total_price = $subTotal - (!empty($order->discountCode) ? $order->discountCode->discount_price : 0) + $order->shipping_fee;
                                @endphp
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        <p class="code_cart">{{ $order->id }}</p>
                                    </td>
                                    <td>
                                        <p class="text_cart_history">{{ $order->created_date }}</p>
                                    </td>
                                    <td>
                                        <p class="text_cart_history">{{ $order->orderStatus->description }}</p>
                                    </td>
                                    <td>
                                        <p class="text_cart_history">
                                            {{ !empty($order->discountCode) ? number_format($order->discountCode->discount_price) : 0 }}
                                            VND
                                        </p>
                                    </td>
                                    <td>
                                        <p class="text_cart_history">{{ number_format($order->shipping_fee) }} VND</p>
                                    </td>
                                    <td>
                                        <p class="text_cart_history">{{ number_format($total_price) }} VND</p>
                                    </td>
                                    <td><a href="{{ route('site.customer.orderDetails', [$order->id]) }}"
                                            class="view_cart">Xem
                                            chi tiết</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
