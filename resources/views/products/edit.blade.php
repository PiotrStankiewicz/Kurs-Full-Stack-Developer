@extends('layout')

@section('content')

    <form action="{{ route('products.update', $product->id) }}" method="post">
        <input name="_method" type="hidden" value="PUT">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">NAME:</label>
            <input name="name" value="{{$product->name}}" type="text" class="form-control" id="title">
        </div>
        <div class="form-group">
            <label for="title">PRICE:</label>
            <input name="price" value="{{$product->price}}" type="text" class="form-control" id="title">
        </div>
        <div class="form-group">
            <select class="form-control" name="categories_id">
                @foreach($categories as $category)
                    @if($category->id == $category->category_id)
                        <option selected="selected" value="{{ $category->id }}">   {{ $category->name }}</option>
                    @else
                        <option value="{{ $category->id  }}">{{ $category->name }} </option>
                    @endif
                @endforeach
            </select>
            <select class="form-control" name="group_keys_id">
                @foreach($groups as $group_key_id)
                    @if($group_key_id->id == $group_key_id->group_keys_id)
                        <option selected="selected" value=" {{ $group_key_id->id }}">   {{ $group_key_id->name }}</option>
                    @else
                        <option value="{{ $group_key_id->id  }}">{{ $group_key_id->name }} </option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="content">CONTENT:</label>
            <textarea name="content" class="form-control" rows="5" id="content">{{$group_key_id->content}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary active">EDIT PAGE</button>
    </form>


@endsection