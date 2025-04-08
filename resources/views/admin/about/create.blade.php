



@extends('admin.layout.master')
@section('container')
<div class="container-fluid p-5 ">
    <form method="POST" action="{{ route('admin.about.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="title1" class="form-label">Title1*</label>
            <input type="text" class="form-control" id="title1" name="title1" value="{{ old('title1') }}" required>
        </div>

        <div class="mb-3">
            <label for="title2" class="form-label">Title2*</label>
            <input type="text" class="form-control" id="title2" name="title2" value="{{ old('title2') }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description*</label>
            <textarea class="form-control" id="editor" name="description" rows="4">{{ old('description') }}</textarea>
        </div>



        <div class="mb-3">
            <label for="image" class="form-label">Image*</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>



        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
    </form>


@endsection

