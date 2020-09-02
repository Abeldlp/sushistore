@extends('layouts.app')

@section('content')
    <h1 class="text-center">Employees</h1>
    <div class="container">
        @foreach ($users as $user)
            <div class="d-flex m-2 p-2 align-items-center rounded w-80">
                <div class="col-2 col-sm-2 col-md-1">
                    <img class="mw-100 rounded-circle" src="/storage/images/noimage.png" alt="">
                </div>
                <span> {{ $user->name }} <strong>{{ $user->employee->position }}</strong> <a href="#">Edit</a></span>
            </div>
        @endforeach
    </div>
@endsection