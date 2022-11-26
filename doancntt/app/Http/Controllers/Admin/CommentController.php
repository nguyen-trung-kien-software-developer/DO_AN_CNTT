<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Comment\CreateCommentFormRequest;
use App\Http\Requests\Admin\Comment\CreateCommentOfProductFormRequest;
use App\Http\Requests\Admin\Comment\EditCommentOfProductFormRequest;
use App\Http\Services\Comment\CommentService;
use App\Http\Services\Product\ProductService;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    protected $commentService;
    protected $productService;

    public function __construct(CommentService $commentService, ProductService $productService)
    {
        $this->commentService = $commentService;
        $this->productService = $productService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = $this->commentService->getAllComments();

        return view('admin.comment.index', [
            'comments' => $comments
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = $this->productService->getAllProducts();

        return view('admin.comment.create', [
            'products' => $products,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCommentFormRequest $request)
    {
        $comment = $this->commentService->save($request);

        return redirect()->back();
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
    public function edit(Comment $comment)
    {
        $products = $this->productService->getAllProducts();

        return view('admin.comment.edit', [
            'products' => $products,
            'comment' => $comment
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditCommentOfProductFormRequest $request, Comment $comment)
    {
        $result = $this->commentService->update($request, $comment);

        if (!$result) {
            return redirect()->back();
        }

        return redirect()->route('admin.comment.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function storeOfProduct(CreateCommentOfProductFormRequest $request, Product $product)
    {
        $comment = $this->commentService->saveCommentByProduct($request, $product);

        return redirect()->back();
    }
}