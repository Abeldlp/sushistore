@extends('layouts.app')

@section('content')
    <h1 class="text-center">{{ $user->name }}</h1>
    <div class="container">
        <table class="table">
            <tr>
                <th class="p-2">
                    Monday
                </th>
                <th class="p-2">
                    Tuesday
                </th>
                <th class="p-2">
                    Wednesday
                </th>
                <th class="p-2">
                    Tuesday
                </th>
                <th class="p-2">
                    Friday
                </th>
            </tr>
            
            @foreach ($user->weeks as $week)
                <tr>
                    <td class="p-2">
                        {{ $week->monday }}
                    </td>
                    <td class="p-2">
                        {{ $week->tuesday }}
                    </td>
                    <td class="p-2">
                       {{ $week->wednesday}}
                    </td>
                    <td class="p-2">
                        {{ $week->thursday }}
                    </td>
                    <td class="p-2">
                       {{ $week->friday}}
                    </td>
                </tr>
    
            @endforeach
        </table>
    </div>
@endsection