@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Shift create</h1>
        <form action="/shift/new" method="post">
            @csrf
            <div class="form-group">
                <label for="monday">Employee</label>
                <select class="form-control" name="user_id" id="">
                  @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                  @endforeach
                </select>
              </div>
            <div class="form-group">
              <label for="monday">Monday</label>
              <select class="form-control" name="monday" id="">
                <option>Early</option>
                <option>Late</option>
              </select>
            </div>
            <div class="form-group">
                <label for="tuesday">Tuesday</label>
                <select class="form-control" name="tuesday" id="">
                  <option>Early</option>
                  <option>Late</option>
                </select>
            </div>
            <div class="form-group">
                <label for="wednesday">Wednesday</label>
                <select class="form-control" name="wednesday" id="">
                  <option>Early</option>
                  <option>Late</option>
                </select>
            </div>
            <div class="form-group">
                <label for="thursday">Thursday</label>
                <select class="form-control" name="thursday" id="">
                  <option>Early</option>
                  <option>Late</option>
                </select>
            </div>
            <div class="form-group">
                <label for="friday">Friday</label>
                <select class="form-control" name="friday" id="">
                  <option>Early</option>
                  <option>Late</option>
                </select>
            </div>
            <button class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection