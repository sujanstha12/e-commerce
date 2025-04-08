@extends('frontend.master')
@section('container')


<div class="container">
    <h1>My Orders</h1>

    <div class="order-list">
        <div class="order">
            <div class="order-header">
                <h2>Order #12345</h2>
                <span class="status completed">Completed</span>
            </div>
            <div class="order-items">
                <ul>
                    <li>Item 1 - $25.00</li>
                    <li>Item 2 - $15.00</li>
                    <li>Item 3 - $30.00</li>
                </ul>
            </div>
            <div class="order-total">
                Total: $70.00
            </div>
        </div>

        <div class="order">
            <div class="order-header">
                <h2>Order #12346</h2>
                <span class="status pending">Pending</span>
            </div>
            <div class="order-items">
                <ul>
                    <li>Item 1 - $50.00</li>
                    <li>Item 2 - $20.00</li>
                </ul>
            </div>
            <div class="order-total">
                Total: $70.00
            </div>
        </div>

        <div class="order">
            <div class="order-header">
                <h2>Order #12347</h2>
                <span class="status completed">Completed</span>
            </div>
            <div class="order-items">
                <ul>
                    <li>Item 1 - $10.00</li>
                    <li>Item 2 - $12.00</li>
                    <li>Item 3 - $30.00</li>
                </ul>
            </div>
            <div class="order-total">
                Total: $52.00
            </div>
        </div>
    </div>
</div>
@endsection
