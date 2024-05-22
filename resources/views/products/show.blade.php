@extends('layouts.app')

@section('title', "$product->name - Product information")

@section('content')
    <div class="flex gap-4 max-w-5xl mx-auto my-20">
        <img src="{{ $product->image }}" alt="" class="aspect-square min-w-56">
        <div class="space-y-4">
             <h2 class="font-bold text-xl capitalize">{{ $product->name }} ($ {{ $product->price }})</h2>
             <div class="">{{ $product->description }}</div>
             <div class="flex gap-6">
                <div class="rounded flex items-stretch border overflow-hidden">
                     <span class="bg-gray-200 px-2 py-1">Quantity</span>
                     <input type="number" class="focus:outline-none px-2 max-w-16" value="1">
                </div>
                <button class="bg-green-400 text-white px-2 py-1 rounded ">Add to cart</button>
             </div>
        </div>
    </div>
@endsection
