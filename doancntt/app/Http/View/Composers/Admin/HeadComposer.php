<?php

namespace App\Http\View\Composers\Admin;

use App\Http\Services\Company\CompanyService;
use App\Http\Services\Cart\CartService;
use App\Http\Services\ParentCategory\ParentCategoryService;
use Illuminate\View\View;

class HeadComposer
{

    protected $companyService;
    protected $parentCategoryService;

    public function __construct(CompanyService $companyService)
    {
        $this->companyService = $companyService;
    }

    public function compose(View $view)
    {
        $headerData = [];
        $company = $this->companyService->getCompanyInformationBySelectAttributes(['name', 'favicon']);
        $headerData['company'] = $company;

        $headerData = (object) $headerData;

        $view->with('headerData', $headerData);
    }
}