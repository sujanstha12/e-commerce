@extends('admin.layout.master')
@section('container')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>System Settings</h2>
        <a href="{{ route('admin.systemSetting.create') }}" class="btn btn-primary">Add New</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Logo</th>
                    <th>Title</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($systemSettings as $systemSetting)
                    <tr>
                        <td>
                            <img src="{{ $systemSetting->logo }}" width="100" height="100" class="img-thumbnail" alt="Logo">
                        </td>
                        <td>{{ $systemSetting->title }}</td>
                        <td>{{ $systemSetting->phone_number }}</td>
                        <td>{{ $systemSetting->email }}</td>
                        <td>
                            <a href="{{ route('admin.systemSetting.edit', $systemSetting) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.systemSetting.destroy', $systemSetting) }}" method="POST" class="d-inline">
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
