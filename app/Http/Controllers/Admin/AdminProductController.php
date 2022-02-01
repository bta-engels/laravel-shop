<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Category;
use App\Models\Manufacturer;
use App\Models\Product;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;


class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = Product::orderBy('name')
            ->paginate(8)
        ;
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
        $categories = Category::all()->keyBy('id')->map->name;
        $manufacturers = Manufacturer::all()->keyBy('id')->map->name;
        return view('admin.products.create', compact('manufacturers', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProductStoreRequest $request
     * @return Response
     */
    public function store(ProductStoreRequest $request)
    {
        //dd($request->file('image')->hashName());
        $validated = $request->validated();
        if ($request->hasFile('image')) {
            $path = Storage::disk('public')->put('images',$request->image);
            $validated['image'] = basename($path);
        }
        Product::create($validated);
        return redirect()->route('admin.products.index');

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
     * @param ProductStoreRequest $request
     * @param Product $product
     * @return Response
     */
    /*   old version
        public function update(Request $request, Product $product)
        {
            $validated = $request->validate([
                'name'          => 'required|max:100|min:3',
                'description'   => 'required',
                'category_id'   => 'nullable|numeric',
                'manufacturer_id'   => 'required',
            ], [
                'name.required'  => 'Bitte einen Namen angeben.',
                'name.min'  => 'Der Name muss mindestens :min Zeichen enhalten.',
                'name.max'  => 'Der Name darf maximal :max Zeichen enhalten.',
            ]);
            $product->update($validated);

            return redirect()->route('admin.products.index');
        }
    */
    public function update(ProductUpdateRequest $request, Product $product)
    {
        $validated = $request->validated();
        if ($request->hasFile('image')) {
            $path = Storage::disk('public')->put('images',$request->image);
            $validated['image'] = basename($path);
        }
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
        $product->delete();
        return redirect()->route('admin.products.index');
    }
}
