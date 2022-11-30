<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DiscountCode\DiscountCodeAddFormRequest;
use App\Http\Requests\Admin\DiscountCode\DiscountCodeEditFormRequest;
use App\Http\Services\DiscountCode\DiscountCodeService;
use App\Models\DiscountCode;
use Illuminate\Http\Request;

class DiscountCodeController extends Controller
{
    protected $discountCodeService;
    public function __construct(DiscountCodeService $discountCodeService)
    {
        $this->discountCodeService = $discountCodeService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discountCodes = $this->discountCodeService->getAllDiscountCodes();

        return view('admin.discountCode.index', [
            'discountCodes' => $discountCodes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.discountCode.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DiscountCodeAddFormRequest $request)
    {
        $discountCode = $this->discountCodeService->save($request);

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
    public function edit(DiscountCode $discountCode)
    {
        return view('admin.discountCode.edit', [
            'discountCode' => $discountCode
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DiscountCodeEditFormRequest $request, DiscountCode $discountCode)
    {
        $result = $this->discountCodeService->update($request, $discountCode);

        if (!$result) {
            return redirect()->back();
        }

        return redirect()->route('admin.discountCode.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DiscountCode $discountCode)
    {
        $result = $this->discountCodeService->deleteById($discountCode->id);

        return redirect()->back();
    }
}