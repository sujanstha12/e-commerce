@extends('admin.layout.master')
@section('container')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Features</h2>
        <a href="{{ route('admin.feature.create') }}" class="btn btn-primary">Add New</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Title</th>
                    <th>Icon</th>
                    <th>Description</th>

                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($features as $feature)
                    <tr>

                        <td>{{ $feature->title }}</td>
                        <td>{{ $feature->icon }}</td>
                        <td>{{ $feature->description }}</td>

                        <td>
                            <a href="{{ route('admin.feature.edit', $feature) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.feature.destroy', $feature) }}" method="POST" class="d-inline">
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
