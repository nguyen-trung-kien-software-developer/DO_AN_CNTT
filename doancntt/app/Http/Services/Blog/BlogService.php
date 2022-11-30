<?php

namespace App\Http\Services\Blog;

use App\Models\Blog;
use App\Models\ProductBlogItem;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Http\Services\Package\PackageService;
use App\Http\Services\ProductBlogItem\ProductBlogItemService;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Str;

class BlogService
{
    protected $item_per_page;

    function getAllBlogs()
    {
        $blogs = Blog::orderBy('created_date', 'desc')->get();

        return $blogs;
    }

    function getBlogListOrderByCreatedDateDescHavingLimit($limit, $orderBy)
    {
        $blogs = Blog::orderBy($orderBy, 'desc')->limit($limit)->get();

        return $blogs;
    }

    function getBlogListHavingPagination($page, $item_per_page)
    {
        $this->item_per_page = $item_per_page;

        $blogs = Blog::when($page, function ($query) use ($page) {
            $query->offset($page * $this->item_per_page);
        })
            ->orderBy('created_date', 'desc')
            ->limit($this->item_per_page)
            ->get(); //nối URL parameters

        return $blogs;
    }

    function getLastestBlogListHavingLimit($limit)
    {
        $blogs = Blog::orderBy('created_date', 'desc')->limit($limit)->get();

        return $blogs;
    }

    function getBlogBySlug($slug)
    {
        $blog = Blog::where('slug', $slug)->first();

        return $blog;
    }

    function getBlogListBySlug($slug)
    {
        $blog = Blog::where('slug', $slug)->get();

        return $blog;
    }

    public function save($request)
    {
        try {
            $title = $request->input('title');
            $featured_image = $request->input('featured_image');
            $description = $request->input('description');
            $content = $request->input('content');

            $slugString = $title;
            $slug = Str::slug($slugString, '-');

            $blogList = $this->getBlogListBySlug($slug);

            if (count($blogList) > 0) {
                $count = 1;
                foreach ($blogList as $blog) {
                    $count++;
                }
                $slugString = $title . '-' . $count;
                $slug = Str::slug($slugString, '-');
            }


            $blog = Blog::create([
                'title' => $title,
                'featured_image' => $featured_image,
                'description' => $description,
                'content' => $content,
                'created_date' => Carbon::now(),
                'slug' => $slug,
            ]);

            $blog_id = $blog->id;
            $packageService = new PackageService();
            $items = $packageService->fetch();

            if (!empty($items)) {
                foreach ($items as $item) {
                    $product_id = $item->id;

                    ProductBlogItem::create(
                        [
                            'blog_id' => (string) $blog_id,
                            'product_id' => (string) $product_id,
                        ]
                    );
                }
                Cart::instance('adminWishlist')->destroy();
            }

            Session::flash('success', 'Tạo mới tin tức thành công');
            return $blog;
        } catch (\Exception $error) {
            Session::flash('error', 'Tạo mới tin tức thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    public function update($request, $blog)
    {
        try {
            $blog_id = $blog->id;
            $title = $request->input('title');
            $featured_image = $request->input('featured_image');
            $description = $request->input('description');
            $content = $request->input('content');

            $slugString = $title;
            $slug = Str::slug($slugString, '-');

            $blogList = $this->getBlogListBySlug($slug);

            if (count($blogList) > 0) {
                $count = 1;
                foreach ($blogList as $blog) {
                    $count++;
                }
                $slugString = $title . '-' . $count;
                $slug = Str::slug($slugString, '-');
            }

            $blog->title = $title;
            $blog->featured_image = $featured_image;
            $blog->content = $content;
            $blog->description = $description;
            $blog->slug = $slug;
            $blog->save();

            $ids = $request->input('ids');
            $blog = Blog::find($blog_id);

            foreach ($blog->productBlogItems as $productBlogItem) {
                if (empty($ids) || (!in_array($productBlogItem->product_id, $ids))) {
                    ProductBlogItem::where('blog_id', $blog_id)
                        ->where('product_id', $productBlogItem->product_id)
                        ->delete();
                }
            }

            // Add items
            $packageService = new PackageService();
            $items = $packageService->fetch();

            if (!empty($items)) {
                foreach ($items as $item) {
                    $product_id = $item->id;

                    $productBlogService = new ProductBlogItemService();
                    $productBlog = $productBlogService->getProductBlogByOrderIdAndProductId($blog_id, $product_id);

                    // Nếu sản phẩm đã tồn tại trong bài blog thi bỏ qua
                    if (!empty($productBlog)) {
                        continue;
                    }

                    ProductBlogItem::create(
                        [
                            'blog_id' => (string) $blog_id,
                            'product_id' => (string) $product_id,
                        ]
                    );
                }
                Cart::instance('adminWishlist')->destroy();
            }

            Session::flash('success', 'Cập nhật tin tức thành công');
            return true;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật tin tức thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    function updateDescription($request, $blog)
    {
        try {
            $content = $request->input('content');

            $blog->content = $content;
            $blog->save();

            Session::flash('success', 'Cập nhật nội dung chi tiết tin tức thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Cập nhật nội dung chi tiết mô tả tin tức thất bại');
            return false;
        }
    }

    function deleteById($blog_id)
    {
        try {
            $blog = Blog::find($blog_id);
            Storage::delete("public/uploads/" . $blog->featured_image);

            Blog::where('id', $blog_id)->delete();

            Session::flash('success', 'Xóa bài tin tức thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Xóa bài tin tức thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}