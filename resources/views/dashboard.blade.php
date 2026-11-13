<x-app-layout>
    <x-slot name="header">
        <h2 style="font-size: 24px; font-weight: bold;">
            POS Dashboard
        </h2>
    </x-slot>

    <div style="padding: 40px;">
        <h1 style="font-size: 28px; margin-bottom: 15px;">
            Welcome to the POS System
        </h1>

        <p style="margin-bottom: 25px;">
            You are logged in. Choose a page:
        </p>

        <a
            href="{{ route('customers.index') }}"
            style="background: #4f46e5; color: white; padding: 12px 20px; margin-right: 10px; text-decoration: none; border-radius: 6px;"
        >
            Customer Accounts
        </a>

        <a
            href="{{ route('users.index') }}"
            style="background: #059669; color: white; padding: 12px 20px; text-decoration: none; border-radius: 6px;"
        >
            User Accounts
        </a>
    </div>
</x-app-layout>
