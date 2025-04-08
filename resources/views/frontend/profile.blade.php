@extends('frontend.master')
@section('container')

    <div class="header">
        <div class="profile-header">
            <img src="https://static1.bigstockphoto.com/8/9/3/large1500/398335286.jpg" alt="Profile Picture">
            <div>
                <h1>John Doe</h1>
                <p>Premium Member</p>
            </div>
        </div>
    </div>

    <div class="bio">
        <h2>About Me</h2>
        <p>
            Hello! I'm John, a passionate e-commerce enthusiast and avid shopper. I enjoy browsing through the latest gadgets and fashion trends. I believe in high-quality products at the best prices and always seek the perfect balance between luxury and practicality.
        </p>
    </div>

    <div class="address">
        <h2>Shipping Address</h2>
        <ul>
            <li>123 Main Street, Springfield, IL, 62701</li>
            <li>Phone: (123) 456-7890</li>
            <li>Email: johndoe@email.com</li>
        </ul>
    </div>

    <div class="order-history">
        <h2>Recent Orders</h2>
        <ul>
            <li>Order #12345 - Delivered: 02/25/2025 - Total: $99.99</li>
            <li>Order #12346 - Delivered: 02/20/2025 - Total: $49.99</li>
            <li>Order #12347 - Delivered: 02/10/2025 - Total: $299.99</li>
        </ul>
    </div>

    <div class="footer">
        <a href="edit-profile.html" class="btn">Edit Profile</a>
    </div>
</div>
@endsection
