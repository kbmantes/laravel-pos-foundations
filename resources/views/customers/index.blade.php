@extends('layouts.app')

@section('content')
    <h1>Customer Accounts</h1>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <p>
        <a href="{{ route('customers.create') }}">Add New Customer</a>
    </p>

    @if ($customers->isEmpty())
        <p>No customers found.</p>
    @else
        <table border="1" cellpadding="8">
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>

            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->full_name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone ?? 'N/A' }}</td>
                    <td>
                        <a href="{{ route('customers.edit', $customer) }}">
                            Edit
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif
@endsection