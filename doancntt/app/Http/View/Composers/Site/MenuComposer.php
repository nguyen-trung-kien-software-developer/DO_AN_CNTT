<?php

namespace App\Http\View\Composers\Site;

use App\Http\Services\ParentCategory\ParentCategoryService;
use Illuminate\View\View;

class MenuComposer
{

    protected $parentCategoryService;

    public function __construct(ParentCategoryService $parentCategoryService)
    {
        $this->parentCategoryService = $parentCategoryService;
    }

    public function compose(View $view)
    {
        $menuData = [];
        $allParentCategories = $this->parentCategoryService->getAllParentCategories();
        $parentCategories = $this->parentCategoryService->getAllParentCategoriesHavingLimit(3);
        $menuData['allParentCategories'] = $allParentCategories;
        $menuData['parentCategories'] = $parentCategories;
        $menuData = (object) $menuData;

        $view->with('menuData', $menuData);
    }
}