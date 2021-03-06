@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <neworder-component></neworder-component>
    <div class="row d-flex justify-content-center">
        @foreach ($orders as $order)
            @if ($order->complete == false)
            <div class="col-md-3 p-2 m-1" id="order-card">
                <p class="text-center"><small>Order</small> <strong>{{ $order->id }}</strong></p>
                <form action="/complete/order/{{ $order->id }}" method="post">
                @csrf
                @method('PUT')
                <button class="btn btn-secondary">Complete</button>
                </form>
                <p>Attended by: {{ $order->user->name }}</p>
                @foreach ($order->orderitems as $orderitem)
                    <p>{{ $orderitem->product->name }} 
                        <span>{{ $orderitem->product->price }}€</span> 
                        <br/> 
                        <span>pieces: {{ $orderitem->product_qty }},</span> 
                        <span>total: {{ $orderitem->product->price * $orderitem->product_qty}}€</span>
                    </p> 
                @endforeach
                <total-component v-bind:order="{{ $order }}"></total-component>
                </div>
            @endif
        @endforeach
        
    </div>    

</div>
@endsection
