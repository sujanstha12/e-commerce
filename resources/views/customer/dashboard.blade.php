<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fa;
        }
        .navbar {
            background: #007bff;
            color: white;
        }
        .navbar h2 {
            color: white;
            font-weight: bold;
        }
        .sidebar {
            width: 250px;
            min-height: 100vh;
            background: #343a40;
            color: white;
            padding-top: 20px;
        }
        .sidebar .profile img {
            border: 3px solid white;
        }
        .sidebar .profile h3 {
            font-size: 18px;
            margin-top: 10px;
        }
        .sidebar ul {
            padding-left: 0;
        }
        .sidebar ul li {
            list-style: none;
            padding: 10px;
            cursor: pointer;
            transition: background 0.3s;
            font-size: 16px;
        }
        .sidebar ul li:hover {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 5px;
        }
        .sidebar ul li i {
            margin-right: 10px;
        }
        .content {
            flex-grow: 1;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .list-group-item {
            border-radius: 8px;
            margin-bottom: 8px;
        }
        .btn-primary {
            background: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg p-3">
    <div class="container-fluid">
        <h2 class="navbar-brand mb-0">Customer Dashboard</h2>
    </div>
</nav>

<div class="d-flex">
    <!-- Sidebar -->
    <aside class="sidebar d-flex flex-column align-items-center p-3">
        <div class="profile text-center">
            <img src="{{ Auth::guard('customer')->user()->image }}" alt="Profile Picture" class="img-fluid rounded-circle mb-2" style="width: 100px; height: 100px;">
            <h3>{{ Auth::guard('customer')->user()->name }}</h3>
        </div>
        <nav class="w-100 mt-4">
            <ul class="w-100">
                <li class="mb-3"><i class="bi bi-heart"></i> Wishlist</li>
                <li class="mb-3"><i class="bi bi-cart"></i> Cart</li>
                <li class="mb-3"><i class="bi bi-box"></i> Orders</li>
                <li class="mb-3"><i class="bi bi-gear"></i> Settings</li>
                <li class="mb-3 text-danger"><i class="bi bi-box-arrow-right"></i> Logout</li>
            </ul>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="content w-100">
        <section class="profile-summary mb-5 text-center">
            <h3>{{ Auth::guard('customer')->user()->name }}</h3>
            <p>{{ Auth::guard('customer')->user()->email }}</p>
            <p>{{ Auth::guard('customer')->user()->number }}</p>
            <button class="btn btn-primary">Edit Profile</button>
        </section>

        <section class="order-history mb-5">
            <h3>Order History</h3>
            <ul class="list-group">
                <li class="list-group-item">Order #1234 - <span class="text-success">Delivered</span></li>
                <li class="list-group-item">Order #1235 - <span class="text-warning">Shipped</span></li>
                <li class="list-group-item">Order #1236 - <span class="text-info">Processing</span></li>
            </ul>
        </section>

        <section class="history mb-5">
            <h3>Purchase History</h3>
            <ul class="list-group">
                <li class="list-group-item">Item 1: Purchased on 2025-01-01</li>
                <li class="list-group-item">Item 2: Purchased on 2025-02-15</li>
                <li class="list-group-item">Item 3: Purchased on 2025-03-01</li>
            </ul>
        </section>

        <section class="notifications mb-5">
            <h3>Notifications</h3>
            <p>No new notifications.</p>
        </section>

        <section class="support text-center">
            <h3>Support & Help</h3>
            <button class="btn btn-primary">Contact Support</button>
        </section>
    </main>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
