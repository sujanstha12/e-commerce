@extends('admin.layout.master')
@section('container')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Products</h2>
        <a href="{{ route('admin.product.create') }}" class="btn btn-primary">Add New</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>

                    <th>Thumbnail</th>
                    <th>Name</th>
                    <th>Detail</th>
                    <th>Prize</th>
                    <th>Size</th>
                    <th>Color</th>
                    <th>Discount</th>
                    <th>Quantity</th>
                    <th>Category_id</th>

                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $product)
                    <tr>

                        <td> <img src="{{ $product->thumbnail }}" alt="{{ $product->name }}" height="100" width="100" > </td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->detail }}</td>
                        <td>{{ $product->prize }}</td>
                        <td>{{ $product->size }}</td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->discount }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->category->title }}</td>


                        <td>
                            <a href="{{ route('admin.product.edit', $product) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.product.destroy', $product) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No data found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
