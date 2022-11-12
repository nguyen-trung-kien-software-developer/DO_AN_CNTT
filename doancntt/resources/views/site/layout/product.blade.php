<div class="box_product_v2">
    <div class="box_product_v2_img"> <a href="{{ route('site.product.show', [$product->slug]) }}"
            title="{{ $product->name }}">
            <img class="lazy" src="{{ asset("storage/uploads/$product->featured_image") }}"
                alt="{{ $product->name }}" style="display: block;"> </a> </div>
    <div class="box_product_v2_name_element">
        <div class="box_product_v2_name"> <a href="{{ route('site.product.show', [$product->slug]) }}"
                title="{{ $product->name }}">{{ $product->name }}</a> </div>
        <div class="box_product_v2_price clearfix">
            <div class="box_product_v2_price_num">
                @if ($product->price == 0 && $product->sale_price == 0)
                    <p class="price_v1">Liên hệ</p>
                @else
                    @if ($product->price > $product->sale_price)
                        <p class="price_v1_old">
                            {{ number_format($product->price) }}
                            VND</p>
                        <p class="price_v1">
                            {{ number_format($product->sale_price) }} VND</p>
                    @else
                        <p class="price_v1">
                            {{ number_format($product->sale_price) }} VND</p>
                    @endif
                @endif
            </div>
            <div class="box_product_v2_price_percent">
                <form action="{{ route('site.cart.create') }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <input type="hidden" name="qty_in_cart" value="1">

                    @if ($product->inventory_qty > 0)
                        @if ($product->price != 0 && $product->sale_price != 0)
                            <button class="btn_cart" type="submit"><b>Mua ngay</b>
                            </button>
                        @else
                            <button class="btn_cart" type="button" style="background-color: orange;"><b>Liên
                                    hệ</b>
                            </button>
                        @endif
                    @else
                        <button class="btn_cart" type="button" style="background-color: red;"><b>Hết hàng</b>
                        </button>
                    @endif
                </form>
                {{-- <button class="btn_cart"><span>Mua
                        ngay</span><i class="icon-muahang"></i></button> --}}
            </div>
        </div>
    </div>
    @if ($product->price != 0 && $product->sale_price != 0 && $product->price > $product->sale_price)
        @php
            $discount_percentage = 0;
            $discount_percentage = (($product->price - $product->sale_price) * 100) / $product->price;
        @endphp
        <p class="price_percent">-{{ ceil($discount_percentage) }}%</p>
    @endif
</div>
