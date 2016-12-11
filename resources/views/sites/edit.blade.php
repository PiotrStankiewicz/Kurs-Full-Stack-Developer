@extends('layout')

@section('content')

    <form action="{{ route('sites.update', $site->id) }}" method="post">
        <input name="_method" type="hidden" value="PUT">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">TITLE:</label>
            <input name="title" value="{{$site->title}}" type="text" class="form-control" id="title">
        </div>
        <div class="form-group">
            <select class="form-control" name="category_id">
                @foreach($categories as $category)
                    @if($category->id == $category->category_id)
                        <option selected="selected" value" {{ $category->id }}">   {{ $category->name }}</option>
                    @else
                        <option value="{{ $category->id  }}">{{ $category->name }} </option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="content">CONTENT:</label>
            <textarea name="content" class="form-control" rows="5" id="content">{{$site->content}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary active">EDIT PAGE</button>
    </form>


@endsection