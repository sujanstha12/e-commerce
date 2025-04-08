<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::whereNotNull('category_id')->get();

        return view('admin.category.index',compact('categories'));
    }

    public function create()
    {
        $categories = Category::whereNull('category_id')->get();
        return view('admin.category.create', compact('categories'));
    }


    public function store(StoreCategoryRequest $request)
    {
        Category::create($request->validated());
        Alert::success('category created successfully');
        return back();
    }
    public function edit(Category $category)
    {
        $categories = Category::whereNull('category_id')->get();

        return view('admin.category.edit',compact('category','categories'));
    }
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->update($request->validated());
        Alert::success('category updated successfully');
        return redirect(route('admin.category.index'));
    }

    public function destroy(Category $category)

    {
        $category->delete();
        return back();
    }
}
