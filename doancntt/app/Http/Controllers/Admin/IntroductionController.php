<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Introduction\IntroductionAddFormRequest;
use App\Http\Requests\Admin\Introduction\UpdateContentFormRequest;
use App\Http\Requests\Admin\Introduction\UpdateDescriptionFormRequest;
use App\Http\Requests\Admin\Introduction\IntroductionEditFormRequest;
use App\Http\Services\Introduction\IntroductionService;
use App\Models\Introduction;
use Illuminate\Http\Request;

class IntroductionController extends Controller
{
    protected $introductionService;
    public function __construct(IntroductionService $introductionService)
    {
        $this->introductionService = $introductionService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $introductions = $this->introductionService->getAllIntroductions();

        return view('admin.introduction.index', [
            'introductions' => $introductions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.introduction.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IntroductionAddFormRequest $request)
    {
        $introduction = $this->introductionService->save($request);

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
    public function edit(Introduction $introduction)
    {
        return view('admin.introduction.edit', [
            'introduction' => $introduction
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(IntroductionEditFormRequest $request, Introduction $introduction)
    {
        $introduction = $this->introductionService->update($request, $introduction);

        if (!$introduction) {
            return redirect()->back();
        }

        return redirect()->route('admin.introduction.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Introduction $introduction)
    {
        $result = $this->introductionService->deleteById($introduction->id);

        return redirect()->back();
    }

    public function description(Introduction $introduction)
    {
        return view('admin.introduction.description', [
            'introduction' => $introduction
        ]);
    }

    public function updateDescription(UpdateDescriptionFormRequest $request, Introduction $introduction)
    {
        $result = $this->introductionService->updateDescription($request, $introduction);

        if (!$result) {
            return redirect()->back();
        }

        return redirect()->route('admin.introduction.index');
    }

    public function content(Introduction $introduction)
    {
        return view('admin.introduction.content', [
            'introduction' => $introduction
        ]);
    }

    public function updateContent(UpdateContentFormRequest $request, Introduction $introduction)
    {
        $result = $this->introductionService->updateContent($request, $introduction);

        if (!$result) {
            return redirect()->back();
        }

        return redirect()->route('admin.introduction.index');
    }
}