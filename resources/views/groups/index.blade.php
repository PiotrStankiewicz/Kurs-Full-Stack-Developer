@extends('layout')

@section('content')

    <a class="btn btn-info" href="{{ route('groups.create') }}">DODAJ</a>

    <table class="table table-hover">


        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EDYTUJ</th>
            <th>USUN</th>
        </tr>
        @foreach($groups as $group)
            <tr>
                <td>{{ $group->id }}</td>
                <td>{{ $group->name  }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('groups.edit', $group->id) }}">Edytuj</a>
                </td>
                <td>
                    <form method="post" action="{{ route('groups.destroy', $group->id) }}">
                    <input name="_method" type="hidden" value="DELETE">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $groups->links() }}


@endsection