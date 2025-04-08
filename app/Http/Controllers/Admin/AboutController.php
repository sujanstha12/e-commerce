<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\About\StoreAboutRequest;
use App\Http\Requests\About\UpdateAboutRequest;
use App\Models\About;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::all();

        return view('admin.about.index',compact('abouts'));
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(StoreAboutRequest $request)
    {
        About::create($request->validated());
        Alert::success('about created successfully');
        return back();
    }
    public function edit(About $about)
    {

        return view('admin.about.edit',compact('about'));
    }
    public function update(UpdateAboutRequest $request, About $about)
    {
        $about->update($request->validated());
        Alert::success('About updated successfully');
        return redirect(route('admin.about.index'));
    }

    public function destroy(About $about)

    {
        $about->delete();
        return back();
    }
}
