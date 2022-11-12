<?php

namespace App\Http\Services\Cart;

use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

class CartService
{
    public function fetch()
    {
        if (Auth::guard('customer')->check() && (!empty(Auth::guard('customer')->user()->email))) {
            Cart::instance('wishlist')->restore(Auth::guard('customer')->user()->email);
            Cart::instance('wishlist')->store(Auth::guard('customer')->user()->email);
        }

        if (Cart::instance('wishlist')->count() == 0) {
            return null;
        }

        $cart = Cart::instance('wishlist')->content();

        // dd($cart);

        return $cart;
    }

    public function create($request)
    {
        // dd($request->input());

        $product_id = (int) $request->input('product_id');
        $qty = (int) $request->input('qty_in_cart');

        $product = Product::find($product_id);
        $product_name = $product->name;
        $img = $product->featured_image;
        $sale_price = $product->sale_price;
        $brand_name = $product->brand->name;
        $slug = $product->slug;

        if ($qty <= 0 || $product_id <= 0) {
            Session::flash('error', 'Số lượng hoặc Sản phẩm không chính xác');
            return false;
        }

        $cart = Cart::instance('wishlist')->add(['id' => $product_id, 'name' => $product_name, 'qty' => $qty, 'price' => $sale_price, 'weight' => 0, 'options' => ['img' => $img, 'brand_name' => $brand_name, 'slug' => $slug]])->associate('App\Models\Product');

        if (Auth::guard('customer')->check() && (!empty(Auth::guard('customer')->user()->email))) {
            Cart::instance('wishlist')->restore(Auth::guard('customer')->user()->email);
            Cart::instance('wishlist')->store(Auth::guard('customer')->user()->email);
        }

        // dd($cart);

        return $cart;
    }

    public function update($request)
    {
        $rowId = (string) $request->input('rowId');
        $qty = (int) $request->input('qty');

        $oneCart = Cart::instance('wishlist')->update($rowId, $qty);

        if (Auth::guard('customer')->check() && (!empty(Auth::guard('customer')->user()->email))) {
            Cart::instance('wishlist')->erase(Auth::guard('customer')->user()->email);
            Cart::instance('wishlist')->store(Auth::guard('customer')->user()->email);
        }

        return $oneCart;
    }

    public function delete($rowId)
    {
        Cart::instance('wishlist')->remove($rowId);

        if (Auth::guard('customer')->check() && (!empty(Auth::guard('customer')->user()->email))) {
            Cart::instance('wishlist')->erase(Auth::guard('customer')->user()->email);
            Cart::instance('wishlist')->store(Auth::guard('customer')->user()->email);
        }
    }
}