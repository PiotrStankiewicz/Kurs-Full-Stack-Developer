@extends('layout')

@section('content')

    <table class="table table-hover">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>EDYTUJ</th>
            <th>USUN</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name  }}</td>
                <td>{{ $user->email  }}</td>
                <td>{{ $user->password  }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('users.edit', $user->id) }}">Edit</a>
                </td>

                <td>
                        <form method="post" action="{{ route('users.destroy', $user->id) }}">
                        <input name="_method" type="hidden" value="DELETE">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>


                </td>
            </tr>
        @endforeach
    </table>

    {{ $users->links() }}


@endsection