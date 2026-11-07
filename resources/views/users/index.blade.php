@extends('layouts.app')

@section('content')
    <h1>User Accounts</h1>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <p>
        <a href="{{ route('users.create') }}">Add New User</a>
    </p>

    @if ($users->isEmpty())
        <p>No users found.</p>
    @else
        <table border="1" cellpadding="8">
            <tr>
                <th>Avatar</th>
                <th>Username</th>
                <th>Full Name</th>
                <th>Actions</th>
            </tr>

            @foreach ($users as $user)
                <tr>
                    <td>
                        <img
                            src="{{ $user->avatar
                                ? asset('storage/' . $user->avatar)
                                : asset('images/avatar-placeholder.svg') }}"
                            alt="{{ $user->full_name }} avatar"
                            width="80"
                            height="80"
                        >
                    </td>

                    <td>{{ $user->username }}</td>
                    <td>{{ $user->full_name }}</td>

                    <td>
                        <a href="{{ route('users.edit', $user) }}">
                            Edit
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif
@endsection