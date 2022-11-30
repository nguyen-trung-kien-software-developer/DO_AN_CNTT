<?php

namespace App\Helpers;

use App\Http\Services\Product\ProductService;

class HomeHelper
{
    public static function getOneProductBySubCategoryId($subCategoryId)
    {
        $productService = new ProductService();
        $product = null;
        $product = $productService->getFirstProductBySubCategoryId($subCategoryId);

        return $product;
    }

    public static function getOneProductBySubCategoryIdOrderByCreatedDateAsc($subCategoryId)
    {
        $productService = new ProductService();
        $product = null;
        $product = $productService->getFirstProductBySubCategoryIdOrderByCreatedDateAsc($subCategoryId);

        return $product;
    }
}