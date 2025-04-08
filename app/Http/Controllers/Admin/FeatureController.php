<?php

namespace App\Http\Controllers\Admin;

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\About\StoreFeatureRequest;
use App\Http\Requests\About\UpdateFeatureRequest;
use App\Http\Requests\Feature\StoreFeatureRequest as FeatureStoreFeatureRequest;
use App\Http\Requests\Feature\UpdateFeatureRequest as FeatureUpdateFeatureRequest;
use App\Models\Feature;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FeatureController extends Controller
{
    public function index()
    {
        $features = Feature::all();

        return view('admin.feature.index',compact('features'));
    }

    public function create()
    {
        return view('admin.feature.create');
    }

    public function store(FeatureStoreFeatureRequest $request)
    {
        Feature::create($request->validated());
        Alert::success('Feature created successfully');
        return back();
    }
    public function edit(Feature $feature)
    {

        return view('admin.feature.edit',compact('feature'));
    }
    public function update(FeatureUpdateFeatureRequest $request, Feature $feature)
    {
        $feature->update($request->validated());
        Alert::success('feature updated successfully');
        return redirect(route('admin.feature.index'));
    }

    public function destroy(Feature $feature)

    {
        $feature->delete();
        return back();
    }
}
