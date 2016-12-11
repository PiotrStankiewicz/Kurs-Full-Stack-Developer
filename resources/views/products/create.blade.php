@extends('layout')
@section('content')
    <form action="{{ route('products.store') }}" method="post" xmlns="http://www.w3.org/1999/html">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">NAME:</label>
            <input name="name" type="text" class="form-control" id="title">
        </div>
        <div class="form-group">
            <label for="title">PRICE:</label>
            <input name="price" type="text" class="form-control" id="price">
        </div>
        <div class="form-group">
            <label for="title">CATEGORY_ID:</label>
            <select class="form-control" name="categories_id">
                @foreach($categories as $category)

                    <option value="{{ $category->id  }}">{{ $category->name }} </option>

                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="title">GROUP_KEYS_ID:</label>
            <select class="form-control" name="group_keys_id">
            @foreach($groups as $group)

                <option value="{{ $group->id  }}">{{ $group->name }} </option>

            @endforeach
        </select>
        </div>
        <div class="form-group">
            <label for="content">CONTENT:</label>
            <textarea name="content" class="form-control" rows="5" id="content"></textarea>
        </div>
        <button type="submit" class="btn btn-primary active">ADD PAGE</button>
    </form>
@endsection