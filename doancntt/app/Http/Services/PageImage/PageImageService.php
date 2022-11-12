<?php

namespace App\Http\Services\PageImage;

use App\Models\PageImage;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class PageImageService
{
    function getAllPageImages()
    {
        $images = PageImage::all();

        return $images;
    }

    public function createNewImage($request)
    {
        try {
            $url = $request->input('url');
            $imageName = $request->input('page_image');
            $description = $request->input('description');

            $image = PageImage::create([
                'name' => $imageName,
                'url' => $url,
                'description' => $description,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
            ]);

            Session::flash('success', 'Tạo mới hình ảnh thành công');
            return $image;
        } catch (\Exception $error) {
            Session::flash('error', 'Tạo mới hình ảnh thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    public function updateImage($request, $image)
    {
        try {
            $url = $request->input('url');
            $imageName = $request->input('page_image');
            $description = $request->input('description');

            $image->url = $url;
            $image->name = $imageName;
            $image->description = $description;
            $image->updated_at = Carbon::now()->format("Y-m-d H:i:s");
            $image->save();

            Session::flash('success', 'Cập nhật hình ảnh thành công');
            return $image;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật hình ảnh thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    function deleteById($image_id)
    {
        try {
            $image = PageImage::find($image_id);
            Storage::delete("public/uploads/" . $image->name);

            PageImage::where('id', $image_id)->delete();

            Session::flash('success', 'Xóa hình ảnh thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Xóa hình ảnh thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}