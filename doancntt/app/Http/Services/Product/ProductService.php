<?php

namespace App\Http\Services\Product;

use App\Models\ImageItem;
use App\Models\Product;
use App\Models\SubCategory;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductService
{
    protected $item_per_page;

    function getAllProducts()
    {
        $products = Product::where(['is_active' => 1])
            ->orderByDesc('created_date')
            ->get();

        return $products;
    }

    function getFirstProductBySubCategoryId($subCategoryId)
    {
        $product = Product::where(['category_id' => $subCategoryId, 'featured' => 1, 'is_active' => 1])
            ->orderByDesc('created_date')
            ->first();

        return $product;
    }

    function getFirstProductBySubCategoryIdOrderByCreatedDateAsc($subCategoryId)
    {
        $product = Product::where(['category_id' => $subCategoryId, 'featured' => 1, 'is_active' => 1])
            ->orderBy('created_date', 'ASC')
            ->first();

        return $product;
    }

    function getProductBySlug($slug)
    {
        $product = Product::where('slug', $slug)->first();

        return $product;
    }

    function getProductListBySlug($slug)
    {
        $products = Product::where('slug', $slug)->get();

        return $products;
    }


    function getProductById($id)
    {
        $product = Product::find($id);

        return $product;
    }

    function getByPattern($pattern)
    {
        $condition = [];
        $condition[] = ['name', 'LIKE', "%$pattern%"];
        $condition[] = ['is_active', '=', "1"];

        $products = Product::where($condition)->get();

        return $products;
    }

    // function getByPatternFollowSubCategoryIds($pattern, $subCategoryIds)
    // {
    //     $products = Product::whereIn('category_id', $subCategoryIds)
    //         ->where('name', 'LIKE', "%$pattern%")
    //         ->get();

    //     return $products;
    // }

    function getAllProductList($request)
    {
        $arrange = $request->input('sort');
        $price_range = $request->input('price_range');
        $brand_id = $request->input('brand_id');
        $query = Product::where(['is_active' => 1]);

        if (!empty($arrange)) {
            $arrayCon = explode('-', $arrange);
            $type = $arrayCon[0];
            $con = $arrayCon[1];

            switch ($type) {
                case 'created':
                    if ($con == 'asc') {
                        $query->orderBy('created_date', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('created_date', 'desc');
                    }
                    break;
                case 'alpha':
                    if ($con == 'asc') {
                        $query->orderBy('name', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('name', 'desc');
                    }
                    break;
                case 'price':
                    if ($con == 'asc') {
                        $query->orderBy('sale_price', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('sale_price', 'desc');
                    }
                    break;
            }
        }

        $condition = [];
        $condition[] = ['is_active', '=', "1"];

        if (!empty($price_range)) {

            $periodPrice = explode('-', $price_range);
            $from = $periodPrice[0];
            $to = $periodPrice[1];

            if ($to == 'greater') {
                $condition[] = ['sale_price', '>', $from];
            } else {
                $query->whereBetween('sale_price', [$from, $to]);
            }
        }

        if (!empty($brand_id)) {
            $condition[] = ['brand_id', $brand_id];
        }

        $query->where(
            $condition
        );

        $products = $query->get(); //nối URL parameters

        return $products;
    }

    function getAllProductListHavingPagination($request, $page, $item_per_page)
    {
        $this->item_per_page = $item_per_page;
        $arrange = $request->input('sort');
        $price_range = $request->input('price_range');
        $brand_id = $request->input('brand_id');
        $query = Product::where(['is_active' => 1]);

        if (!empty($arrange)) {
            $arrayCon = explode('-', $arrange);
            $type = $arrayCon[0];
            $con = $arrayCon[1];

            switch ($type) {
                case 'created':
                    if ($con == 'asc') {
                        $query->orderBy('created_date', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('created_date', 'desc');
                    }
                    break;
                case 'alpha':
                    if ($con == 'asc') {
                        $query->orderBy('name', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('name', 'desc');
                    }
                    break;
                case 'price':
                    if ($con == 'asc') {
                        $query->orderBy('sale_price', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('sale_price', 'desc');
                    }
                    break;
            }
        }

        $condition = [];
        $condition[] = ['is_active', '=', "1"];

        if (!empty($price_range)) {

            $periodPrice = explode('-', $price_range);
            $from = $periodPrice[0];
            $to = $periodPrice[1];

            if ($to == 'greater') {
                $condition[] = ['sale_price', '>', $from];
            } else {
                $query->whereBetween('sale_price', [$from, $to]);
            }
        }

        if (!empty($brand_id)) {
            $condition[] = ['brand_id', $brand_id];
        }

        $query->where(
            $condition
        );

        $products = $query->when($page, function ($query) use ($page) {
            $query->offset($page * $this->item_per_page);
        })
            ->paginate($this->item_per_page)
            ->withQueryString(); //nối URL parameters

        return $products;
    }

    function getAllProductListByPattern($request, $pattern, $subCategoryIds)
    {
        $arrange = $request->input('sort');
        $price_range = $request->input('price_range');
        $brand_id = $request->input('brand_id');
        $query = Product::whereIn('category_id', $subCategoryIds);

        if (!empty($arrange)) {
            $arrayCon = explode('-', $arrange);
            $type = $arrayCon[0];
            $con = $arrayCon[1];

            switch ($type) {
                case 'created':
                    if ($con == 'asc') {
                        $query->orderBy('created_date', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('created_date', 'desc');
                    }
                    break;
                case 'alpha':
                    if ($con == 'asc') {
                        $query->orderBy('name', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('name', 'desc');
                    }
                    break;
                case 'price':
                    if ($con == 'asc') {
                        $query->orderBy('sale_price', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('sale_price', 'desc');
                    }
                    break;
            }
        }

        $condition = [];
        $condition[] = ['name', 'LIKE', "%$pattern%"];
        $condition[] = ['is_active', '=', "1"];

        if (!empty($price_range)) {

            $periodPrice = explode('-', $price_range);
            $from = $periodPrice[0];
            $to = $periodPrice[1];

            if ($to == 'greater') {
                $condition[] = ['sale_price', '>', $from];
            } else {
                $query->whereBetween('sale_price', [$from, $to]);
            }
        }

        if (!empty($brand_id)) {
            $condition[] = ['brand_id', $brand_id];
        }

        $query->where(
            $condition
        );

        $products = $query->get(); //nối URL parameters

        return $products;
    }

    function getProductListByPatternHavingPagination($request, $page, $item_per_page, $pattern, $subCategoryIds)
    {
        $this->item_per_page = $item_per_page;
        $arrange = $request->input('sort');
        $price_range = $request->input('price_range');
        $brand_id = $request->input('brand_id');
        $query = Product::whereIn('category_id', $subCategoryIds);

        if (!empty($arrange)) {
            $arrayCon = explode('-', $arrange);
            $type = $arrayCon[0];
            $con = $arrayCon[1];

            switch ($type) {
                case 'created':
                    if ($con == 'asc') {
                        $query->orderBy('created_date', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('created_date', 'desc');
                    }
                    break;
                case 'alpha':
                    if ($con == 'asc') {
                        $query->orderBy('name', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('name', 'desc');
                    }
                    break;
                case 'price':
                    if ($con == 'asc') {
                        $query->orderBy('sale_price', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('sale_price', 'desc');
                    }
                    break;
            }
        }

        $condition = [];
        $condition[] = ['name', 'LIKE', "%$pattern%"];
        $condition[] = ['is_active', '=', "1"];

        if (!empty($price_range)) {

            $periodPrice = explode('-', $price_range);
            $from = $periodPrice[0];
            $to = $periodPrice[1];

            if ($to == 'greater') {
                $condition[] = ['sale_price', '>', $from];
            } else {
                $query->whereBetween('sale_price', [$from, $to]);
            }
        }

        if (!empty($brand_id)) {
            $condition[] = ['brand_id', $brand_id];
        }

        $query->where(
            $condition
        );

        $products = $query->when($page, function ($query) use ($page) {
            $query->offset($page * $this->item_per_page);
        })
            ->paginate($this->item_per_page)
            ->withQueryString(); //nối URL parameters

        return $products;
    }

    function getAllProductListBySubCategoryId($request, $category)
    {
        $arrange = $request->input('sort');
        $price_range = $request->input('price_range');
        $brand_id = $request->input('brand_id');
        $query = $category->products()->orderBy('created_date', 'desc');

        if (!empty($arrange)) {
            $arrayCon = explode('-', $arrange);
            $type = $arrayCon[0];
            $con = $arrayCon[1];

            switch ($type) {
                case 'created':
                    if ($con == 'asc') {
                        $query->orderBy('created_date', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('created_date', 'desc');
                    }
                    break;
                case 'alpha':
                    if ($con == 'asc') {
                        $query->orderBy('name', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('name', 'desc');
                    }
                    break;
                case 'price':
                    if ($con == 'asc') {
                        $query->orderBy('sale_price', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('sale_price', 'desc');
                    }
                    break;
            }
        }

        $condition = [];
        $condition[] = ['is_active', '=', "1"];

        if (!empty($price_range)) {

            $periodPrice = explode('-', $price_range);
            $from = $periodPrice[0];
            $to = $periodPrice[1];

            if ($to == 'greater') {
                $condition[] = ['sale_price', '>', $from];
            } else {
                $query->whereBetween('sale_price', [$from, $to]);
            }
        }

        if (!empty($brand_id)) {
            $condition[] = ['brand_id', $brand_id];
        }

        $query->where(
            $condition
        );

        $products = $query->get(); //nối URL parameters

        return $products;
    }

    function getProductListBySubCategoryIdHavingPagination($request, $page, $item_per_page, $category)
    {
        $this->item_per_page = $item_per_page;
        $arrange = $request->input('sort');
        $price_range = $request->input('price_range');
        $brand_id = $request->input('brand_id');
        $query = $category->products()->orderBy('created_date', 'desc');

        if (!empty($arrange)) {
            $arrayCon = explode('-', $arrange);
            $type = $arrayCon[0];
            $con = $arrayCon[1];

            switch ($type) {
                case 'created':
                    if ($con == 'asc') {
                        $query->orderBy('created_date', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('created_date', 'desc');
                    }
                    break;
                case 'alpha':
                    if ($con == 'asc') {
                        $query->orderBy('name', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('name', 'desc');
                    }
                    break;
                case 'price':
                    if ($con == 'asc') {
                        $query->orderBy('sale_price', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('sale_price', 'desc');
                    }
                    break;
            }
        }

        $condition = [];
        $condition[] = ['is_active', '=', "1"];

        if (!empty($price_range)) {

            $periodPrice = explode('-', $price_range);
            $from = $periodPrice[0];
            $to = $periodPrice[1];

            if ($to == 'greater') {
                $condition[] = ['sale_price', '>', $from];
            } else {
                $query->whereBetween('sale_price', [$from, $to]);
            }
        }

        if (!empty($brand_id)) {
            $condition[] = ['brand_id', $brand_id];
        }

        $query->where(
            $condition
        );

        $products = $query->when($page, function ($query) use ($page) {
            $query->offset($page * $this->item_per_page);
        })
            ->paginate($this->item_per_page)
            ->withQueryString(); //nối URL parameters

        return $products;
    }

    function getProductListByCategoryId($category_id)
    {
        $products = Product::where('category_id', $category_id)->get();

        return $products;
    }

    function getProductListBySubCategoryIdHavingPaginationViaAjax($request, $page, $item_per_page, $category_id)
    {
        $this->item_per_page = $item_per_page;
        $arrange = $request->input('sort');
        $price_range = $request->input('price_range');
        $brand_id = $request->input('brand_id');
        $category = SubCategory::find($category_id);
        $query = $category->products();

        if (!empty($arrange)) {
            $arrayCon = explode('-', $arrange);
            $type = $arrayCon[0];
            $con = $arrayCon[1];

            switch ($type) {
                case 'created':
                    if ($con == 'asc') {
                        $query->orderBy('created_date', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('created_date', 'desc');
                    }
                    break;
                case 'alpha':
                    if ($con == 'asc') {
                        $query->orderBy('name', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('name', 'desc');
                    }
                    break;
                case 'price':
                    if ($con == 'asc') {
                        $query->orderBy('sale_price', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('sale_price', 'desc');
                    }
                    break;
            }
        }

        $condition = [];
        $condition[] = ['is_active', '=', "1"];

        if (!empty($price_range)) {

            $periodPrice = explode('-', $price_range);
            $from = $periodPrice[0];
            $to = $periodPrice[1];

            if ($to == 'greater') {
                $condition[] = ['sale_price', '>', $from];
            } else {
                $query->whereBetween('sale_price', [$from, $to]);
            }
        }

        if (!empty($brand_id)) {
            $condition[] = ['brand_id', $brand_id];
        }

        $query->where(
            $condition
        );

        $products = $query->when($page, function ($query) use ($page) {
            $query->offset($page * $this->item_per_page);
        })
            ->limit($this->item_per_page)
            ->get(); //nối URL parameters

        return $products;
    }

    function getRelatedProductBySubCategoryId($item_per_page, $category_id)
    {
        $condition = [];
        $condition[] = ['category_id', '=', $category_id];
        $condition[] = ['is_active', '=', "1"];

        $this->item_per_page = $item_per_page;
        $products = Product::where($condition)->orderBy('created_date', 'desc')->limit($this->item_per_page)->get();

        return $products;
    }

    function updateDescriptionDetails($product, $request)
    {
        try {
            $product->description_details = $request->input('description_details');
            $product->save();

            Session::flash('success', 'Cập nhật mô tả chi tiết sản phẩm thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Cập nhật mô tả mô tả chi tiết sản phẩm thất bại');
            return false;
        }
    }

    function updateUseTutorials($product, $request)
    {
        try {
            $product->use_tutorial = $request->input('use_tutorial');
            $product->save();

            Session::flash('success', 'Cập nhật hướng dẫn sử dụng sản phẩm thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Cập nhật hướng dẫn sử dụng sản phẩm thất bại');
            return false;
        }
    }

    function updateDescription($product, $request)
    {
        try {
            $product->description = $request->input('description');
            $product->save();

            Session::flash('success', 'Cập nhật mô tả sản phẩm thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Cập nhật mô tả sản phẩm thất bại');
            return false;
        }
    }

    public function save($request)
    {
        try {
            $currentDatetime = Carbon::now();

            $barcode = $request->input('barcode');
            $weight = $request->input('weight');
            $made_by = $request->input('made_by');
            $name = $request->input('name');
            $price = $request->input('price');
            $sale_price = $request->input('sale_price');
            $featured_image = $request->input('featured_image');
            $inventory_qty = $request->input('inventory_qty');
            $category_id = $request->input('subCategory');
            $brand_id = $request->input('brand');
            $featured = $request->input('featured');
            $is_active = $request->input('is_active');

            if (!$featured) {
                $featured = 0;
            }

            if (!$is_active) {
                $is_active = 0;
            }

            $slugString = $name;
            $slug = Str::slug($slugString, '-');

            $productList = $this->getProductListBySlug($slug);
            if (count($productList) > 0) {
                $count = 1;
                foreach ($productList as $product) {
                    $count++;
                }
                $slugString = $name . '-' . $count;
                $slug = Str::slug($slugString, '-');
            }

            $product = Product::create([
                'barcode' => $barcode,
                'name' => $name,
                'weight' => $weight,
                'made_by' => $made_by,
                'price' => $price,
                'sale_price' => $sale_price,
                'featured_image' => $featured_image,
                'inventory_qty' => $inventory_qty,
                'featured' => $featured,
                'category_id' => $category_id,
                'brand_id' => $brand_id,
                'slug' => $slug,
                'created_date' => $currentDatetime,
                'description' => $name,
                'description_details' => '',
                'use_tutorial' => '',
                'is_active' => $is_active,
            ]);

            Session::flash('success', 'Tạo sản phẩm thành công');
            return $product;
        } catch (\Exception $err) {
            Session::flash('error', 'Tạo sản phẩm thất bại !!!');
            return false;
        }
    }

    public function update($product, $request)
    {
        try {
            $product_id = $product->id;
            $barcode = $request->input('barcode');
            $weight = $request->input('weight');
            $made_by = $request->input('made_by');
            $created_date = date('Y-m-d h:m:s', strtotime($request->input('created_date')));
            $name = $request->input('name');
            $price = $request->input('price');
            $sale_price = $request->input('sale_price');
            $featured_image = $request->input('featured_image');
            $inventory_qty = $request->input('inventory_qty');
            $category_id = $request->input('subCategory');
            $brand_id = $request->input('brand');
            $featured = $request->input('featured');
            $is_active = $request->input('is_active');

            if ($featured_image != $product->featured_image) {
                Storage::delete("public/uploads/" . $product->featured_image);
            }

            if (!$featured) {
                $featured = 0;
            }

            if (!$is_active) {
                $is_active = 0;
            }

            $slugString = $name;
            $slug = Str::slug($slugString, '-');

            $productList = $this->getProductListBySlug($slug);

            if (count($productList) > 0) {
                $count = 1;
                foreach ($productList as $product) {
                    $count++;
                }
                $slugString = $name . '-' . $count;
                $slug = Str::slug($slugString, '-');
            }

            Product::where('id', $product_id)
                ->update([
                    'barcode' => $barcode,
                    'name' => $name,
                    'weight' => $weight,
                    'created_date' => $created_date,
                    'made_by' => $made_by,
                    'price' => $price,
                    'sale_price' => $sale_price,
                    'featured_image' => $featured_image,
                    'inventory_qty' => $inventory_qty,
                    'featured' => $featured,
                    'category_id' => $category_id,
                    'brand_id' => $brand_id,
                    'slug' => $slug,
                    'is_active' => $is_active,
                ]);

            Session::flash('success', 'Cập nhật sản phẩm thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Cập nhật sản phẩm thất bại ! Vui lòng thử lại.');
            return false;
        }
    }

    public function delete($product_id)
    {
        try {
            $product = Product::find($product_id);
            if (count($product->orderItems) > 0) {
                Session::flash('error', 'Sản phẩm đã có trong đơn hàng. Vui lòng xóa sản phẩm trong đơn hàng trước !');
                return false;
            }

            $product = Product::find($product_id);
            Storage::delete("public/uploads/" . $product->featured_image);

            Product::where('id', $product_id)->delete();

            Session::flash('success', 'Xóa sản phẩm thành công');
            return true;
        } catch (\Exception $error) {
            Session::flash('error', 'Xóa sản phẩm thất bại');
            return false;
        }
    }

    public function saveImage($product, $request)
    {
        try {
            $image = $request->input('featured_image');

            $imageItem = ImageItem::create([
                'product_id' => $product->id,
                'name' => $image,
            ]);

            Session::flash('success', 'Thêm hình ảnh sản phẩm thành công');
            return $imageItem;
        } catch (\Exception $error) {
            Session::flash('error', 'Thêm hình ảnh sản phẩm thất bại');
            return false;
        }
    }

    public function deleteImageOfProduct($image_item_id)
    {
        try {
            $imageItem = ImageItem::find($image_item_id);
            Storage::delete("public/uploads/" . $imageItem->name);

            ImageItem::where('id', $image_item_id)->delete();

            Session::flash('success', 'Xóa hình ảnh của sản phẩm thành công');
            return true;
        } catch (\Exception $error) {
            Session::flash('error', 'Xóa hình ảnh của sản phẩm thất bại');
            return false;
        }
    }

    public function getAllImageItemOfProduct()
    {
        $images = ImageItem::all();

        return $images;
    }

    public function duplicateInformationByProductId($product_id)
    {
        try {
            $oldProduct = Product::find($product_id);
            $currentDatetime = Carbon::now();

            $barcode = $oldProduct->barcode;
            $weight = $oldProduct->weight;
            $made_by = $oldProduct->made_by;
            $name = $oldProduct->name;
            $price = $oldProduct->price;
            $sale_price = $oldProduct->sale_price;
            $featured_image = $oldProduct->featured_image;
            $inventory_qty = $oldProduct->inventory_qty;
            $category_id = $oldProduct->category_id;
            $brand_id = $oldProduct->brand_id;
            $description = $oldProduct->description;
            $description_details = $oldProduct->description_details;
            $use_tutorial = $oldProduct->use_tutorial;
            $featured = $oldProduct->featured;
            $is_active = $oldProduct->is_active;

            if (!$featured) {
                $featured = 0;
            }

            if (!$is_active) {
                $is_active = 0;
            }

            $slugString = $name;
            $slug = Str::slug($slugString, '-');

            $productList = $this->getProductListBySlug($slug);
            if (count($productList) > 0) {
                $count = 1;
                foreach ($productList as $product) {
                    $count++;
                }
                $slugString = $name . '-' . $count;
                $slug = Str::slug($slugString, '-');
            }

            $product = Product::create([
                'barcode' => $barcode,
                'name' => $name,
                'weight' => $weight,
                'made_by' => $made_by,
                'price' => $price,
                'sale_price' => $sale_price,
                'featured_image' => $featured_image,
                'inventory_qty' => $inventory_qty,
                'featured' => $featured,
                'category_id' => $category_id,
                'brand_id' => $brand_id,
                'slug' => $slug,
                'created_date' => $currentDatetime,
                'description' => $description,
                'description_details' => $description_details,
                'use_tutorial' => $use_tutorial,
                'is_active' => $is_active,
            ]);

            Session::flash('success', 'Sao chép thông tin sản phẩm thành công');
            return $product;
        } catch (\Exception $err) {
            Session::flash('error', 'Sao chép thông tin sản phẩm thất bại !!!');
            return false;
        }
    }
}