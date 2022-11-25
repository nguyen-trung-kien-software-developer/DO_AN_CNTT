<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SubCategory\SubCategoryAddFormRequest;
use App\Http\Requests\Admin\SubCategory\SubCategoryEditFormRequest;
use App\Http\Services\SubCategory\SubCategoryService;
use App\Http\Services\ParentCategory\ParentCategoryService;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    protected $subCategoryService;
    protected $parentCategoryService;

    public function __construct(SubCategoryService $subCategoryService, ParentCategoryService $parentCategoryService)
    {
        $this->subCategoryService = $subCategoryService;
        $this->parentCategoryService = $parentCategoryService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subCategories = $this->subCategoryService->getAllSubCategories();

        return view('admin.subCategory.index', [
            'subCategories' => $subCategories
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

        return view('admin.subCategory.create', [
            'parentCategories' => $parentCategories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubCategoryAddFormRequest $request)
    {
        $subCategory = $this->subCategoryService->save($request);

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
    public function edit(SubCategory $subCategory)
    {
        $parentCategories = $this->parentCategoryService->getAllParentCategories();

        return view('admin.subCategory.edit', [
            'subCategory' => $subCategory,
            'parentCategories' => $parentCategories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SubCategoryEditFormRequest $request, SubCategory $subCategory)
    {
        $result = $this->subCategoryService->update($request, $subCategory);

        if (!$result) {
            return redirect()->back();
        }

        return redirect()->route('admin.subCategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subCategory)
    {
        $result = $this->subCategoryService->deleteById($subCategory->id);

        return redirect()->back();
    }
}