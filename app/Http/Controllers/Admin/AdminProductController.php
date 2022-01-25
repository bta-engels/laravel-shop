<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Manufacturer;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = Product::all();
        return view('admin.products.index',compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return Response
     */
    public function show(Product $product)
    {
        return view('admin.products.show',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'          => 'required|unique:products|max:100|min:3',
            'description'   => 'required',
            'category_id'   => 'nullable|numeric',
            'manufacturer_id'   => 'required',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all()->keyBy('id')->map->name;
        $manufacturers = Manufacturer::all()->keyBy('id')->map->name;
        return view('admin.products.edit', compact('product','manufacturers', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Product $product
     * @return Response
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name'          => 'required|max:100|min:3',
            'description'   => 'required',
            'category_id'   => 'nullable|numeric',
            'manufacturer_id'   => 'required',
        ] , [
            'name.required'          => 'Bitte einen Namen angeben: ',
            'name.min'          => 'Der Name muss mindestens :min Zeichen enhalten. ',
            'name.max'          => 'Der Name muss mindestens :max Zeichen enhalten. ',
        ]);
        $product->update($validated);

        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
