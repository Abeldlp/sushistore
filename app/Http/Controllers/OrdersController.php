<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderItem;
use App\Product;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    //Creates a new order
    public function createOrder (){
        $order = new Order;
        $order->user_id = Auth::user()->id;
        $order->save();
    }

    //Gets last order to display current order products
    public function lastorder(){
        $lastOrder = Order::orderBy('created_at', 'desc')->first();
        $products = DB::select('SELECT * , oi.id AS orderID
        FROM products p
        JOIN order_items oi ON p.id = oi.product_id
        JOIN orders o ON o.id = oi.order_id
        WHERE o.id = '.$lastOrder->id );
        
        return $products;
    }

    //Adds new order item to the last order
    public function addItem (Request $request){
        $lastOrder = Order::orderBy('created_at', 'desc')->first();

        $data = $request->validate([
            'product_id' => 'required',
            'product_qty' => 'required'
        ]);

        
        OrderItem::create([
            'order_id' => $lastOrder->id,
            'product_id'=> $data['product_id'],
            'product_qty' => $data['product_qty']
        ]);

        return redirect('/orders');
    }

    public function delete ($id){
        OrderItem::destroy($id);
    }
}
