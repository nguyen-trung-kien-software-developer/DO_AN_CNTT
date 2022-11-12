<?php

namespace App\Http\Services\Introduction;

use App\Models\Introduction;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class IntroductionService
{
    function getAllIntroductions()
    {
        $introductions = Introduction::all();

        return $introductions;
    }

    function getIntroductionBySlug($introductionSlug)
    {
        $introduction = Introduction::where('slug', $introductionSlug)->first();

        return $introduction;
    }

    public function save($request)
    {
        try {
            $title = $request->input('title');
            $description = $request->input('description');
            $represented_image = $request->input('represented_image');
            $content = $request->input('content');
            $video = $request->input('video');

            $slugString = $title;
            $slug = Str::slug($slugString, '-');

            $introduction = Introduction::create([
                'title' => $title,
                'represented_image' => $represented_image,
                'description' => $description,
                'content' => $content,
                'video' => $video,
                'slug' => $slug,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
            ]);

            Session::flash('success', 'Tạo mới bài giới thiệu thành công');
            return $introduction;
        } catch (\Exception $error) {
            Session::flash('error', 'Tạo mới bài giới thiệu thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    function update($request, $introduction)
    {
        try {
            $title = $request->input('title');
            $description = $request->input('description');
            $represented_image = $request->input('represented_image');
            $content = $request->input('content');
            $video = $request->input('video');

            $slugString = $title;
            $slug = Str::slug($slugString, '-');

            $introduction->title = $title;
            $introduction->description = $description;
            $introduction->represented_image = $represented_image;
            $introduction->content = $content;
            $introduction->video = $video;
            $introduction->slug = $slug;
            $introduction->save();

            Session::flash('success', 'Cập nhật bài giới thiệu thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Cập nhật bài giới thiệu thất bại');
            return false;
        }
    }

    function updateDescription($request, $introduction)
    {
        try {
            $description = $request->input('description');

            $introduction->description = $description;
            $introduction->save();

            Session::flash('success', 'Cập nhật mô tả bài giới thiệu thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Cập nhật mô tả bài giới thiệu thất bại');
            return false;
        }
    }

    function updateContent($request, $introduction)
    {
        try {
            $content = $request->input('content');

            $introduction->content = $content;
            $introduction->save();

            Session::flash('success', 'Cập nhật mô tả bài giới thiệu thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Cập nhật mô tả bài giới thiệu thất bại');
            return false;
        }
    }

    function deleteById($introduction_id)
    {
        try {
            $introduction = Introduction::find($introduction_id);
            Storage::delete("public/uploads/" . $introduction->represented_image);

            Introduction::where('id', $introduction_id)->delete();

            Session::flash('success', 'Xóa bài giới thiệu thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Xóa bài giới thiệu thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}