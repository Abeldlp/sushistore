<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Product;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $orders = Order::all();
        return view('home', compact('orders'));
    }

    public function create(){
        $products = Product::all();
        return view('orders', compact('products'));
    }

    public function complete(){
        $orders = Order::all();
        return view('complete', compact('orders'));
    }

    public function orderout($id){
        $order = Order::findOrFail($id);
        
        $order->complete = true;
        $order->update();
        
        return redirect('/home');
    }
}
