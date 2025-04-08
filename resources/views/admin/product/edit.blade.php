@extends('admin.layout.master')
@section('container')
<div class="container-fluid p-5 ">

    <!-- Back button top right -->
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
    <form method="POST" action="{{ route('admin.product.update', $product) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <img src="{{ $product->thumbnail }}" height="100" width="100" alt="{{ $product->name }}">
            <label class="form-label">Thumbnail</label>

            <input type="file" name="thumbnail" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Product Image</label>
            <input type="file" name="files[]" id="files" class="form-control" multiple>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $product->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="detail" class="form-label">Detail</label>
            <input type="text" class="form-control" id="detail" name="detail" value="{{ old('detail', $product->detail) }}" required>
        </div>

        <div class="mb-3">
            <label for="prize" class="form-label">Prize</label>
            <input type="text" class="form-control" id="prize" name="prize" value="{{ old('prize', $product->prize) }}" required>
        </div>

        <div class="mb-3">
            <label for="discount" class="form-label">Discount</label>
            <input type="text" class="form-control" id="discount" name="discount" value="{{ old('discount', $product->discount) }}" required>
        </div>


        <div class="mb-3">
            <label for="total_quantity" class="form-label">Total Quantity</label>
            <input type="numeric" class="form-control" id="total_quantity" name="total_quantity" value="{{ old('total_quantity', $product->total_quantity) }}"
                required>
        </div>


        <div class="mb-3">
            <label class="form-label">Category</label>
            <select name="category_id" class="form-control">
                <option value="">Select Category</option>
                @foreach($categories as $category) <!-- Corrected variable name -->
                <option value="" disabled>
                    {{ $category->title }}
                </option>
                @foreach ($category->categories as $subCategory)
                <option value="{{ $subCategory->id }}" {{ old('category_id',$product->category_id)== $subCategory->id ? 'selected':'' }}>
                    {{ $subCategory->title }}
                </option>
                @endforeach
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Size</label>
            <select class="form-select" name="size" aria-label="Default select example">
                <option value="">.....Select Size....</option>
                @foreach (\App\Enum\SizeEnum::cases() as $size)

                        <option value="{{ $size->value}}"{{ old('size',$product->size)== $size ? 'selected':'' }}>
                            {{ $size->label() }}</option>
                    @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Color</label>
            <select class="form-select" name="color" aria-label="Default select example">
                <option value="">.....Select Color....</option>
                @foreach (\App\Enum\ColorEnum::cases() as $color)

                        <option value="{{ $color->value}}"{{ old('color',$product->color)== $color ? 'selected':'' }}>
                            {{ $color->label() }}</option>
                    @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-4">Submit</button>
    </form>

    <div class="row d-flex mt-5">
        @foreach ($product->files as $file)
        <div>
            <img src="{{ $file->file_url }}" height="100" width="100" alt="">
            <form action="{{ route('file.destroy', $file) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-primary btn-sm">Delete</button>
            </form>

        </div>

        @endforeach
    </div>
</div>
@endsection
