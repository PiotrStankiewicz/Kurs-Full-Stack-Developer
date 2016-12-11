@extends('layout')

@section('content')
    <form action="{{ route('categories.update', $categories->id) }}" method="post">
        <input name="_method" type="hidden" value="PUT">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Tytul:</label>
            <input type="text" value="{{$categories->title}}" class="form-control" id="name" name="name">
        </div>

        <button type="submit" class="btn btn-primary active">DODAJ</button>
    </form>

@endsection