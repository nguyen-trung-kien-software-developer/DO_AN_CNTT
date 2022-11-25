<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Page\HistoryAddFormRequest;
use App\Http\Requests\Admin\Page\HistoryEditFormRequest;
use App\Http\Requests\Admin\Page\PageEditFormRequest;
use App\Http\Services\Page\PageService;
use App\Models\History;
use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Services\ParentCategory\ParentCategoryService;

class PageController extends Controller
{
    protected $pageService;
    protected $parentCategoryService;

    public function __construct(PageService $pageService, ParentCategoryService $parentCategoryService)
    {
        $this->pageService = $pageService;
        $this->parentCategoryService = $parentCategoryService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function edit(Page $page)
    {
        return view('admin.page.edit', [
            'page' => $page,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PageEditFormRequest $request, Page $page)
    {
        $result = $this->pageService->update($request, $page);

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

    public function history()
    {
        $histories = $this->pageService->getAllHistories();

        return view('admin.page.history', [
            'histories' => $histories
        ]);
    }

    public function createHistory()
    {
        $parentCategories = $this->parentCategoryService->getAllParentCategories();
        return view('admin.page.createHistory', [
            'parentCategories' => $parentCategories,
        ]);
    }

    public function storeHistory(HistoryAddFormRequest $request)
    {
        $history = $this->pageService->saveHistory($request);

        return redirect()->back();
    }

    public function editHistory(History $history)
    {
        $parentCategories = $this->parentCategoryService->getAllParentCategories();

        return view('admin.page.editHistory', [
            'history' => $history,
            'parentCategories' => $parentCategories,
        ]);
    }

    public function updateHistory(HistoryEditFormRequest $request, History $history)
    {
        $result = $this->pageService->updateHistory($request, $history);

        if (!$result) {
            return redirect()->back();
        }

        return redirect()->route('admin.page.history');
    }

    public function destroyHistory(History $history)
    {
        $result = $this->pageService->deleteHistoryById($history->id);

        return redirect()->back();
    }
}