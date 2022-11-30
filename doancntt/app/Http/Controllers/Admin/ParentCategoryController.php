<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ParentCategory\ParentCategoryAddFormRequest;
use App\Http\Requests\Admin\ParentCategory\ParentCategoryEditFormRequest;
use App\Http\Requests\Admin\ParentCategory\UpdateIntroductionFormRequest;
use App\Http\Services\Introduction\IntroductionService;
use App\Http\Services\ParentCategory\ParentCategoryService;
use App\Models\Introduction;
use App\Models\ParentCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ParentCategoryController extends Controller
{
    protected $parentCategoryService;
    protected $introductionService;

    public function __construct(ParentCategoryService $parentCategoryService, IntroductionService $introductionService)
    {
        $this->parentCategoryService = $parentCategoryService;
        $this->introductionService = $introductionService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parentCategories = $this->parentCategoryService->getAllParentCategories();

        return view('admin.parentCategory.index', [
            'parentCategories' => $parentCategories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $introductions = $this->introductionService->getAllIntroductions();

        return view('admin.parentCategory.create', [
            'introductions' => $introductions
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ParentCategoryAddFormRequest $request)
    {
        $parentCategory = $this->parentCategoryService->save($request);

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
    public function edit(ParentCategory $parentCategory)
    {
        $introductions = $this->introductionService->getAllIntroductions();
        return view('admin.parentCategory.edit', [
            'parentCategory' => $parentCategory,
            'introductions' => $introductions
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ParentCategoryEditFormRequest $request, ParentCategory $parentCategory)
    {
        $result = $this->parentCategoryService->update($request, $parentCategory);

        if (!$result) {
            return redirect()->back();
        }

        return redirect()->route('admin.parentCategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ParentCategory $parentCategory)
    {
        $result = $this->parentCategoryService->deleteById($parentCategory->id);

        return redirect()->back();
    }

    public function introduction(ParentCategory $parentCategory)
    {
        if (empty($parentCategory->introduction)) {
            Session::flash('warning', "Danh mục $parentCategory->name không có bài giới thiệu");
            return redirect()->back();
        }

        return view('admin.parentCategory.introduction', [
            'parentCategory' => $parentCategory
        ]);
    }

    public function updateIntroduction(UpdateIntroductionFormRequest $request, ParentCategory $parentCategory)
    {
        $introduction = Introduction::find($parentCategory->introduction->id);
        $introduction = $this->introductionService->update($request, $introduction);

        if (!$introduction) {
            return redirect()->back();
        }

        return redirect()->route('admin.parentCategory.index');
    }
}