<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Services\Cart\CartService;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    protected $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    function show()
    {
        $carts = $this->cartService->fetch();

        if ($carts == null) {
            return redirect()->route('site.home');
        }

        return view('site.cart.show', [
            'carts' => $carts
        ]);
    }


    function create(Request $request)
    {
        $result = $this->cartService->create($request);

        if ($result == false) {
            return redirect()->back();
        }

        $carts = $this->cartService->fetch();

        if ($carts == null) {
            return redirect()->back();
        }

        return redirect()->route('site.cart.show');
    }

    public function update(Request $request)
    {
        $oneCart = $this->cartService->update($request);

        if (empty($oneCart)) {
            return response()->json([
                'isSuccess' => false,
            ]);
        }

        $product_qty = Cart::count();
        $total_price = Cart::subtotal(0, '.', ',');

        return response()->json([
            'isSuccess' => true,
            'oneCart' => $oneCart,
            'product_qty' => $product_qty,
            'total_price' => $total_price
        ]);
    }

    public function destroy(Request $request)
    {
        $rowId = (string) $request->input('rowId');

        $this->cartService->delete($rowId);

        return response()->json([
            'isSuccess' => true,

        ]);
    }
}