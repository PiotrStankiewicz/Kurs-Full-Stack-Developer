@extends('layout')

@section('content')
    <form action="{{ route('pages.update', $page->id) }}" method="post">
        <input name="_method" type="hidden" value="PUT">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">TITLE:</label>
            <input type="text" value="{{$page->title}}" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="content">CONTENT:</label>
            <textarea class="form-control"  rows="5" id="content" name="content">{{$page->content}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary active">DODAJ</button>
    </form>

@endsection