@extends('layout')

@section('content')
    <form action="{{ route('users.update', $user->id) }}" method="post">
        <input name="_method" type="hidden" value="PUT">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">NAME:</label>
            <input type="text" value="{{$user->name}}" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="title">NAME:</label>
            <input type="text" value="{{$user->email}}" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="title">NAME:</label>
            <input type="text" value="{{$user->password}}" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary active">DODAJ</button>
    </form>

@endsection