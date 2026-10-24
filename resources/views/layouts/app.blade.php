<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Laravel POS' }}</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f7fb;
            color: #243247;
        }

        nav {
            display: flex;
            gap: 20px;
            align-items: center;
            padding: 18px 8%;
            background: #1e3a5f;
        }

        nav a {
            color: white;
            text-decoration: none;
        }

        nav .brand {
            margin-right: auto;
            font-size: 20px;
            font-weight: bold;
        }

        main {
            width: 86%;
            max-width: 1100px;
            min-height: 75vh;
            margin: 35px auto;
            padding: 30px;
            background: white;
            border-radius: 10px;
        }

        h1 {
            color: #1e3a5f;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            color: white;
            background: #1e3a5f;
        }

        tr:nth-child(even) {
            background: #f5f7fa;
        }

        footer {
            padding: 20px;
            color: white;
            text-align: center;
            background: #1e3a5f;
        }
    </style>
</head>

<body>
    <nav>
        <a class="brand" href="{{ route('home') }}">Laravel POS</a>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('customers.index') }}">Customers</a>
        <a href="{{ route('users.index') }}">Users</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>Laravel POS Foundations</p>
    </footer>
</body>
</html>