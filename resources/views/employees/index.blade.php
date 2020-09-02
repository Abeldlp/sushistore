@extends('layouts.app')

@section('content')
    <h1 class="text-center">Employees</h1>
    <div class="container">
        @foreach ($users as $user)
            <p>{{ $user->name }}</p>
        @endforeach
    </div>
@endsection