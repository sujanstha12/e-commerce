@extends('frontend.master')
@section('container')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Product Details</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 50px;
            }

            .product-container {
                max-width: 600px;
                margin: auto;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 10px;
                box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.1);
                text-align: center;
            }

            .carousel {
                position: relative;
                max-width: 100%;
                margin-bottom: 15px;
            }

            .carousel img {
                width: 100%;
                border-radius: 5px;
                display: none;
            }

            .carousel img.active {
                display: block;
            }

            .carousel-buttons {
                display: flex;
                justify-content: space-between;
                margin-top: 10px;
            }

            .carousel-buttons button {
                padding: 10px;
                background-color: #007bff;
                color: white;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }

            .carousel-buttons button:hover {
                background-color: #0056b3;
            }

            .product-info {
                margin-bottom: 15px;
            }

            .price {
                font-size: 1.2em;
                color: #28a745;
                font-weight: bold;
            }

            .category {
                font-size: 1em;
                color: #555;
            }

            .add-to-cart,
            .buy-now {
                width: 100%;
                padding: 10px;
                color: white;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                margin-top: 10px;
            }

            .add-to-cart {
                background-color: #28a745;
            }

            .add-to-cart:hover {
                background-color: #218838;
            }

            .buy-now {
                background-color: #ff5722;
            }

            .buy-now:hover {
                background-color: #e64a19;
            }
        </style>
    </head>

    <body>
        <div class="product-container">
            <h2>Product Details</h2>
            <div class="carousel">
                @foreach ($product->files as $index => $file)
                    <img src="{{ $file->file_url }}" alt="Product Image {{ $index + 1 }}"
                        class="{{ $index === 0 ? 'active' : '' }}">
                @endforeach
                <div class="carousel-buttons">
                    <button onclick="prevImage()">&#10094; Prev</button>
                    <button onclick="nextImage()">Next &#10095;</button>
                </div>
            </div>
            <div class="product-info">
                <p><strong>Product Name:</strong> <span id="productName">{{ $product->name }}</span></p>
                <p><strong>Description:</strong> <span id="productDescription">{{ $product->detail }}</span></p>
                <p class="price">$<span id="productPrice">{{ $product->prize }}</span></p>
                <p class="category"><strong>Category:</strong> <span
                        id="productCategory">{{ $product->category->category->title }}</span></p>
                <p class="category"><strong>SubCategory Category:</strong> <span
                        id="productCategory">{{ $product->category->title }}</span></p>
            </div>
            <form action="{{ route('sale', $product) }}" method="POST">
                @csrf
                <div class="quantity-container">
                    <h5>Add Quantity</h5>
                    <a onclick="decreaseQuantity()">-</a>
                    <input type="number" id="purchased_quantity" name="purchased_quantity" value="1" min="1">
                    <a class="" onclick="increaseQuantity()">+</a>
                </div>
                <button class="add-to-cart">Add to Cart</button>
                <button type="submit" class="buy-now">Buy Now</button>
            </form>
        </div>

        <script>
            let currentImageIndex = 0;
            const images = document.querySelectorAll(".carousel img");

            function showImage(index) {
                images.forEach((img, i) => {
                    img.classList.toggle("active", i === index);
                });
            }

            function nextImage() {
                currentImageIndex = (currentImageIndex + 1) % images.length;
                showImage(currentImageIndex);
            }

            function prevImage() {
                currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
                showImage(currentImageIndex);
            }

            function increaseQuantity() {
                let quantityInput = document.getElementById("purchased_quantity");
                quantityInput.value = parseInt(quantityInput.value) + 1;
            }

            function decreaseQuantity() {
                let quantityInput = document.getElementById("purchased_quantity");
                if (parseInt(quantityInput.value) > 1) {
                    quantityInput.value = parseInt(quantityInput.value) - 1;
                }
            }
        </script>
    </body>

    </html>
@endsection
