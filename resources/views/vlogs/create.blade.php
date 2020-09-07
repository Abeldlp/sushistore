@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/vlogs/create" method="post">
            @csrf
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text"
                class="form-control" name="title" >
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" name="description" rows="3"></textarea>
            </div>
            <button class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection