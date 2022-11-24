<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Services\ParentCategory\ParentCategoryService;
use Illuminate\Http\Request;

class ParentCategoryController extends Controller
{
    protected $parentCategoryService;

    public function __construct(ParentCategoryService $parentCategoryService)
    {
        $this->parentCategoryService = $parentCategoryService;
    }

    public function index($parentCategorySlug)
    {
        $parentCategory = $this->parentCategoryService->getParentCategoryBySlug($parentCategorySlug);

        if (empty($parentCategory)) {
            return redirect()->route('site.home');
        }

        return view('site.parentCategory.index', [
            'parentCategory' => $parentCategory,
        ]);
    }
}