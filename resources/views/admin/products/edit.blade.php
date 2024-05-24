@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-title">Create Product</div>
        <div class="card-content !p-4">
            <form action="{{ route('admin.product.update', $product) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="grid gap-8 [&_input]:border focus:[&_input]:outline-none [&_textarea]:border">
                    <div class="flex max-sm:flex-col gap-8">
                        <div class="flex">
                            <label for="name">Name</label>
                            <input type="text" id="name" value="{{ old('name', $product->name) }}" name="name">
                        </div>
                        <div class="flex">
                            <label for="price">Price</label>
                            <input type="number" id="price" value="{{ old('name', $product->price) }}" name="price">
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <label for="image">Image</label>
                        <input type="file" accept="image/*" id="image" name="image">
                    </div>
                    <div class="flex flex-col">
                        <label for="description">Description</label>
                        <textarea id="description" name="description">{{ old('description', $product->description) }}</textarea>
                    </div>

                    <input type="submit" value="Update Product" class="px-2 py-1 bg-blue-400 text-white">
                </div>
            </form>
        </div>
    </div>
@endsection
