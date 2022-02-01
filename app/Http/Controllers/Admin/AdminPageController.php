<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageStoreRequest;
use App\Http\Requests\PageUpdateRequest;
use App\Models\Page;


class AdminPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = Page::orderBy('title')
            ->paginate(5);
        return view('admin.pages.index',compact('data'));
    }
    /**
     * Display the specified resource.
     *
     * @param  Page  $page
     * @return Response
     */
    public function show(Page $page)
    {
        return view('admin.pages.show',compact('page'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.pages.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  PageStoreRequest $request
     * @return Response
     */
    public function store(PageStoreRequest $request)
    {
        Page::create($request->validated());
        return redirect()->route('admin.pages.index');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  Page  $page
     * @return Response
     */
    public function edit(Page $page)
    {
        return view('admin.pages.edit', compact('page'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  PageUpdateRequest  $request
     * @param  Page  $page
     * @return Response
     */
    public function update(PageUpdateRequest $request, Page $page)
    {
        $page->update($request->validated());
        return redirect()->route('admin.pages.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  Page  $page
     * @return Response
     */
    public function destroy(Page $page)
    {
        $page->delete();
        return redirect()->route('admin.pages.index');
    }
}
