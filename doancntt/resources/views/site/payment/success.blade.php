@extends("site.layout.main")

@section('content')
    <div class="wrapper_full wrapper_full_border_1">
        <div class="wrapper_full_1">
            <div class="wrapper_full_4">
                <div class="title_cate_list"> <a href="{{ route('site.home') }}" class="fist_menu_cate_a">Trang chủ</a> <a
                        href="{{ route('site.payment.success', [$order->id]) }}">Đặt hàng thành công</a> </div>
            </div>
        </div>
    </div>
    <div class="wrapper_full">
        <div class="wrapper_full_1">
            <div class="right_account_user3 mgrb_20">
                <div class="div_form_pay div_form_pay_order_success">
                    <div class="wp_input_div wp_input_div_order_success">
                        <div class="input_frm input_frm_order_success"> <span>Họ và tên:</span>
                            <strong>{{ $order->shipping_fullname }}</strong>
                        </div>
                    </div>
                    <div class="wp_input_div wp_input_div_order_success"> <span>Điện thoại:</span>
                        <strong>{{ $order->shipping_mobile }}</strong>
                    </div>
                    <div class="wp_input_div wp_input_div_order_success"> <span>Email:</span>
                        <strong>{{ $order->shipping_email }}</strong>
                    </div>
                    <div class="wp_input_div wp_input_div_order_success"> <span>Địa chỉ:</span>
                        <strong>{{ $order->shipping_housenumber_street . ', ' . $order->ward->name . ', ' . $order->ward->district->name . ', ' . $order->ward->district->province->name }}</strong>
                    </div>
                </div>
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
                        @php
                            $subTotal = 0;
                        @endphp
                        @foreach ($order->orderItems as $key => $orderItem)
                            @php
                                $featured_image = $orderItem->product->featured_image;
                                $subTotal += $orderItem->total_price;
                            @endphp
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td><a href="{{ route('site.product.show', [$orderItem->product->slug]) }}"
                                        target="_blank">{{ $orderItem->product->name }}</a></td>
                                <td><a href="{{ route('site.product.show', [$orderItem->product->slug]) }}"
                                        target="_blank"><img src="{{ asset("storage/uploads/$featured_image") }}"
                                            alt="{{ $orderItem->product->name }}" style="width: 80px"></a></td>
                                <td>
                                    <p class="text_cart_history">{{ $orderItem->qty }}</p>
                                </td>
                                <td>
                                    <p class="text_cart_history">{{ number_format($orderItem->unit_price) }} VND</p>
                                </td>
                                <td>
                                    <p class="text_cart_history">{{ number_format($orderItem->total_price) }} VND</p>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @php
                
                $total_price = $subTotal - (!empty($order->discountCode) ? $order->discountCode->discount_price : 0) + $order->shipping_fee;
            @endphp
            <div class="order_detail_success">Tạm tính: <span>{{ number_format($subTotal) }} VND</span></div>
            <div class="order_detail_success">Giảm giá:
                <span>{{ !empty($order->discountCode) ? number_format($order->discountCode->discount_price) : 0 }}
                    VND</span>
            </div>
            <div class="order_detail_success">Tiền vận chuyển: <span>{{ number_format($order->shipping_fee) }}
                    VND</span>
            </div>
            <div class="order_detail_success">Tổng tiền: <span>{{ number_format($total_price) }} VND</span></div>
            <div class="box_checkout_success">
                <p class="note-msg">Bạn đã đặt hàng với mã số đơn hàng <span
                        class="yellow">{{ $order->id }}</span> thành công ! Chúng tôi sẽ liên hệ với bạn trong
                    thời
                    gian sớm nhất. Để được tư vấn trực tiếp vui lòng liên hệ hotline: <a
                        href="tel:{{ $company->hotline }}" class="yellow">{{ $company->hotline }}</a></p>
            </div>
        </div>
    </div>
@endsection
