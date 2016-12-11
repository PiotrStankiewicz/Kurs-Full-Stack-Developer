@extends('layout')

@section('content')
    <form action="{{ route('groups.update', $groups->id) }}" method="post">
        <input name="_method" type="hidden" value="PUT">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Tytul:</label>
            <input type="text" value="{{$groups->name}}" class="form-control" id="name" name="name">
        </div>

        <button type="submit" class="btn btn-primary active">DODAJ</button>
    </form>

@endsection