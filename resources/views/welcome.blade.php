@extends('frontend.master')
@section('container')

<div class="body">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="newco rounded-pill text-center">New Collection 2025</h3>
                <h1 class="discover">Discover Stylish <span class="fashion">Fashion</span> For Every Season</h1>
                <h5 class="lorem1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus
                    nec ullamcorper mattis, pulvinar dapibus leo. Vestibulum ante ipsum primis in faucibus.</h5>
                <div class="row">
                    <div class="col md 3">
                        <a + class=    "btn btn-primary btn1" href="#" role="button">Shop Now <i
                            class="bi bi-arrow-right"></i></a>
                        <a class="btn btn-primary btn1" href="#">View Collection</a>
                    </div>

                    <div class="row mt-5">
                        <!-- Free Shipping Column -->
                        <div class="col-md-4 text-center">
                            <i class="bi bi-truck" style="font-size: 2rem;"></i>
                            <p>Free Shipping</p>
                        </div>

                        <!-- Secure Payment Column -->
                        <div class="col-md-4 text-center">
                            <i class="bi bi-shield-check" style="font-size: 2rem;"></i>
                            <p>Secure Payment</p>
                        </div>

                        <!-- Easy Returns Column -->
                        <div class="col-md-4 text-center">
                            <i class="bi bi-arrow-repeat" style="font-size: 2rem;"></i>
                            <p>Easy Returns</p>
                        </div>



                    </div>


                </div>

            </div>
            <div class="col-md-6">
                <img src="assets/images/img1.webp" class="shop" class="src">
            </div>
        </div>
    </div>
</div>




<div class="container-fluid shipping">
    <div class="row">

        <div class="col-md-3 text-center mb-4">
            <i class="bi bi-truck" style="font-size: 5rem;"></i>
            <h2 class="product-title">Free Shipping</h2>
            <p>Nulla sit morbi vestibulum eros duis amet, consectetur vitae lacus. Ut quis tempor felis
                sed nunc viverra.</p>
        </div>


        <div class="col-md-3 text-center mb-4">
            <i class="bi bi-shield-check" style="font-size: 5rem;"></i>
            <h2 class="product-title">Money Back Guarantee</h2>
            <p>Nullam gravida felis ac nunc tincidunt, sed malesuada justo pulvinar. Vestibulum nec diam
                vitae eros.</p>
        </div>


        <div class="col-md-3 text-center mb-4">
            <i class="bi bi-percent" style="font-size: 5rem;"></i>
            <h2 class="product-title">Discount Offer</h2>
            <p>Nulla ipsum nisi vel adipiscing amet, dignissim consectetur ornare. Vestibulum quis
                posuere elit auctor.</p>
        </div>
        <div class="col-md-3 text-center mb-4">
            <i class="bi bi-headset" style="font-size: 5rem;"></i>
            <h2 class="product-title">24/7 Supports</h2>
            <p>Ipsum dolor amet sit consectetur adipiscing, nullam vitae euismod tempor nunc felis vestibulum
                ornare..</p>
        </div>
    </div>
</div>

<div class="button-container mt-5">
    <a class="btn btn-primary mt-5 btn1 text-center" href="#" role="button">
      View all products <i class="bi bi-arrow-right"></i>
    </a>
  </div>



