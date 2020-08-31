<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function create (){
        return view('products.create');
    }

    public function store(Request $request){

        $data = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'image' => 'required|image'
        ]);

        $imagePath = $request->image->store('images', 'public');

        Product::create([
            'name' => $data['name'],
            'price' => $data['price'],
            'image' => $imagePath
        ]);

        return redirect('/home');
    }
}
