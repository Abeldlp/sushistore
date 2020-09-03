@extends('layouts.app')

@section('content')
    <h1 class="text-center">Employees</h1>
    <div class="container">
        @foreach ($users as $user)
            <div class="d-flex m-2 p-2 align-items-center rounded w-80">
                <div id="profile_div" style="
                    background: url('/storage/{{ $user->employee->profile_image }}'); border-radius:100%; background-size:cover; margin-right:10px;">
                </div>
                <span> {{ $user->name }} <strong>{{ $user->employee->position }}</strong> 
                    @if (Auth::user()->id == 1)
                       - <a href="/employees/edit/{{ $user->id }}">Edit</a>
                    @endif
                    @if ($user->id == Auth::user()->id && Auth::user()->id !== 1)
                       - <a href="/employees/edit/{{ $user->id }}">Edit</a>
                    @endif
                </span>
            </div>
        @endforeach
    </div>
@endsection