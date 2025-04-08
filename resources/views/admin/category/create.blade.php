@extends('admin.layout.master')
@section('container')
    <div class="container-fluid p-5 ">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form method="POST" action="{{ route('admin.category.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title*</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug*</label>
                <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">Category</label>
                <select class="form-select" name="category_id" aria-label="Default select example">
                    <option  value="">.....Choose Category....</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach

                </select>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description*</label>
                <textarea class="form-control" id="editor" name="description" rows="4">{{ old('description') }}</textarea>
            </div>



            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
        </form>
    @endsection
