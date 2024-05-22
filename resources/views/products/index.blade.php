@extends('layouts.app')

@section('title', 'List of products')

@section('content')
    <div class="grid xs: sm:grid-cols-3 md:grid-cols-4 gap-6">
        @foreach($products as $product)
            <a href="/product/{{ $product->id }}">
                <div class="flex flex-col items-center border p-2">
                    <img src="" class="aspect-square w-full" />
                    <span class="bg-green-400 text-white p-2 rounded capitalize">{{ $product->name }}</span>
                </div>
            </a>
        @endforeach
    </div>
@endsection
