@extends('admin.layout.master')
@section('container')
    <div class="container-fluid p-5 ">

        <div class="d-flex justify-content-end mb-3">
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
        </div>


        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form method="POST" action="{{ route('admin.product.store') }}" enctype="multipart/form-data">

            @csrf

            <div class="mb-3">
                <label for="thumbnail" class="form-label">Thumbnail</label>
                <input type="file" class="form-control" id="thumbnail" name="thumbnail">
            </div>

            <div class="mb-3">
                <label class="form-label">Product Image</label>
                <input type="file" name="files[]" id="files" class="form-control" multiple>
            </div>


            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="detail" class="form-label">Detail</label>
                <textarea class="form-control" id="editor" name="detail" rows="4">{{ old('detail') }}</textarea>
            </div>


            <div class="mb-3">
                <label for="prize" class="form-label">Prize</label>
                <input type="text" class="form-control" id="prize" name="prize" value="{{ old('prize') }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="discount" class="form-label">Discount</label>
                <input type="text" class="form-control" id="discount" name="discount" value="{{ old('discount') }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="total_quantity" class="form-label">Total Quantity</label>
                <input type="numeric" class="form-control" id="total_quantity" name="total_quantity" value="{{ old('total_quantity') }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="category_id" class="form-label">Category</label>
                <select class="form-select" name="category_id" aria-label="Default select example">
                    <option value="">.....Choose Category....</option>
                    @foreach ($categories as $category)
                        <option disabled value="">{{ $category->title }}</option>
                        @foreach ($category->categories as $subCategory)
                            <option value="{{ $subCategory->id }}">{{ $subCategory->title }}</option>
                        @endforeach
                    @endforeach

                </select>
            </div>

            <div class="mb-3">
                <label for="category_id" class="form-label">Size</label>
                <select class="form-select" name="size" aria-label="Default select example">
                    <option value="">.....Select Size....</option>
                    @foreach (\App\Enum\SizeEnum::cases() as $size)

                            <option value="{{ $size->value}}">
                                {{ $size->label() }}</option>
                        @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">Color</label>
                <select class="form-select" name="color" aria-label="Default select example">
                    <option value="">.....Select Color....</option>
                    @foreach (\App\Enum\ColorEnum::cases() as $color)

                            <option value="{{ $color->value}}">
                                {{ $color->label() }}</option>
                        @endforeach
                </select>
            </div>


                <button type="submit" class="btn btn-primary mt-5">Submit</button>

        </form>
    @endsection
