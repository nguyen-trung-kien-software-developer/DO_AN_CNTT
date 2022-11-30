<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Branch\BranchAddFormRequest;
use App\Http\Requests\Admin\Branch\BranchEditFormRequest;
use App\Http\Services\Branch\BranchService;
use App\Http\Services\Address\AddressService;
use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    protected $branchService;
    protected $addressService;

    public function __construct(BranchService $branchService, AddressService $addressService)
    {
        $this->branchService = $branchService;
        $this->addressService = $addressService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches = $this->branchService->getAllBranches();

        return view('admin.branch.index', [
            'branches' => $branches
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinces = $this->addressService->getAllProvinces();

        return view('admin.branch.create', [
            'provinces' => $provinces,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BranchAddFormRequest $request)
    {
        $branch = $this->branchService->save($request);

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
    public function edit(Branch $branch)
    {
        $provinces = $this->addressService->getAllProvinces();

        return view('admin.branch.edit', [
            'branch' => $branch,
            'provinces' => $provinces,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BranchEditFormRequest $request, Branch $branch)
    {
        $result = $this->branchService->update($request, $branch);

        if (!$result) {
            return redirect()->back();
        }

        return redirect()->route('admin.branch.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branch $branch)
    {
        $result = $this->branchService->deleteById($branch->id);

        return redirect()->back();
    }
}