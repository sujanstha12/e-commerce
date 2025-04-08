@extends('admin.layout.master')
@section('container')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Category</h2>
        <a href="{{ route('admin.category.create') }}" class="btn btn-primary">Add New</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Category</th>
                    <th>SubCategory</th>

                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categories as $category)
                    <tr>

                        <td>{{ $category->category->title }}</td>
                        <td>{{ $category->title }}</td>

                        <td>
                            <a href="{{ route('admin.category.edit', $category) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.category.destroy', $category) }}" method="POST" class="d-inline">
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
