@extends('layouts.app')

@section('content')
    <h2 class="text-center">Products</h2>
    <div class="d-flex flex-wrap justify-content-center">
        @foreach ($products as $product)
        <product-component v-bind:product="{{ $product }}"></product-component>
        @endforeach
        <cart-component></cart-component>
    </div>
    
@endsection