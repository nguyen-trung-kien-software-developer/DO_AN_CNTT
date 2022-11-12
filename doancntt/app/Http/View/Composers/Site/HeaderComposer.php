<?php

namespace App\Http\View\Composers\Site;

use App\Http\Services\Company\CompanyService;
use App\Http\Services\Cart\CartService;
use App\Http\Services\ParentCategory\ParentCategoryService;
use Illuminate\View\View;

class HeaderComposer
{

    protected $companyService;
    protected $parentCategoryService;
    protected $cartService;

    public function __construct(CompanyService $companyService, ParentCategoryService $parentCategoryService, CartService $cartService)
    {
        $this->companyService = $companyService;
        $this->parentCategoryService = $parentCategoryService;
        $this->cartService = $cartService;
    }

    public function compose(View $view)
    {
        $headerData = [];
        $company = $this->companyService->getCompanyInformationBySelectAttributes(['logo', 'hotline']);
        $parentCategories = $this->parentCategoryService->getAllParentCategories();
        $carts = $this->cartService->fetch();
        $headerData['company'] = $company;
        $headerData['parentCategories'] = $parentCategories;
        $headerData['carts'] = $carts;
        $headerData = (object) $headerData;

        $view->with('headerData', $headerData);
    }
}