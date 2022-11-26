<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Blog\BlogAddFormRequest;
use App\Http\Requests\Admin\Blog\BlogEditFormRequest;
use App\Http\Requests\Admin\Blog\UpdateDescriptionFormRequest;
use App\Http\Services\Blog\BlogService;
use App\Models\Blog;
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
    public function index()
    {
        $blogs = $this->blogService->getAllBlogs();

        return view('admin.blog.index', [
            'blogs' => $blogs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogAddFormRequest $request)
    {
        $blog = $this->blogService->save($request);

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
    public function edit(Blog $blog)
    {
        return view('admin.blog.edit', [
            'blog' => $blog
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogEditFormRequest $request, Blog $blog)
    {
        $result = $this->blogService->update($request, $blog);

        if (!$result) {
            return redirect()->back();
        }

        return redirect()->route('admin.blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $result = $this->blogService->deleteById($blog->id);

        return redirect()->back();
    }


    public function content(Blog $blog)
    {
        return view('admin.blog.content', [
            'blog' => $blog
        ]);
    }

    public function updateContent(UpdateDescriptionFormRequest $request, Blog $blog)
    {
        $result = $this->blogService->updateDescription($request, $blog);

        if (!$result) {
            return redirect()->back();
        }

        return redirect()->route('admin.blog.index');
    }
}