<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Http\Requests\SystemSetting\StoreSystemSettingRequest;
use App\Http\Requests\SystemSetting\UpdateSystemSettingRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\SystemSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('admin.product.index',compact('products'));
    }

    public function create()
    {
        $categories = Category::whereNull('category_id')->get();

        return view('admin.product.create', compact('categories'));
    }

    public function store(StoreProductRequest $request)
    {
        DB::transaction(function () use ($request) {
            $product = Product::create($request->validated());
            foreach ($request->validated(['files']) as $file) {
                $product->files()->create([
                    'file_name' => $file->getClientOriginalName(),
                    'file' => $file->store('product/' . Str::slug($request->input('name'), '_'), 'public'),
                    'size' => $file->getSize(),
                    'extension' => $file->getClientOriginalExtension()
                ]);
            }
        });
        Alert::success('Product created successfully'); //yo wala
        return back();
    }
    public function edit(Product $product)
    {

        $categories = Category::whereNull('category_id')->get();
        $product->load('files');
        return view('admin.product.edit',compact('product','categories'));

    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $product->files()->create([
                    'file_name' => $file->getClientOriginalName(),
                    'file' => $file->store('product/' . Str::slug($request->input('name'), '_'), 'public'),
                    'size' => $file->getSize(),
                    'extension' => $file->getClientOriginalExtension()
                ]);
            }
        }
        $product->update($request->validated());
        Alert::success('Product updated successfully');
        return redirect(route('admin.product.index'));
    }


    public function destroy(Product $product)

    {
        $product->delete();
        return back();
    }
}
