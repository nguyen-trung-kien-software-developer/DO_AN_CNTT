<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Brand\BrandAddFormRequest;
use App\Http\Requests\Admin\Brand\BrandEditFormRequest;
use App\Http\Requests\Admin\Brand\UpdateDescriptionFormRequest;
use App\Http\Services\Brand\BrandService;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    protected $brandService;
    public function __construct(BrandService $brandService)
    {
        $this->brandService = $brandService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = $this->brandService->getAllBrands();

        return view('admin.brand.index', [
            'brands' => $brands
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandAddFormRequest $request)
    {
        $brand = $this->brandService->save($request);

        return redirect()->back();
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
    public function edit(Brand $brand)
    {
        return view('admin.brand.edit', [
            'brand' => $brand
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BrandEditFormRequest $request, Brand $brand)
    {
        $result = $this->brandService->update($request, $brand);

        if (!$result) {
            return redirect()->back();
        }

        return redirect()->route('admin.brand.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        $result = $this->brandService->deleteById($brand->id);

        return redirect()->back();
    }

    public function description(Brand $brand)
    {
        return view('admin.brand.description', [
            'brand' => $brand
        ]);
    }

    public function updateDescription(UpdateDescriptionFormRequest $request, Brand $brand)
    {
        $result = $this->brandService->updateDescription($request, $brand);

        if (!$result) {
            return redirect()->back();
        }

        return redirect()->route('admin.brand.index');
    }
}