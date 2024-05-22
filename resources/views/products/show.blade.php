@extends('layouts.app')

@section('title', "$product->name - Product information")

@section('content')
    <div class="flex gap-2">
        <img src="{{ $product->image }}" alt="" class="aspect-square">
        <div class="space-y-2">
             <h2 class="font-bold text-xl">{{ $product->name }} (${{ $product->price }})</h2>
             <div class="">{{ $product->description }}</div>
             <div class="flex gap-6">
                <div class="rounded flex items-stretch border-gay-300">
                     <span class="bg-gray-200">Quantity</span>
                     <input type="number" class="focus:outline-none">
                </div>
                <button class="text-green-400">Add to cart</button>
             </div>
        </div>
    </div>
@endsection
