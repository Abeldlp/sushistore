@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">{{ $vlog->title }}</h1>
        <p class="text-center">{{ $vlog->description }}</p>
        <small class="m-auto">{{ $vlog->created_at }}</small>
        <div class="d-flex justify-content-center">
            @can('update', $vlog)
                <a href="/vlogs/edit/{{ $vlog->id }}">
                    <button class="btn btn-primary m-2">Edit</button>
                </a>
            @endcan
            @can('delete', $vlog)    
            <form action="/vlogs/delete/{{ $vlog->id }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger m-2">Delete</button>
            </form>
            @endcan
        </div>
    </div>
@endsection