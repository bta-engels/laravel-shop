<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ManufacturerStoreRequest;
use App\Http\Requests\ManufacturerUpdateRequest;
use App\Models\Manufacturer;
use Illuminate\Http\Response;

class AdminManufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = Manufacturer::all();
        return view('admin.manufacturers.index',compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  Manufacturer  $manufacturer
     * @return Response
     */
    public function show(Manufacturer $manufacturer)
    {
// eacher loading
//        $manufacturer->load('products');
        return view('admin.manufacturers.show',compact('manufacturer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.manufacturers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ManufacturerStoreRequest  $request
     * @return Response
     */
    public function store(ManufacturerStoreRequest $request)
    {
        Manufacturer::create($request->validated());
        return redirect()->route('admin.manufacturers.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Manufacturer  $manufacturer
     * @return Response
     */
    public function edit(Manufacturer $manufacturer)
    {
        return view('admin.manufacturers.edit', compact('manufacturer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ManufacturerUpdateRequest  $request
     * @param  Manufacturer  $manufacturer
     * @return Response
     */
    public function update(ManufacturerUpdateRequest $request, Manufacturer $manufacturer)
    {
        $manufacturer->update($request->validated());
        return redirect()->route('admin.manufacturers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Manufacturer  $manufacturer
     * @return Response
     */
    public function destroy(Manufacturer $manufacturer)
    {
        $manufacturer->delete();
        return redirect()->route('admin.manufacturers.index');
    }
}
