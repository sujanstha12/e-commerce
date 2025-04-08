@extends('admin.layout.master')
@section('container')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>About Us</h2>
        <a href="{{ route('admin.about.create') }}" class="btn btn-primary">Add New</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Image</th>
                    <th>Title 1</th>
                    <th>Title 2</th>

                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($abouts as $about)
                    <tr>
                        <td>
                            <img src="{{ $about->image }}" width="100" height="100" class="img-thumbnail" alt="">
                        </td>
                        <td>{{ $about->title1 }}</td>
                        <td>{{ $about->title2 }}</td>

                        <td>
                            <a href="{{ route('admin.about.edit', $about) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.about.destroy', $about) }}" method="POST" class="d-inline">
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
