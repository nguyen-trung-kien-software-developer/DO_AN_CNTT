<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Services\Introduction\IntroductionService;
use App\Http\Services\ParentCategory\ParentCategoryService;
use Illuminate\Http\Request;

class IntroductionController extends Controller
{
    protected $introductionService;
    protected $parentCategoryService;

    public function __construct(IntroductionService $introductionService, ParentCategoryService $parentCategoryService)
    {
        $this->introductionService = $introductionService;
        $this->parentCategoryService = $parentCategoryService;
    }

    function show($parentCategorySlug, $introductionSlug)
    {
        $parentCategory = $this->parentCategoryService->getParentCategoryBySlug($parentCategorySlug);

        if (empty($parentCategory)) {
            return redirect()->route('site.home');
        }

        $introduction = $this->introductionService->getIntroductionBySlug($introductionSlug);

        if (empty($introduction)) {
            return redirect()->route('site.home');
        }

        return view('site.introduction.show', [
            'introduction' => $introduction,
            'parentCategory' => $parentCategory
        ]);
    }
}