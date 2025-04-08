<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Feature;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
public function index()
{
    $about= About::first();
    $feature= Feature::first();
    $products = Product::with('category')->get();
   return view('welcome',compact('about', 'feature','products'));


}

    public function about()
    {
        return view("frontend.about");
    }

    public function category()
    {
        return view("frontend.category");
    }

    public function product()
    {
        return view("frontend.product");
    }

    public function productDetail(Product $product)
    {
        $product->load('files');
        $user = Auth::guard('customer')->user();
        return view("frontend.product",compact('product','user'));
    }
    public function cart()
    {
        return view('frontend.cart');
    }

    public function dropdown()
    {
        return view("frontend.dropdown");
    }

    public function checkout()
    {
        return view("frontend.checkout");
    }

    public function profile()
    {
        return view("frontend.profile");
    }

    public function myorder()
    {
        return view("frontend.myorder");
    }

    public function mywishlist()
    {
        return view("frontend.mywishlist");
    }

    public function mysetting()
    {
        return view("frontend.mysetting");
    }
}
