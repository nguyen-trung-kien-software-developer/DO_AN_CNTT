<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Services\Blog\BlogService;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $blogService;

    public function __construct(BlogService $blogService)
    {
        $this->blogService = $blogService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $allBlogs = $this->blogService->getAllBlogs();
        $page = $request->input('page') ?? 1;
        $index_page = $page - 1;
        $item_per_page = 15;
        $blogs = $this->blogService->getBlogListHavingPagination($index_page, $item_per_page);

        $total = count($allBlogs);
        $page_number = ceil($total / $item_per_page);

        $limit = 5;
        $lastestBlogs = $this->blogService->getLastestBlogListHavingLimit($limit);

        return view('site.blog.index', [
            'blogs' => $blogs,
            'page' => $page,
            'page_number' => $page_number,
            'lastestBlogs' => $lastestBlogs,
        ]);
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
    public function show($blogSlug)
    {
        $blog = $this->blogService->getBlogBySlug($blogSlug);

        if (empty($blog)) {
            return redirect()->route('site.home');
        }

        $limit = 5;
        $lastestBlogs = $this->blogService->getLastestBlogListHavingLimit($limit);

        return view('site.blog.show', [
            'mainBlog' => $blog,
            'lastestBlogs' => $lastestBlogs,
            // 'seoKeyword' => $blog->description,
            'title' => $blog->title,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
}
