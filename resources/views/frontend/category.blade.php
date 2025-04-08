@extends('frontend.master')
@section('container')
<h1>Categories</h1>
<div class="dropdown-container">
    <!-- Dropdown 1 -->
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          Clothings
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Men's Wear</a></li>
          <li><a class="dropdown-item" href="#">Women's Wear</a></li>
          <li><a class="dropdown-item" href="#">Kid's Clothing</a></li>
          <li><a class="dropdown-item" href="#">Accessories</a></li>
        </ul>
      </div>

    <!-- Dropdown 2 -->
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          Electronics
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Smartphones</a></li>
          <li><a class="dropdown-item" href="#">Laptops</a></li>
          <li><a class="dropdown-item" href="#">Tablets</a></li>
          <li><a class="dropdown-item" href="#">Accessories</a></li>
        </ul>
      </div>

    <!-- Dropdown 3 -->
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          Home and Kitchn
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Furniture</a></li>
          <li><a class="dropdown-item" href="#">Kitchen Appliances</a></li>
          <li><a class="dropdown-item" href="#">Home Decor</a></li>
          <li><a class="dropdown-item" href="#">Bedding</a></li>
        </ul>
      </div>
    <!-- Dropdown 4 -->
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Beauty & Personal Care
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Skincare</a></li>
          <li><a class="dropdown-item" href="#">Makeup</a></li>
          <li><a class="dropdown-item" href="#">Hair Care</a></li>
          <li><a class="dropdown-item" href="#">Fragrances</a></li>
        </ul>
      </div>

    <!-- Dropdown 5 -->
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Sports & Outdoors
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Fitness Equipment</a></li>
          <li><a class="dropdown-item" href="#">Outdoor Gear</a></li>
          <li><a class="dropdown-item" href="#">Sports Apparel</a></li>
        </ul>
      </div>
</div>

<img src="https://www.hindustantimes.com/ht-img/img/2023/04/07/1600x900/jujutsu-kaisen_1680853025638_1680853037810_1680853037810.jpeg" class="img-fluid" alt="...">

@endsection
