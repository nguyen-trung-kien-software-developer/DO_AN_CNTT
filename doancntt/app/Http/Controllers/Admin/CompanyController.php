<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Company\CompanyEditFormRequest;
use App\Http\Services\Company\CompanyService;
use App\Http\Services\Address\AddressService;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    protected $companyService;
    protected $addressService;

    public function __construct(CompanyService $companyService, AddressService $addressService)
    {
        $this->companyService = $companyService;
        $this->addressService = $addressService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = $this->companyService->getCompanyAllInformation();
        $provinces = $this->addressService->getAllProvinces();

        return view('admin.company.index', [
            'company' => $company,
            'provinces' => $provinces,
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
    public function update(CompanyEditFormRequest $request, Company $company)
    {
        $result = $this->companyService->updateCompanyInformation($request, $company);

        return redirect()->back();
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