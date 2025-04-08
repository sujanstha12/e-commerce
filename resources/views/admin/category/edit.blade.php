



@extends('admin.layout.master')
@section('container')
<div class="container-fluid p-5 ">
    <form method="POST" action="{{ route('admin.category.update', $category) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title',$category->title) }}" required>
        </div>

        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{ old('title',$category->slug) }}" required>
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select class="form-select" name="category_id" aria-label="Default select example">
                <option  value="">.....Choose Category....</option>
                @foreach ($categories as $categoryList)
                    <option value="{{ $categoryList->id }}" {{ old('category_id',$category->category_id) == $categoryList->id ? 'selected':'' }}>{{ $categoryList->title }}</option>
                @endforeach

            </select>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ old('description',$category->description) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
    </form>


@endsection

