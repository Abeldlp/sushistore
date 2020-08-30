@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            @foreach ($orders as $order)
            <div class="col-md-3 border rounded p-2 m-1">
            <p>Order {{ $order->id }}</p>
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
