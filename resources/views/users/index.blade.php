@extends('layouts.app')

@section('content')
    <style>
        .page-container {
            max-width: 1100px;
            margin: 40px auto;
            padding: 0 24px;
        }

        .page-title {
            color: white;
            font-size: 30px;
            margin-bottom: 20px;
        }

        .success-message {
            background: #d1fae5;
            color: #065f46;
            padding: 12px 16px;
            border-radius: 6px;
            margin-bottom: 20px;
        }

        .add-button {
            display: inline-block;
            background: #6366f1;
            color: white;
            padding: 10px 16px;
            border-radius: 6px;
            text-decoration: none;
            margin-bottom: 20px;
        }

        .add-button:hover {
            background: #4f46e5;
        }

        .users-table {
            width: 100%;
            border-collapse: collapse;
            background: #1f2937;
            color: white;
            border-radius: 8px;
            overflow: hidden;
        }

        .users-table th {
            background: #374151;
            color: #ffffff;
            text-align: left;
            padding: 14px;
        }

        .users-table td {
            padding: 14px;
            border-top: 1px solid #4b5563;
            vertical-align: middle;
        }

        .users-table tr:hover {
            background: #273449;
        }

        .avatar-image {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid #818cf8;
        }

        .edit-link {
            color: #a5b4fc;
            text-decoration: none;
            font-weight: bold;
        }

        .edit-link:hover {
            color: white;
            text-decoration: underline;
        }

        .empty-message {
            color: white;
            background: #374151;
            padding: 18px;
            border-radius: 6px;
        }
    </style>

    <div class="page-container">
        <h1 class="page-title">User Accounts</h1>

        @if (session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        <a class="add-button" href="{{ route('users.create') }}">
            Add New User
        </a>

        @if ($users->isEmpty())
            <p class="empty-message">No users found.</p>
        @else
            <table class="users-table">
                <thead>
                    <tr>
                        <th>Avatar</th>
                        <th>Username</th>
                        <th>Full Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>
                                <img
                                    class="avatar-image"
                                    src="{{ $user->avatar
                                        ? asset('storage/' . $user->avatar)
                                        : asset('images/avatar-placeholder.svg') }}"
                                    alt="{{ $user->full_name }} avatar"
                                    onerror="this.onerror=null; this.src='{{ asset('images/avatar-placeholder.svg') }}';"
                                >
                            </td>

                            <td>{{ $user->username }}</td>
                            <td>{{ $user->full_name }}</td>

                            <td>
                                <a
                                    class="edit-link"
                                    href="{{ route('users.edit', $user) }}"
                                >
                                    Edit
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection