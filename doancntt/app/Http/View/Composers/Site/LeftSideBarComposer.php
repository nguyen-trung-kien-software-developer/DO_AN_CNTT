<?php

namespace App\Http\View\Composers\Site;

use App\Http\Services\Brand\BrandService;
use Illuminate\View\View;

class LeftSideBarComposer
{

    protected $brandService;

    public function __construct(BrandService $brandService)
    {
        $this->brandService = $brandService;
    }

    public function compose(View $view)
    {
        $leftSideBarData = [];
        $brands = $this->brandService->getAllBrands();
        $leftSideBarData['brands'] = $brands;

        $leftSideBarData = (object) $leftSideBarData;

        $view->with('leftSideBarData', $leftSideBarData);
    }
}