<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PageImage\PageImageAddFormRequest;
use App\Http\Requests\Admin\PageImage\PageImageEditFormRequest;
use App\Http\Services\PageImage\PageImageService;
use App\Models\PageImage;
use Illuminate\Http\Request;

class PageImageController extends Controller
{
    protected $pageImageServices;
    public function __construct(PageImageService $pageImageService)
    {
        $this->pageImageServices = $pageImageService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = $this->pageImageServices->getAllPageImages();

        return view('admin.pageImage.index', [
            'images' => $images
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pageImage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageImageAddFormRequest $request)
    {
        $image = $this->pageImageServices->createNewImage($request);

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
    public function edit(PageImage $pageImage)
    {
        return view('admin.pageImage.edit', [
            'pageImage' => $pageImage
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PageImageEditFormRequest $request, PageImage $pageImage)
    {
        $result = $this->pageImageServices->updateImage($request, $pageImage);

        if (!$result) {
            return redirect()->back();
        }

        return redirect()->route('admin.image.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PageImage $pageImage)
    {
        $image_id = $pageImage->id;
        $result = $this->pageImageServices->deleteById($image_id);

        return redirect()->back();
    }
}