@extends('layouts.app')

@section('content')
    <h1 class="text-center">News Feed</h1>
    <div class="container">
        @foreach ($vlogs as $vlog)
            <a href="/vlogs/{{ $vlog->id }}">
                <div class="border rounded p-2 m-2">
                    <h3>{{ $vlog->title }}</h3>
                    <small>{{ $vlog->created_at }}</small>
                </div>
            </a>
        @endforeach
    </div>
@endsection