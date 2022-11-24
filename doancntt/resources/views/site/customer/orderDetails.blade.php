@extends("site.layout.main")

@section('content')
    <div class="wrapper_full wrapper_full_border_1">
        <div class="wrapper_full_1">
            <div class="wrapper_full_4">
                <div class="title_cate_list"> <a href="{{ route('site.home') }}" class="fist_menu_cate_a">Trang chủ</a> <a
                        href="{{ route('site.customer.orderDetails', [$order->id]) }}">Chi tiết
                        đơn hàng</a> </div>
            </div>
            <div class="wrapper_full">
                <div class="wrapper_full_1">
                    @include('site.layout.accountSideBar')
                    <div class="right_account_user_1">
                        <div class="right_account_user2 mgrb_20">
                            <div><a class="w3-left w3-btn" href="{{ route('site.customer.orderHistory') }}">❮ Quay lại</a>
                            </div>
                            <p class="title_tt_2">Thông tin thành viên</p> <span class="span_tt_1">
                                <p>Email:</p> <b>{{ Auth::guard('customer')->user()->email }}</b>
                            </span> <span class="span_tt_1">
                                <p>Họ tên:</p> <b>{{ Auth::guard('customer')->user()->name }}</b>
                            </span> <span class="span_tt_1">
                                <p>Địa chỉ:</p> <b>{{ Auth::guard('customer')->user()->housenumber_street }}</b>
                            </span> <span class="span_tt_1">
                                <p>Tỉnh thành:</p>
                                <b>{{ !empty(Auth::guard('customer')->user()->ward_id) ? Auth::guard('customer')->user()->ward->district->province->name : ''  }}</b>
                            </span> <span class="span_tt_1">
                                <p>Quận huyện:</p> <b>{{ !empty(Auth::guard('customer')->user()->ward_id) ? Auth::guard('customer')->user()->ward->district->name : ''}}</b>
                            </span> <span class="span_tt_1">
                                <p>Phường xã:</p> <b>{{ !empty(Auth::guard('customer')->user()->ward_id) ?Auth::guard('customer')->user()->ward->name: '' }}</b>
                            </span>
                        </div>
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
                        <div class="right_account_user2 mgrb_20">
                            <p class="title_tt_2">Thông tin đơn hàng</p> <span class="span_tt_1">
                                <p>Mã đơn hàng:</p> <b>{{ $order->id }}</b>
                            </span> <span class="span_tt_1">
                                <p>Thời gian đặt hàng:</p> <b>{{ $order->created_date }}</b>
                            </span> <span class="span_tt_1">
                                <p>Địa chỉ giao hàng:</p>
                                <b>{{ $order->shipping_housenumber_street . ', ' . $order->ward->name . ', ' . $order->ward->district->name . ', ' . $order->ward->district->province->name }}</b>
                            </span> <span class="span_tt_1">
                                <p>Tổng tiền:</p> <b>{{ number_format($total_price) }} VND</b>
                            </span> <span class="span_tt_1">
                                <p>Tình trạng:</p> <b>{{ $order->orderStatus->description }}</b>
                            </span>
                        </div>
                        <div class="right_account_user3 mgrb_20">
                            <p class="title_tt_3 title_tt_3_mb">Danh sách sản phẩm</p>
                            <table class="tablle_donhang_history history_order_detail_tpl">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Sản phẩm</th>
                                        <th>Hình ảnh</th>
                                        <th>Số lượng</th>
                                        <th>Đơn giá</th>
                                        <th>Thành tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order->orderItems as $key => $orderItem)
                                        @php
                                            $featured_image = $orderItem->product->featured_image;
                                        @endphp
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td><a href="{{ route('site.product.show', [$orderItem->product->slug]) }}"
                                                    target="_blank"
                                                    class="text_cart_history">{{ $orderItem->product->name }}</a></td>
                                            <td><a href="{{ route('site.product.show', [$orderItem->product->slug]) }}"
                                                    target="_blank" class="text_cart_history"><img
                                                        src="{{ asset("storage/uploads/$featured_image") }}"
                                                        alt="{{ $orderItem->product->name }}"
                                                        style="width: 80px; user-select: auto;"></a></td>
                                            <td>
                                                <p class="text_cart_history">{{ $orderItem->qty }}</p>
                                            </td>
                                            <td>
                                                <p class="text_cart_history">{{ number_format($orderItem->unit_price) }}
                                                    VND</p>
                                            </td>

                                            <td>
                                                <p class="text_cart_history">{{ number_format($orderItem->total_price) }}
                                                    VND</p>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
