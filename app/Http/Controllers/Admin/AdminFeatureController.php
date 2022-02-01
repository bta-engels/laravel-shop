<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FeatureStoreRequest;
use App\Http\Requests\FeatureUpdateRequest;
use App\Models\Feature;

class AdminFeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = Feature::orderBy('title')
            ->paginate(5);
        return view('admin.features.index',compact('data'));
    }
    /**
     * Display the specified resource.
     *
     * @param  Feature  $feature
     * @return Response
     */
    public function show(Feature $feature)
    {
        return view('admin.features.show',compact('feature'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.features.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  FeatureStoreRequest  $request
     * @return Response
     */
    public function store(FeatureStoreRequest $request)
    {
        Feature::create($request->validated());
        return redirect()->route('admin.features.index');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  Feature  $feature
     * @return Response
     */
    public function edit(Feature $feature)
    {
        return view('admin.features.edit', compact('feature'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  FeatureUpdateRequest  $request
     * @param  Feature  $feature
     * @return Response
     */
    public function update(FeatureUpdateRequest $request, Feature $feature)
    {
        $feature->update($request->validated());
        return redirect()->route('admin.features.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  Feature  $feature
     * @return Response
     */
    public function destroy(Feature $feature)
    {
        $feature->delete();
        return redirect()->route('admin.features.index');
    }
}
