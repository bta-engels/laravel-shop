<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = Category::all();
        return view('admin.categories.index',compact('data'));
    }
    /**
     * Display the specified resource.
     *
     * @param  Category  $category
     * @return Response
     */
    public function show(Category $category)
    {
        //return view('admin.categories.show',compact('category'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //return view('admin.categories.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  CategoryStoreRequest  $request
     * @return Response
     */
    public function store(CategoryStoreRequest $request)
    {
        //Category::create($request->validated());
        //return redirect()->route('admin.categories.index');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  Category  $category
     * @return Response
     */
    public function edit(Category $category)
    {
       // return view('admin.categories.edit', compact('category'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  CategoryUpdateRequest  $request
     * @param  Category  $category
     * @return Response
     */
    public function update(CategoryUpdateRequest $request, Category $category)
    {
        //$category->update($request->validated());
        //return redirect()->route('admin.categories.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  Category  $category
     * @return Response
     */
    public function destroy(Category $category)
    {
       // $category->delete();
       // return redirect()->route('admin.categories.index');
    }
}
