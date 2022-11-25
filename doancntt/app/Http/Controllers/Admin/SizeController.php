<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Size\CreateSizeFormRequest;
use App\Http\Requests\Admin\Size\EditSizeFormRequest;
use App\Http\Services\Size\SizeService;
use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    protected $sizeService;
    public function __construct(SizeService $sizeService)
    {
        $this->sizeService = $sizeService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sizes = $this->sizeService->getAllSizes();

        return view('admin.size.index', [
            'sizes' => $sizes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.size.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSizeFormRequest $request)
    {
        $size = $this->sizeService->save($request);

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
    public function edit(Size $size)
    {
        return view('admin.size.edit', [
            'size' => $size
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditSizeFormRequest $request, Size $size)
    {
        $result = $this->sizeService->update($request, $size);

        if (!$result) {
            return redirect()->back();
        }

        return redirect()->route('admin.size.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Size $size)
    {
        $size_id = $size->id;
        $result = $this->sizeService->deleteById($size_id);

        return redirect()->back();
    }
}