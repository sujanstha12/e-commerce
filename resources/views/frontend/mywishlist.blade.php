@extends('frontend.master')
@section('container')
<div class="container">
    <h1>My Wishlist</h1>
    <div class="wishlist">
        <!-- Wishlist Item 1 -->
        <div class="wishlist-item">
            <img src="https://consumer.huawei.com/content/dam/huawei-cbg-site/common/mkt/plp-x/phones/winter-2024-new-product-launch/phones-new/images/reason/pop/huawei-phones-supercharge-pc.jpeg" alt="Item 1">
            <h3>Product Name 1</h3>
            <p class="price">$25.00</p>
            <button>Remove from Wishlist</button>
        </div>

        <!-- Wishlist Item 2 -->
        <div class="wishlist-item">
            <img src="https://i.guim.co.uk/img/media/2ce8db064eabb9e22a69cc45a9b6d4e10d595f06/392_612_4171_2503/master/4171.jpg?width=1200&height=900&quality=85&auto=format&fit=crop&s=45b5856ba8cd83e6656fbe5c166951a4" alt="Item 2">
            <h3>Product Name 2</h3>
            <p class="price">$35.00</p>
            <button>Remove from Wishlist</button>
        </div>

        <!-- Wishlist Item 3 -->
        <div class="wishlist-item">
            <img src="https://cdn.thewirecutter.com/wp-content/media/2024/04/budgetandroidphones-2048px-1013.jpg" alt="Item 3">
            <h3>Product Name 3</h3>
            <p class="price">$50.00</p>
            <button>Remove from Wishlist</button>
        </div>

        <!-- Wishlist Item 4 -->
        <div class="wishlist-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7ujwSx1TsISqgBdP79Zjg2VG97qZVXfpJeA&s" alt="Item 4">
            <h3>Product Name 4</h3>
            <p class="price">$12.00</p>
            <button>Remove from Wishlist</button>
        </div>
    </div>
</div>

@endsection
