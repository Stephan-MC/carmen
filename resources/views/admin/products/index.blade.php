@extends('layouts.admin')

@section('title', 'Admin Page - Products - Online Store')

@section('content')
<div class="card">
    <div class="card-title">Manage Products</div>
    <div class="card-content">
        <table class="relative" cellpadding="20">
            <thead class="sticky top-0 bg-white">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody class="max-h-44">
                @foreach ($products as $product)
                    <tr class="odd:bg-green-100 odd:hover:bg-green-200 even:hover:bg-green-200">
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td><a href="{{ route('admin.product.edit', $product) }}" class="">Edit</a></td>
                        <td>
                            <form action="{{ route('admin.product.destroy', $product) }}" method="POST" onsubmit="return confirm('Are you sure to delte') }}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="border-none text-red-400 cursor-pointer" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
