@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">{{ $user->name }}'s Profile</h1>
        <form action="/employees/update/{{ $user->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for=""><strong>Position</strong></label>
                <input type="text"
                class="form-control" name="position" value="{{ $user->employee->position }}">
            </div>
            <div class="form-group">
                <label for=""><strong>Profile Image</strong></label>
                <input type="file"
                class="form-control" name="profile_image" >
            </div>
            <button class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection