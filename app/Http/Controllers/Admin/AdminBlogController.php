<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\interfaces\IAdminController;
use App\Http\Requests\BlogStoreRequest;
use App\Http\Requests\BlogUpdateRequest;
use App\Models\Blog;


class AdminBlogController extends Controller implements IAdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = Blog::orderBy('title')
            ->paginate(5);
        return view('admin.blogs.index',compact('data'));
    }
    /**
     * Display the specified resource.
     *
     * @param  Blog  $blog
     * @return Response
     */
    public function show(Blog $blog)
    {
        return view('admin.blogs.show',compact('blog'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.blogs.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  BlogStoreRequest  $request
     * @return Response
     */
    public function store(BlogStoreRequest $request)
    {
        Blog::create($request->validated());
        return redirect()->route('admin.blogs.index');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  Blog  $blog
     * @return Response
     */
    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  BlogUpdateRequest  $request
     * @param  Blog  $blog
     * @return Response
     */
    public function update(BlogUpdateRequest $request, Blog $blog)
    {
        $blog->update($request->validated());
        return redirect()->route('admin.blogs.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  Blog  $blog
     * @return Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blogs.index');
    }
}
