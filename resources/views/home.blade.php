@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <neworder-component></neworder-component>
    <div class="row d-flex justify-content-center">
            @foreach ($orders as $order)
            <div class="col-md-3 p-2 m-1" id="order-card">
            <p class="text-center"><small>Order</small> <strong>{{ $order->id }}</strong></p>
            <p>Attended by: {{ $order->user->name }}</p>
            @foreach ($order->orderitems as $orderitem)
                <p>{{ $orderitem->product->name }} 
                    <span>{{ $orderitem->product->price }}€</span> 
                    <br/> 
                    <span>pieces: {{ $orderitem->product_qty }},</span> 
                    <span>total: {{ $orderitem->product->price * $orderitem->product_qty}}€</span>
                </p> 
            @endforeach
            <p>Total:  </p>
        </div>
        @endforeach
        
    </div>    

</div>
@endsection
