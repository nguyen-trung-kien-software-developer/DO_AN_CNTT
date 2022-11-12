<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Services\Banner\BannerService;
use App\Http\Services\Blog\BlogService;
use App\Http\Services\Company\CompanyService;
use App\Http\Services\Consultant\ConsultantService;
use App\Http\Services\ParentCategory\ParentCategoryService;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    protected $companyService;
    protected $bannerService;
    protected $parentCategoryService;
    protected $blogService;
    protected $consultantService;

    public function __construct(CompanyService $companyService, BannerService $bannerService, ParentCategoryService $parentCategoryService, BlogService $blogService, ConsultantService $consultantService)
    {
        $this->companyService = $companyService;
        $this->bannerService = $bannerService;
        $this->parentCategoryService = $parentCategoryService;
        $this->blogService = $blogService;
        $this->consultantService = $consultantService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = $this->companyService->getCompanyInformationBySelectAttributes(['hotline']);
        $banners = $this->bannerService->getAllBannerOrderBySortByAsc();
        $parentCategories = $this->parentCategoryService->getAllParentCategories();
        $limit = 5;
        $orderBy = 'created_date';
        $blogs = $this->blogService->getBlogListOrderByCreatedDateDescHavingLimit($limit, $orderBy);
        $consultantLimit = 10;
        $consultantOrderBy = 'created_date';
        $consultants = $this->consultantService->getConsultantListOrderByCreatedDateDescHavingLimit($consultantLimit, $consultantOrderBy);

        return view('site.home.index', [
            'banners' => $banners,
            'company' => $company,
            'parentCategories' => $parentCategories,
            'blogs' => $blogs,
            'consultants' => $consultants,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}