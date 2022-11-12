<?php

namespace App\Http\Services\Ajax;

use Carbon\Carbon;
use Illuminate\Support\Str;

class AjaxService
{
    public function companyFileStore($request)
    {
        if ($request->hasFile('file')) {
            try {
                //get Original Name Image
                $name = Str::slug(now()->format('Y-m-d H:i:s'), '-') . '-' . Carbon::now()->format('s') . "_" . $request->file('file')->getClientOriginalName();
                // $name = $request->file('file')->getClientOriginalName();
                $imageType = $request->input('type');

                $path = '';
                $storedName = '';
                //Save image into storage
                if ($imageType == 'user_image') {
                    $request->file('file')->storeAs(
                        'public/uploads/users',
                        $name
                    );
                    $path = route('site.home') . '/storage/uploads/users/' . $name;
                    $storedName = 'users/' . $name;
                } else if ($imageType == 'product_image') {
                    $request->file('file')->storeAs(
                        'public/uploads/products',
                        $name
                    );
                    $path = route('site.home') . '/storage/uploads/products/' . $name;
                    $storedName = 'products/' . $name;
                } else if ($imageType == 'page_image') {
                    $request->file('file')->storeAs(
                        'public/uploads/pages',
                        $name
                    );
                    $path = route('site.home') . '/storage/uploads/pages/' . $name;
                    $storedName = 'pages/' . $name;
                } else if ($imageType == 'introduction_image') {
                    $request->file('file')->storeAs(
                        'public/uploads/introductions',
                        $name
                    );
                    $path = route('site.home') . '/storage/uploads/introductions/' . $name;
                    $storedName = 'introductions/' . $name;
                } else if ($imageType == 'sub_category_image') {
                    $request->file('file')->storeAs(
                        'public/uploads/sectors',
                        $name
                    );
                    $path = route('site.home') . '/storage/uploads/sectors/' . $name;
                    $storedName = 'sectors/' . $name;
                } else if ($imageType == 'blog_image') {
                    $request->file('file')->storeAs(
                        'public/uploads/news',
                        $name
                    );
                    $path = route('site.home') . '/storage/uploads/news/' . $name;
                    $storedName = 'news/' . $name;
                } else if ($imageType == 'slider_image') {
                    $request->file('file')->storeAs(
                        'public/uploads/banners',
                        $name
                    );
                    $path = route('site.home') . '/storage/uploads/banners/' . $name;
                    $storedName = 'banners/' . $name;
                } else if ($imageType == 'company_image') {
                    $request->file('file')->storeAs(
                        'public/uploads/company',
                        $name
                    );
                    $path = route('site.home') . '/storage/uploads/company/' . $name;
                    $storedName = 'company/' . $name;
                }

                return ['path' => $path, 'storedName' => $storedName];
            } catch (\Exception $error) {
                return false;
            }
        }
    }
}