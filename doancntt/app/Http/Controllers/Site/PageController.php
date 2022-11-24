<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Services\Page\PageService;
use Illuminate\Http\Request;

class PageController extends Controller
{
    protected $pageService;

    public function __construct(PageService $pageService)
    {
        $this->pageService = $pageService;
    }

    public function buyingTutorial()
    {
        $page = $this->pageService->getPageById(1);

        return view('site.page.buyingTutorial', [
            'page' => $page
        ]);
    }

    public function orderMethod()
    {
        $page = $this->pageService->getPageById(2);

        return view('site.page.orderMethod', [
            'page' => $page
        ]);
    }

    public function salePolicy()
    {
        $page = $this->pageService->getPageById(3);

        return view('site.page.salePolicy', [
            'page' => $page
        ]);
    }

    public function returnPolicy()
    {
        $page = $this->pageService->getPageById(4);

        return view('site.page.returnPolicy', [
            'page' => $page
        ]);
    }

    public function transportMethod()
    {
        $page = $this->pageService->getPageById(5);

        return view('site.page.transportMethod', [
            'page' => $page
        ]);
    }

    public function samNuiHanQuoc()
    {
        $page = $this->pageService->getPageById(6);

        return view('site.page.samNuiHanQuoc', [
            'page' => $page
        ]);
    }
}