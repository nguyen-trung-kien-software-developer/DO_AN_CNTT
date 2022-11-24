@extends('site.layout.main')

@section('content')
    <div class="wrapper_full wrapper_full_border_1">
        <div class="wrapper_full_1">
            <div class="wrapper_full_4">
                <div class="title_cate_list"> <a href="{{ route('site.home') }}" class="fist_menu_cate_a">Trang chủ</a> <a
                        href="{{ route('site.payment.checkout') }}">Hoàn tất đơn hàng</a> </div>
            </div>
        </div>
    </div>
    <div class="wrapper_full">
        <div class="wrapper_full_1">
            @include('site.layout.alert')
            <form class="form_pay" id="frm_order" method="POST" action="{{ route('site.payment.proceed') }}">
                @csrf
                @method('POST')
                @if (Auth::guard('customer')->check())
                    <div class="left_pay">
                        <div class="title_tt_1">Thông tin người mua</div>
                        <div class="div_form_pay">
                            <p class="tk_p_login">Bạn đã có tài khoản ? <a href="{{ route('site.customer.login') }}">Đăng
                                    nhập</a></p>
                            <div class="wp_input_div">
                                <p>Họ và tên(<span class="red">*</span>)</p>
                                <div class="input_frm">
                                    <input type="text" name="fullname"
                                        value="{{ Auth::guard('customer')->user()->name }}" class="input_pay">
                                    <div id="errorOrderName"></div>
                                </div>
                            </div>
                            <div class="wp_input_div">
                                <p>Số điện thoại(<span class="red">*</span>)</p>
                                <div class="input_frm">
                                    <input type="tel" name="mobile"
                                        value="{{ Auth::guard('customer')->user()->mobile }}" class="input_pay"
                                        pattern="0([0-9]{9,10})">
                                    <div id="errorOrderPhone"></div>
                                </div>
                            </div>
                            <div class="wp_input_div">
                                <p>Email</p>
                                <div class="input_frm">
                                    <input type="email" name="email"
                                        value="{{ Auth::guard('customer')->user()->email }}" class="input_pay">
                                    <div id="errorOrderEmail"></div>
                                </div>
                            </div>
                            <div class="wp_input_div">
                                <p>Địa chỉ giao hàng(<span class="red">*</span>)</p>
                                <div class="input_frm">
                                    <input type="text" name="numberhouse_street"
                                        value="{{ Auth::guard('customer')->user()->housenumber_street }}"
                                        class="input_pay">
                                    <div id="errorOrderAdress"></div>
                                </div>
                            </div>
                            {{-- <div class="wp_input_div">
                            <p>Dịch vụ giao hàng(<span class="red">*</span>)</p>
                            <div class="input_frm">
                                <select name="delivery_service" class="input_pay">
                                    <option value="">Giao hàng nhanh</option>
                                    <option value="">Giao hàng tiết kiệm</option>
                                    <option value="">Viettel Post</option>
                                </select>
                                <div id="errorOrderAdress"></div>
                            </div>
                        </div> --}}
                            <div class="wp_input_div">
                                <div class="wp_distric clearfix">
                                    @include('site.layout.address')
                                </div>
                            </div>
                            <div class="wp_input_div">
                                <p>Phương thức thanh toán(<span class="red">*</span>)</p>
                                <div class="input_frm">
                                    <div id="checkoutType">
                                        <div class="checkoutTypeSelect"> <input type="radio" name="payment_method"
                                                id="payment_method_1" value="0" data-type="0" checked><label
                                                for="payment_method_1">Thanh toán khi nhận hàng (COD)</label> <img
                                                src="{{ asset('storage/uploads/cod.jpg') }}"
                                                alt="Thanh toán khi nhận hàng (COD)">
                                        </div>
                                        <div class="checkoutTypeSelect" style="user-select: auto;">
                                            <input type="radio" name="payment_method" id="payment_method_2" value="1"
                                                data-type="2" style="user-select: auto;"><label for="payment_method_2"
                                                style="user-select: auto;">
                                                <p>Chuyển khoản qua ngân hàng</p>
                                                <p>STK: <b>{{ $company->bank_account }}</b>
                                                <p>Ghi chú chuyển khoản là tên và chụp hình gửi lại cho shop dễ kiểm tra ạ
                                                </p>
                                            </label>
                                            {{-- <img src="https://nhansamthinhphat.com/images/safe-pay-3.png"
                                            alt="Thanh toán trực tuyến" style="user-select: auto;"> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wp_input_div">
                                <p>Ghi chú</p>
                                <textarea name="note"></textarea>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="left_pay">
                        <div class="title_tt_1">Thông tin người mua</div>
                        <div class="div_form_pay">
                            <p class="tk_p_login">Bạn đã có tài khoản ? <a href="#">Đăng nhập</a></p>
                            <div class="wp_input_div">
                                <p>Họ và tên(<span class="red">*</span>)</p>
                                <div class="input_frm">
                                    <input type="text" name="fullname" value="" class="input_pay">
                                    <div id="errorOrderName"></div>
                                </div>
                            </div>
                            <div class="wp_input_div">
                                <p>Số điện thoại(<span class="red">*</span>)</p>
                                <div class="input_frm">
                                    <input type="tel" name="mobile" value="" class="input_pay"
                                        pattern="0([0-9]{9,10})">
                                    <div id="errorOrderPhone"></div>
                                </div>
                            </div>
                            <div class="wp_input_div">
                                <p>Email</p>
                                <div class="input_frm">
                                    <input type="email" name="email" value="" class="input_pay">
                                    <div id="errorOrderEmail"></div>
                                </div>
                            </div>
                            <div class="wp_input_div">
                                <p>Địa chỉ giao hàng(<span class="red">*</span>)</p>
                                <div class="input_frm">
                                    <input type="text" name="numberhouse_street" value="" class="input_pay">
                                    <div id="errorOrderAdress"></div>
                                </div>
                            </div>
                            {{-- <div class="wp_input_div">
                            <p>Dịch vụ giao hàng(<span class="red">*</span>)</p>
                            <div class="input_frm">
                                <select name="delivery_service" class="input_pay">
                                    <option value="">Giao hàng nhanh</option>
                                    <option value="">Giao hàng tiết kiệm</option>
                                    <option value="">Viettel Post</option>
                                </select>
                                <div id="errorOrderAdress"></div>
                            </div>
                        </div> --}}
                            <div class="wp_input_div">
                                <div class="wp_distric clearfix">
                                    @include('site.layout.address')
                                </div>
                            </div>
                            <div class="wp_input_div">
                                <p>Phương thức thanh toán(<span class="red">*</span>)</p>
                                <div class="input_frm">
                                    <div id="checkoutType">
                                        <div class="checkoutTypeSelect"> <input type="radio" name="payment_method"
                                                id="payment_method_1" value="0" data-type="0" checked><label
                                                for="payment_method_1">Thanh toán khi nhận hàng (COD)</label> <img
                                                src="{{ asset('storage/uploads/cod.jpg') }}"
                                                alt="Thanh toán khi nhận hàng (COD)">
                                        </div>
                                        <div class="checkoutTypeSelect" style="user-select: auto;">
                                            <input type="radio" name="payment_method" id="payment_method_2"
                                                value="1" data-type="2" style="user-select: auto;"><label
                                                for="payment_method_2" style="user-select: auto;">
                                                <p>Chuyển khoản qua ngân hàng</p>
                                                <p>STK: <b>{{ $company->bank_account }}</b>
                                                <p>Ghi chú chuyển khoản là tên và chụp hình gửi lại cho shop dễ kiểm tra ạ
                                                </p>
                                            </label>
                                            {{-- <img src="https://nhansamthinhphat.com/images/safe-pay-3.png"
                                            alt="Thanh toán trực tuyến" style="user-select: auto;"> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wp_input_div">
                                <p>Ghi chú</p>
                                <textarea name="note"></textarea>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="box_right_pay">
                    <div class="right_pay clearfix">
                        <div class="title_tt_1">Mã giảm giá</div>
                        <div class="div_form_pay1">
                            <div class="child_cart_detail">
                                <div class="box_voucher_code">
                                    <input type="text" name="voucher_code" placeholder="Nhập mã giảm giá"
                                        value="" class="input_pay coupon-input">
                                    <button type="button" id="coupon-button"
                                        onclick="checkExistDiscountCode('{{ route('site.ajax.checkDiscountCode') }}')"
                                        class="coupon-button">Đồng ý</button>
                                </div>
                                <div class="show_success" style="color:green; display: none;"></div>
                                <div class="show_error" style="display: none;"></div>
                                {{-- <div id="voucher_msg"></div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="right_pay clearfix">
                        <div class="title_tt_1">Đơn hàng</div>
                        <div id="order-cart-info" class="div_form_pay1">

                            @foreach ($carts as $cart)
                                @php
                                    $img = $cart->options['img'];
                                @endphp
                                <div class="child_cart_detail">
                                    <a href="{{ route('site.product.show', $cart->options['slug']) }}"
                                        class="img_a_cart" target="_blank"><img
                                            src="{{ asset("storage/uploads/$img") }}" alt="{{ $cart->name }}"></a>
                                    <span class="name_cart_span1">
                                        <a href="javascript:void(0)">{{ $cart->options['brand_name'] }}</a>
                                        <p><a href="{{ route('site.product.show', $cart->options['slug']) }}"
                                                target="_blank">{{ $cart->name }}</a></p>
                                        <div><span>Giá bán: </span> <b>{{ number_format($cart->price) }} VND</b></div>
                                    </span>
                                    <span class="name_cart_span2">
                                        <p>SL</p>
                                        <b>{{ $cart->qty }}</b>
                                    </span>
                                </div>
                            @endforeach

                            <div class="child_cart_detail1">
                                <b>Tạm tính:</b>
                                <p><span>{{ Cart::subtotal(0, '.', ',') }}</span> VND</p>
                            </div>
                            <div class="child_cart_detail1" id="discount_code">
                                <b>Giảm giá:</b>
                                <p><span>0</span> VND</p>
                            </div>
                            <div class="child_cart_detail1" id="shipping_fee">
                                <b>Phí vận chuyển:</b>
                                <p><span>{{ number_format($shippingFee) }}</span> VND</p>
                            </div>
                            <div class="child_cart_detail2">
                                <div class="child_cart_detail3" id="total_price">
                                    <b>Thành tiền :</b>
                                    <p><span>{{ number_format($total_price) }}</span> VND</p>
                                </div>
                                <div class="child_cart_detail3"> <i>(Đã bao gồm VAT)</i> </div>
                                <div class="child_cart_detail4"> <input type="submit" name="ok" id="btn_order"
                                        class="input_14" value="Hoàn tất"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
