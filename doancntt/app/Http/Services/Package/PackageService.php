<?php

namespace App\Http\Services\Package;

use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

class PackageService
{
    public function fetch()
    {
        if (Cart::instance('adminWishlist')->count() == 0) {
            return null;
        }

        $cart = Cart::instance('adminWishlist')->content();

        return $cart;
    }

    public function create($request)
    {
        // dd($request->input());

        $product_id = (int) $request->input('product_id');
        $qty = (int) $request->input('qty');

        $product = Product::find($product_id);

        if (empty($product)) {
            return false;
        }

        $product_name = $product->name;
        $img = $product->featured_image;
        $sale_price = $product->sale_price;

        $cart = Cart::instance('adminWishlist')->add(['id' => $product_id, 'name' => $product_name, 'qty' => $qty, 'price' => $sale_price, 'weight' => 0])->associate('App\Models\Product');

        return $cart;
    }

    public function update($request)
    {
        $rowId = (string) $request->input('rowId');
        $qty = (int) $request->input('qty');

        $oneCart = Cart::instance('adminWishlist')->update($rowId, $qty);

        return $oneCart;
    }

    public function delete($rowId)
    {
        Cart::instance('adminWishlist')->remove($rowId);
    }
}