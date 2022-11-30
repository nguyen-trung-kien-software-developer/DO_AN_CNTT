<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ShippingStatus\ShippingStatusEditFormRequest;
use App\Http\Services\ShippingStatus\ShippingStatusService;
use App\Models\ShippingStatus;
use Illuminate\Http\Request;

class ShippingStatusController extends Controller
{
    protected $shippingStatusService;
    public function __construct(ShippingStatusService $shippingStatusService)
    {
        $this->shippingStatusService = $shippingStatusService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shippingStatuses = $this->shippingStatusService->getAllShippingStatuses();

        return view('admin.shippingStatus.index', [
            'shippingStatuses' => $shippingStatuses
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ShippingStatus $shippingStatus)
    {
        return view('admin.shippingStatus.edit', [
            'shippingStatus' => $shippingStatus
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ShippingStatusEditFormRequest $request, ShippingStatus $shippingStatus)
    {
        $result = $this->shippingStatusService->update($request, $shippingStatus);

        if (!$result) {
            return redirect()->back();
        }

        return redirect()->route('admin.shippingStatus.index');
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