@extends('layout')

@section('content')
    <form action="{{ route('pages.store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">TITLE:</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="content">CONTENT:</label>
            <textarea class="form-control" rows="5" id="content" name="content"></textarea>
        </div>
        <button type="submit" class="btn btn-primary active">DODAJ</button>
    </form>

@endsection