



@extends('admin.layout.master')
@section('container')
<div class="container-fluid p-5 ">
    <form method="POST" action="{{ route('admin.feature.update') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title*</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
        </div>

        <div class="mb-3">
            <label for="icon" class="form-label">Icon*</label>
            <input type="text" class="form-control" id="icon" name="icon" value="{{ old('icon') }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description*</label>
            <textarea class="form-control" id="editor" name="description" rows="4">{{ old('description') }}</textarea>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
    </form>


@endsection

