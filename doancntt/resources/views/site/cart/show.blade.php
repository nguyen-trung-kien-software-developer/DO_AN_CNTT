@extends('site.layout.main')

@section('content')
    <div class="wrapper_full wrapper_full_border_1">
        <div class="wrapper_full_1">
            <div class="wrapper_full_4">
                <div class="title_cate_list"> <a href="{{ route('site.home') }}" class="fist_menu_cate_a">Trang chủ</a> <a
                        href="{{ route('site.cart.show') }}">Giỏ hàng</a> </div>
            </div>
        </div>
    </div>
    <div class="wrapper_full" style="padding: 90px 0;">
        <div class="wrapper_full_1">
            <div class="wrapper_full_1_mb">
                <div class="content_cart_mobile clearfix">
                    @foreach ($carts as $cart)
                        <div class="item_cart product_in_cart_{{ $cart->rowId }} clearfix">
                            @php
                                $img = $cart->options['img'];
                            @endphp
                            <div class="thumb_donhang"> <a
                                    href="{{ route('site.product.show', $cart->options['slug']) }}" target="_blank"><img
                                        src="{{ asset("storage/uploads/$img") }}" alt="{{ $cart->name }}"></a> </div>
                            <div class="info_donhang">
                                <div class="title_sanpham_donhang">
                                    <div><strong><a href="{{ route('site.product.show', $cart->options['slug']) }}"
                                                target="_blank">{{ $cart->name }}</a></strong></div> <a
                                        href="javascript:void(0)">{{ $cart->options['brand_name'] }}</a>
                                </div>
                                <div class="price_cart_info"><span class="giamoi"
                                        id="sub_total_one_product">{{ number_format($cart->price) }} VND</span></div>
                                <div class="number_pr_cart_table">
                                    <div class="number_cart1">
                                        <span class="icon-soluongtru img_click_minus1"
                                            onclick="updateQtyInCart('{{ route('site.cart.update') }}', this, '{{ $cart->rowId }}')"></span>
                                        <input type="text" name="qty" class="number_cart_input"
                                            value=" {{ $cart->qty }}"
                                            onchange="updateQtyInCart('{{ route('site.cart.update') }}', this, '{{ $cart->rowId }}')">
                                        <span class="icon-soluongcong img_click_plus1"
                                            onclick="updateQtyInCart('{{ route('site.cart.update') }}', this, '{{ $cart->rowId }}')"></span>
                                    </div>
                                </div>
                            </div> <a href="javascript:void(0)" class="btn_del_cart_item material-ripple"><i
                                    class="fa fa-trash"
                                    onclick="deleteItemInCart('{{ route('site.cart.destroy') }}','{{ $cart->rowId }}')"></i></a>
                        </div>
                    @endforeach

                    <div class="totail_11">
                        <p class="totail_1_1">Tổng tiền</p>
                        <p class="totail_1_2">{{ Cart::subtotal(0, '.', ',') }} VND</p>
                    </div>
                    <div class="thanhtoan_muasam"> <a href="{{ route('site.home') }}" class="a_next_by">Tiếp tục
                            mua sắm</a> <a href="{{ route('site.payment.checkout') }}" class="a_thanhtoan">Hoàn tất
                            đơn
                            hàng</a> </div>
                </div>

                <table class="table_cart">
                    <tbody>
                        <tr>
                            <td class="name_pr_cart_table">Sản phẩm</td>
                            <td class="price_pr_cart_table">Giá</td>
                            <td class="number_pr_cart_table">Số lượng</td>
                            <td class="total_pr_cart_table">Thành tiền</td>
                            <td class="delete_pr_cart_table">Xóa</td>
                        </tr>

                        @foreach ($carts as $cart)
                            <tr class="product_in_cart_{{ $cart->rowId }}">
                                <td class="name_pr_cart_table">
                                    @php
                                        $img = $cart->options['img'];
                                    @endphp
                                    <a href="{{ route('site.product.show', $cart->options['slug']) }}"
                                        class="img_a_cart_1" target="_blank"><img
                                            src="{{ asset("storage/uploads/$img") }}" alt="{{ $cart->name }}"></a>
                                    <span>
                                        <a href="javascript:void(0)">{{ $cart->options['brand_name'] }}</a>
                                        <p><a href="{{ route('site.product.show', $cart->options['slug']) }}"
                                                target="_blank">{{ $cart->name }}</a>
                                        </p>
                                    </span>
                                </td>
                                <td class="price_pr_cart_table">
                                    <p class="price_pr_cart_table1">{{ number_format($cart->price) }}</p>
                                </td>
                                <td class="number_pr_cart_table">
                                    <div class="number_cart1">
                                        <span class="icon-soluongtru img_click_minus1"
                                            onclick="updateQtyInCart('{{ route('site.cart.update') }}', this, '{{ $cart->rowId }}')"></span>
                                        <input type="text" name="qty" class="number_cart_input"
                                            value=" {{ $cart->qty }}"
                                            onchange="updateQtyInCart('{{ route('site.cart.update') }}', this, '{{ $cart->rowId }}')">
                                        <span class="icon-soluongcong img_click_plus1"
                                            onclick="updateQtyInCart('{{ route('site.cart.update') }}', this, '{{ $cart->rowId }}')"></span>
                                    </div>
                                </td>
                                <td class="total_pr_cart_table">
                                    <p class="price_pr_cart_table1" id="sub_total_one_product">
                                        {{ number_format($cart->subtotal) }} VND</p>
                                </td>
                                <td class="delete_pr_cart_table"><i
                                        onclick="deleteItemInCart('{{ route('site.cart.destroy') }}','{{ $cart->rowId }}')"></i>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <table class="text_tt_cart">
                    <tr>
                        <td>
                            <div class="text_tt_cart_left">
                                <ul>
                                    <li>Nếu bạn đồng ý mua danh sách sản phẩm ở trên thì vui lòng bấm nút "<a
                                            href="javascript:void()" rel="nofollow">HOÀN TẤT ĐƠN HÀNG</a>"</li>
                                    <li>Để tiếp tục mua thêm sản phẩm khác, bạn bấm nút "<a href="javascript:void()"
                                            rel="nofollow">TIẾP TỤC MUA</a>"</li>
                                    <li>Để bỏ từng sản phẩm trong danh sách, bấm vào biểu tượng xóa phía bên trái hình sản
                                        phẩm</li>
                                    <li>Để thêm số lượng cho một sản phẩm cần mua, bạn chọn số lượng</li>
                                </ul>
                            </div>
                        </td>
                        <td>
                            <div class="totail_11">
                                <p class="totail_1_1">Tổng tiền</p>
                                <p class="totail_1_2">{{ Cart::subtotal(0, '.', ',') }} VND</p>
                            </div>
                            <div class="thanhtoan_muasam"> <a href="{{ route('site.home') }}" class="a_next_by">Tiếp
                                    tục mua sắm</a>
                                <a href="{{ route('site.payment.checkout') }}" class="a_thanhtoan">Hoàn tất đơn
                                    hàng</a>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
