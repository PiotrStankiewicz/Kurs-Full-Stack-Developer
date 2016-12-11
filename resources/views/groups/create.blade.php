@extends('layout')

@section('content')
    <form action="{{ route('groups.store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">NAME:</label>
            <input type="text" class="form-control" id="title" name="name">
        </div>
        <button type="submit" class="btn btn-primary active">DODAJ</button>
    </form>

@endsection