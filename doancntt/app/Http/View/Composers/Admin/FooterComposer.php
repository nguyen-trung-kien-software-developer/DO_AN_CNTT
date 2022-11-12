<?php

namespace App\Http\View\Composers\Admin;

use App\Http\Services\Company\CompanyService;
use App\Http\Services\Cart\CartService;
use App\Http\Services\ParentCategory\ParentCategoryService;
use Illuminate\View\View;

class FooterComposer
{

    protected $companyService;
    protected $parentCategoryService;

    public function __construct(CompanyService $companyService)
    {
        $this->companyService = $companyService;
    }

    public function compose(View $view)
    {
        $footerData = [];
        $company = $this->companyService->getCompanyInformationBySelectAttributes(['name', 'website']);
        $footerData['company'] = $company;

        $footerData = (object) $footerData;

        $view->with('footerData', $footerData);
    }
}