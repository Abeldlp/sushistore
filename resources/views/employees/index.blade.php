@extends('layouts.app')

@section('content')
    <h1 class="text-center">Employees</h1>
    <div class="container">
        @foreach ($users as $user)
            <div class="d-flex align-items-center justify-content-between rounded w-80 border-bottom">
                <div class="d-flex m-2 p-2 align-items-center">
                    <div id="profile_div" style="
                    background: url('/storage/{{ $user->employee->profile_image }}'); border-radius:100%; background-size:cover; margin-right:10px;">
                    </div>
                    <span> {{ $user->name }} <strong>{{ $user->employee->position }}</strong> 
                    
                    </span>
                </div>
                <div>
                    <ul class="nav nav-tabs">
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Properties</a>
                            <div class="dropdown-menu">
                                @if (Auth::user()->id == 1)
                                <a class="dropdown-item" href="/employees/edit/{{ $user->id }}">Edit</a>
                                @endif
                                @if ($user->id == Auth::user()->id && Auth::user()->id !== 1)
                                <a class="dropdown-item" href="/employees/edit/{{ $user->id }}">Edit</a>
                                @endif
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </li>
                      
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
@endsection