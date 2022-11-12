<?php

namespace App\Http\Services\OrderItem;

use App\Http\Services\Cart\CartService;
use App\Http\Services\Product\ProductService;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class OrderItemService
{
    public function getAll($condition = null)
    {
        $orderItems = OrderItem::orderBy($condition)->get();

        return $orderItems;
    }

    public function getOrderItemByOrderIdAndProductId($order_id, $product_id)
    {
        $orderItem = OrderItem::where('order_id', $order_id)->where('product_id', $product_id)->get()->first();
        return $orderItem;
    }

    public function create($order_id)
    {
        try {
            $cartService = new CartService();
            $items = $cartService->fetch();

            foreach ($items as $item) {
                $product_id = $item->id;
                $qty =  $item->qty;
                $unit_price = $item->price;
                $total_price = $item->subtotal;

                OrderItem::create(
                    [
                        'order_id' => (string) $order_id,
                        'product_id' => (string) $product_id,
                        'qty' => (string) $qty,
                        'unit_price' => (string) $unit_price,
                        'total_price' => (string) $total_price
                    ]
                );
            }

            return true;
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;
        }
    }

    public function save($request)
    {
        try {
            $order_id = $request->input('order');
            $product_id = $request->input('product');
            $qty = $request->input('qty');
            $unit_price = $request->input('unit_price');

            $orderItem = $this->getOrderItemByOrderIdAndProductId($order_id, $product_id);

            if (!empty($orderItem)) {
                Session::flash('error', "Đơn hàng có mã #$order_id đã có sản phẩm mã là #$product_id. Vui lòng chỉ thay đổi số lượng của sản phẩm trên đơn hàng đó !");
                return false;
            }

            $createdProduct = Product::find($product_id);

            $orderItem = OrderItem::create([
                'order_id' => $order_id,
                'product_id' => $createdProduct->id,
                'qty' => $qty,
                'unit_price' => $createdProduct->sale_price,
                'total_price' => $createdProduct->sale_price * $qty
            ]);

            Session::flash('success', 'Tạo chi tiết đơn hàng thành công');
            return $orderItem;
        } catch (\Exception $err) {
            Session::flash('error', "Tạo chi tiết đơn hàng thất bại");
            return false;
        }
    }

    public function update($order, $product, $request)
    {
        try {
            $qty = $request->input('qty');

            OrderItem::where('order_id', $order->id)
                ->where('product_id', $product->id)
                ->update([
                    'qty' => $qty,
                    'total_price' => $product->sale_price * $qty
                ]);

            Session::flash('success', 'Cập nhật chi tiết đơn hàng thành công');
            return true;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật chi tiết đơn hàng thất bại ! Vui lòng thử lại');
            return false;
        }
    }

    public function delete($order_id, $product_id)
    {
        try {
            OrderItem::where('order_id', $order_id)
                ->where('product_id', $product_id)
                ->delete();

            Session::flash('success', 'Xóa chi tiết đơn hàng thành công');
            return true;
        } catch (\Exception $error) {
            Session::flash('error', 'Xóa chi tiết đơn hàng thất bại !!!');
            return false;
        }
    }
}