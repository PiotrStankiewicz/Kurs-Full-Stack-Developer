@extends('layout')

@section('content')

    <form action="{{ route('cars.update', $car->id) }}" method="post">
        <input name="_method" type="hidden" value="PUT">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">TITLE:</label>
            <input name="title" value="{{$car->title}}" type="text" class="form-control" id="title">
        </div>
        <div class="form-group">
            <label for="content">CONTENT:</label>
            <textarea name="content" class="form-control" rows="5" id="content">{{$car->content}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary active">EDIT PAGE</button>
    </form>


@endsection