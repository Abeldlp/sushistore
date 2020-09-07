@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/vlogs/update/{{ $vlog->id }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text"
                class="form-control" name="title" value="{{ $vlog->title }}">
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" name="description" rows="3">{{ $vlog->description }}</textarea>
            </div>
            <button class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection