<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Services\Brand\BrandService;
use App\Http\Services\ParentCategory\ParentCategoryService;
use App\Http\Services\Product\ProductService;
use App\Http\Services\SubCategory\SubCategoryService;
use App\Models\ParentCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    protected $parentCategoryService;
    protected $subCategoryService;
    protected $productService;
    protected $brandService;

    public function __construct(ParentCategoryService $parentCategoryService, SubCategoryService $subCategoryService, ProductService $productService, BrandService $brandService)
    {
        $this->parentCategoryService = $parentCategoryService;
        $this->subCategoryService = $subCategoryService;
        $this->productService = $productService;
        $this->brandService = $brandService;
    }

    function index(Request $request, $parentCategorySlug, $subCategorySlug)
    {
        $parentCategory = $this->parentCategoryService->getParentCategoryBySlug($parentCategorySlug);

        if (empty($parentCategory)) {
            return redirect()->route('site.home');
        }

        $subCategory = $this->subCategoryService->getSubCategoryBySlug($subCategorySlug);

        if (empty($subCategory)) {
            return redirect()->route('site.home');
        }

        $page = $request->input('page') ?? 1;
        $index_page = $page - 1;

        $products = $this->productService->getAllProductListBySubCategoryId($request, $subCategory);

        $item_per_page = 16;
        $productsOnePage = $this->productService->getProductListBySubCategoryIdHavingPagination($request, $index_page, $item_per_page, $subCategory);

        $total = count($products);
        $page_number = ceil($total / $item_per_page);

        return view('site.subCategory.index', [
            'parentCategory' => $parentCategory,
            'subCategory' => $subCategory,
            'productsOnePage' => $productsOnePage,
            'page' => $page,
            'page_number' => $page_number,
        ]);
    }

    public function searchProduct(Request $request)
    {
        $page = $request->input('page') ?? 1;
        $index_page = $page - 1;

        $pattern = $request->input('q');
        $parentCategory_id = $request->input('cate');

        $subCategoryIds = [];
        if (!empty($parentCategory_id)) {
            $parentCategory = ParentCategory::find($parentCategory_id);

            foreach ($parentCategory->subCategories as $subCategory) {
                $subCategoryIds[] = $subCategory->id;
            }
        } else {
            $parentCategories = $this->parentCategoryService->getAllParentCategories();

            foreach ($parentCategories as $parentCategory) {
                foreach ($parentCategory->subCategories as $subCategory) {
                    $subCategoryIds[] = $subCategory->id;
                }
            }
        }
        $brands = $this->brandService->getAllBrands();

        $item_per_page = 16;
        // $products = $this->productService->getByPatternFollowSubCategoryIds($pattern, $subCategoryIds);

        $productList = $this->productService->getAllProductListByPattern($request, $pattern, $subCategoryIds);

        $productsOnePage = $this->productService->getProductListByPatternHavingPagination($request, $index_page, $item_per_page, $pattern, $subCategoryIds);

        $total = count($productList);
        $page_number = ceil($total / $item_per_page);

        return view('site.subCategory.searchProduct', [
            'productsOnePage' => $productsOnePage,
            'brands' => $brands,
            'page' => $page,
            'page_number' => $page_number,
        ]);
    }
}