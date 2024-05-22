@extends('layouts.app')

@section('title', 'List of products')

@section('content')
    <div class="grid xs: sm:grid-cols-3 md:grid-cols-4 gap-3">
        @foreach($products as $product)
            <div class="flex flex-col items-center">
                <img src="" class="aspect-square" />
            </div>
        @endforeach
    </div>
@endsection