<div class="carousel mt-5">
    <div class="carousel-container">
      <div class="card">
        <img src="https://bootstrapmade.com/content/demo/eStore/assets/img/product/product-1-variant.webp">
        <p>vestibulum ante</p>
      </div>
      <div class="card">
        <img src="https://bootstrapmade.com/content/demo/eStore/assets/img/product/product-4-variant.webp" alt="Image 2">
        <p>consecteture adipiscing</p>
      </div>
      <div class="card">
        <img src="https://bootstrapmade.com/content/demo/eStore/assets/img/product/product-7-variant.webp" alt="Image 3">
        <p>sed do eiusmod</p>
      </div>
      <div class="card">
        <img src="https://bootstrapmade.com/content/demo/eStore/assets/img/product/product-12-variant.webp" alt="Image 4">
        <p>Ut Labore et dolore</p>
      </div>
      <div class="card">
        <img src="https://bootstrapmade.com/content/demo/eStore/assets/img/product/product-3-variant.webp" alt="Image 5">
        <p>sed do eiusmod tempore</p>
      </div>
      <div class="card">
        <img src="https://bootstrapmade.com/content/demo/eStore/assets/img/product/product-11-variant.webp" alt="Image 6">
        <p>lorem ipsum dolore sit</p>
      </div>
      <div class="card">
        <img src="https://bootstrapmade.com/content/demo/eStore/assets/img/product/product-9-variant.webp" alt="Image 7">
        <p>Consecteture adipiscing elit</p>
      </div>
      <div class="card">
        <img src="https://bootstrapmade.com/content/demo/eStore/assets/img/product/product-5-variant.webp" alt="Image 8">
        <p>Magna aliqua ut enim ad</p>
      </div>
      <div class="card">
        <img src="https://bootstrapmade.com/content/demo/eStore/assets/img/product/product-8-variant.webp" alt="Image 9">
        <p>Ex ea commodo consequat</p>
      </div>
      <div class="card">
        <img src="https://bootstrapmade.com/content/demo/eStore/assets/img/product/product-6-variant.webp" alt="Image 10">
        <p>Veniam quis nostrud</p>
      </div>
    </div>
  </div>

    <!--best seller-->
  <div class="class container-fluid mt-5 text-center">
    <h2>Best Sellers</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  <div class="product-container">
    <!-- Product 1 -->
    <div class="product-card">
      <img src="https://bootstrapmade.com/content/demo/eStore/assets/img/product/product-1-variant.webp" alt="Product 1" class="product-image">
      <h4>vestibulum ante</h4>
      <p>$20.00</p>
      <button class="add-to-cart" data-product="Product 1" data-price="20.00">
        Add to Cart
      </button>
    </div>

    <!-- Product 2 -->
    <div class="product-card">
      <img src="https://bootstrapmade.com/content/demo/eStore/assets/img/product/product-4-variant.webp" alt="Product 2" class="product-image">
      <h4>consecteture adipiscing</h4>
      <p>$30.00</p>
      <button class="add-to-cart" data-product="Product 2" data-price="30.00">
        Add to Cart
      </button>
    </div>

    <!-- Product 3 -->
    <div class="product-card">
      <img src="https://bootstrapmade.com/content/demo/eStore/assets/img/product/product-7-variant.webp" alt="Product 3" class="product-image">
      <h4>sed do eiusmod</h4>
      <p>$25.00</p>
      <button class="add-to-cart" data-product="Product 3" data-price="25.00">
        Add to Cart
      </button>
    </div>

    <!--product 4-->
    <div class="product-card">
        <img src="https://bootstrapmade.com/content/demo/eStore/assets/img/product/product-12-variant.webp" alt="Product 3" class="product-image">
        <h4>Ut Labore et dolore</h4>
        <p>$30.00</p>
        <button class="add-to-cart" data-product="Product 4" data-price="25.00">
          Add to Cart
        </button>
      </div>

    <!-- Cart Section -->
    <div class="cart-container">
      <h3>Your Cart</h3>
      <ul id="cart-items"></ul>
      <p id="total-price">Total: $0.00</p>
    </div>
  </div>
</div>

<div class="container-fluid mt-5 cn">
    <h2 class="text-center">Join Our Newsletter</h2>
    <p class="text-center">Subscribe to get special offers, free giveaways, and once-in-a-lifetime deals.</p>
    <form class="d-flex mx-auto search" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
  </div>

<div class="container-fluid mt-5 estore">
    <div class="row">
        <div class="col-md-3">
            <h3>eStore</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in nibh vehicula, facilisis magna ut,
                consectetur lorem.</p>
            <p><i class="bi bi-geo-alt"></i> 123 Fashion Street, New York, NY 10001</p>
            <p><i class="bi bi-telephone"></i> +1 (555) 123-4567</p>
            <p><i class="bi bi-envelope"></i> hello@example.com</p>

        </div>
        <div class="col-md-2">
            <h4>Shop</h4>
            <p>New Arrivals</p>
            <p>Best Sellers</p>
            <p>Women Clothing</p>
            <p>Men Clothing</p>
            <p>Accessolories</p>
            <p>Sale</p>
        </div>
        <div class="col-md-2">
            <h4>Supports</h4>
            <p>Help Center</p>
            <p>Order Status</p>
            <p>Shipping Info</p>
            <p>Returns & Exchanges</p>
            <p>Siza Guide</p>
            <p>Contact us</p>
        </div>
        <div class="col-md-2">
            <h4>Company</h4>
            <p>About us</p>
            <p>Careers</p>
            <p>Press</p>
            <p>Affliates</p>
            <p>Responsibility</p>
            <p>Investors</p>
        </div>
        <div class="col-md-3">
            <h4>Download Our App</h4>
            <p>Shop on the go with our mobile app</p>
            <div class="">
                <a + class="btn btn-primary btn1" href="https://www.apple.com/app-store/" role="button"><i
                        class="bi bi-apple"></i>App Store</a>
                <a class="btn btn-primary btn1" href="https://play.google.com/store/games?device=windows&pli=1"><i
                        class="bi bi-google-play"></i>Playstore</a>
                <p class="mt-3">Follow Us:</p>
                <div class="social-icons">

                    <a class="btn btn-primary" href="#"><i class="face bi bi-facebook"></i></a>
                    <a class="btn btn-primary" href="#"><i class="face bi bi-instagram"></i></a>
                    <a class="btn btn-primary" href="#"><i class="face bi bi-twitter-x"></i></a>
                    <a class="btn btn-primary" href="#"><i class="face bi bi-tiktok"></i></a>
                    <a class="btn btn-primary" href="#"><i class="face bi bi-pinterest"></i></a>
                    <a class="btn btn-primary" href="#"><i class="face bi bi-youtube"></i></a>
                </div>
            </div>
        </div>
@endsection
