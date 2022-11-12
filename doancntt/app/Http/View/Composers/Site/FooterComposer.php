<?php

namespace App\Http\View\Composers\Site;

use App\Http\Services\Company\CompanyService;
use App\Http\Services\ParentCategory\ParentCategoryService;
use App\Http\Services\SubCategory\SubCategoryService;
use Illuminate\View\View;

class FooterComposer
{

    protected $companyService;
    protected $parentCategoryService;

    public function __construct(CompanyService $companyService, ParentCategoryService $parentCategoryService)
    {
        $this->companyService = $companyService;
        $this->parentCategoryService = $parentCategoryService;
    }

    public function compose(View $view)
    {
        $headerData = [];
        $company = $this->companyService->getCompanyAllInformation();
        $parentCategories = $this->parentCategoryService->getAllParentCategories();
        $headerData['company'] = $company;
        $headerData['parentCategories'] = $parentCategories;

        $view->with('headerData', $headerData);
    }
}