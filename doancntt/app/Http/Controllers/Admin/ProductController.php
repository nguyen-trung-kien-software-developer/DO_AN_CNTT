<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\AddImageItemToProductRequest;
use App\Http\Requests\Admin\Product\DescriptionDetailsEditFormRequest;
use App\Http\Requests\Admin\Product\ProductAddFormRequest;
use App\Http\Requests\Admin\Product\ProductEditFormRequest;
use App\Http\Requests\Admin\Product\UpdateDescriptionFormRequest;
use App\Http\Requests\Admin\Product\UseTutorialEditFormRequest;
use App\Http\Services\Brand\BrandService;
use App\Http\Services\Comment\CommentService;
use App\Http\Services\ParentCategory\ParentCategoryService;
use App\Http\Services\Product\ProductService;
use App\Models\Comment;
use App\Models\ImageItem;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;
    protected $parentCategoryService;
    protected $brandService;
    protected $commentService;

    public function __construct(ProductService $productService, ParentCategoryService $parentCategoryService, BrandService $brandService, CommentService $commentService)
    {
        $this->productService = $productService;
        $this->parentCategoryService = $parentCategoryService;
        $this->brandService = $brandService;
        $this->commentService = $commentService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->productService->getAllProducts();

        return view('admin.product.index', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parentCategories = $this->parentCategoryService->getAllParentCategories();
        $brands = $this->brandService->getAllBrands();

        return view('admin.product.create', [
            'parentCategories' => $parentCategories,
            'brands' => $brands
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductAddFormRequest $request)
    {
        $product = $this->productService->save($request);

        if (!$product) {
            return redirect()->back();
        }

        return redirect()->route('admin.product.edit', [$product->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $parentCategories = $this->parentCategoryService->getAllParentCategories();
        $brands = $this->brandService->getAllBrands();

        return view('admin.product.edit', [
            'product' => $product,
            'parentCategories' => $parentCategories,
            'brands' => $brands
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductEditFormRequest $request, Product $product)
    {
        $result = $this->productService->update($product, $request);

        if (!$result) {
            return redirect()->back();
        }

        return redirect()->route('admin.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product_id = $product->id;

        $result = $this->productService->delete($product_id);

        return redirect()->back();
    }

    public function description(Product $product)
    {
        return view('admin.product.description', [
            'product' => $product
        ]);
    }

    public function updateDescription(UpdateDescriptionFormRequest $request, Product $product)
    {
        $result = $this->productService->updateDescription($product, $request);

        if (!$result) {
            return redirect()->back();
        }

        return redirect()->route('admin.product.index');
    }

    public function descriptionDetails(Product $product)
    {
        return view('admin.product.descriptionDetails', [
            'product' => $product
        ]);
    }

    public function updateDescriptionDetails(DescriptionDetailsEditFormRequest $request, Product $product)
    {
        $result = $this->productService->updateDescriptionDetails($product, $request);

        if (!$result) {
            return redirect()->back();
        }

        return redirect()->route('admin.product.index');
    }

    public function useTutorials(Product $product)
    {
        return view('admin.product.useTutorials', [
            'product' => $product
        ]);
    }

    public function updateUseTutorials(UseTutorialEditFormRequest $request, Product $product)
    {
        $result = $this->productService->updateUseTutorials($product, $request);

        if (!$result) {
            return redirect()->back();
        }

        return redirect()->route('admin.product.index');
    }

    public function imageItems(Product $product)
    {
        return view('admin.product.imageItems', [
            'product' => $product
        ]);
    }

    public function uploadImageItems(AddImageItemToProductRequest $request, Product $product)
    {
        $result = $this->productService->saveImage($product, $request);

        return redirect()->back();
    }

    public function deleteImageItems(ImageItem $imageItem)
    {
        $result = $this->productService->deleteImageOfProduct($imageItem->id);

        return redirect()->back();
    }

    public function showAllImageItem()
    {
        $images = $this->productService->getAllImageItemOfProduct();

        return view('admin.product.allImageItem', [
            'images' => $images
        ]);
    }

    public function comments(Product $product)
    {
        $comments = $this->commentService->getCommentListByProductIdOrderByCreatedDateDesc($product->id);

        return view('admin.product.comments', [
            'product' => $product,
            'comments' => $comments,
        ]);
    }

    public function destroyComment(Comment $comment)
    {
        $result = $this->commentService->deleteById($comment->id);

        return redirect()->back();
    }

    public function copy(Request $request)
    {
        $product_id = $request->input("product_id");
        $product = $this->productService->duplicateInformationByProductId($product_id);

        return redirect()->back();
    }
}