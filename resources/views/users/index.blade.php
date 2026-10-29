@extends('layouts.app')

@section('content')
    <h1>User Accounts</h1>

    <p>
        These user records are currently provided by a
        temporary static PHP array.
    </p>

    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Full Name</th>
                <th>Role</th>
            </tr>
        </thead>

        <tbody>
           @foreach ($users as $user)
    <tr>
        <td>{{ $user->username }}</td>
        <td>{{ $user->full_name }}</td>
        <td>Staff</td>
    </tr>
@endforeach
        </tbody>
    </table>
@endsection