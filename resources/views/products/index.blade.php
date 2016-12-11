@extends('layout')

@section('content')
    <a class="btn btn-info" href="{{ route('products.create') }}">DODAJ</a>
    <table class="table table-hover">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>PRICE</th>
            <th>CATEGORIES_ID</th>
            <th>GROUP_KEYS_ID</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name  }}</td>
                <td>{{ $product->price  }}</td>
                <td>{{ $product->categories_id  }}</td>
                <td>{{ $product->group_keys_id  }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('products.edit', $product->id) }}">Edit</a>
                </td>

                <td>
                        <form method="post" action="{{ route('products.destroy', $product->id) }}">
                        <input name="_method" type="hidden" value="DELETE">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>


                </td>
            </tr>
        @endforeach
    </table>

    {{ $products->links() }}


@endsection