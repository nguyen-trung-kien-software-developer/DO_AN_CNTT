<?php

namespace App\Http\Services\Page;

use App\Models\History;
use App\Models\Page;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class PageService
{
    function getPageById($id)
    {
        $page = Page::where('id', $id)->first();

        return $page;
    }

    function getAllPages()
    {
        $pages = Page::all();

        return $pages;
    }

    public function update($request, $page)
    {
        try {
            $title = $request->input('title');
            $content = $request->input('content');

            $page->title = $title;
            $page->content = $content;
            $page->save();

            Session::flash('success', 'Cập nhật trang thành công');
            return true;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật trang thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    public function getAllHistories()
    {
        $histories = History::all();

        return $histories;
    }

    public function saveHistory($request)
    {
        try {
            $timeline = $request->input('timeline');
            $parentCategory = $request->input('parentCategory');
            $description = $request->input('description');

            $history = History::create([
                'timeline' => $timeline,
                'parent_category_id' => $parentCategory,
                'description' => $description,
            ]);

            Session::flash('success', 'Tạo mới lịch sử thành công');
            return $history;
        } catch (\Exception $error) {
            Session::flash('error', 'Tạo mới lịch sử thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    public function updateHistory($request, $history)
    {
        try {
            $timeline = $request->input('timeline');
            $parentCategory = $request->input('parentCategory');
            $description = $request->input('description');

            $history->timeline = $timeline;
            $history->parent_category_id = $parentCategory;
            $history->description = $description;
            $history->save();

            Session::flash('success', 'Cập nhật lịch sử thành công');
            return true;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật lịch sử thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    function deleteHistoryById($history_id)
    {
        try {
            History::where('id', $history_id)->delete();

            Session::flash('success', 'Xóa lịch sử thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Xóa lịch sử thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}