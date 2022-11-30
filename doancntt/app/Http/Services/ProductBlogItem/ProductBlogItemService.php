<?php

namespace App\Http\Services\ProductBlogItem;

use App\Models\ProductBlogItem;

class ProductBlogItemService
{
    public function getProductBlogByOrderIdAndProductId($blog_id, $product_id)
    {
        $productBlog = ProductBlogItem::where('blog_id', $blog_id)->where('product_id', $product_id)->get()->first();
        return $productBlog;
    }
}