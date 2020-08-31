@extends('layouts.app')

@section('content')
    <h1 class="text-center">Add new product</h1>
    <div class="container">
        <form action="/products" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="">Product name</label>
              <input type="text"
                class="form-control" name="name" >
            </div>
            <div class="form-group">
                <label for="">Product price</label>
                <input type="number"
                  class="form-control" name="price" step=".01" >
            </div>
            <div class="form-group">
                <label for="">Product Image</label>
                <input type="file"
                  class="form-control" name="image" >
            </div>
            <button class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection