<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        $users = [
            [
                'username' => 'admin',
                'full_name' => 'Kenneth Mantes',
                'role' => 'Administrator',
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'John Santos',
                'role' => 'Cashier',
            ],
            [
                'username' => 'manager01',
                'full_name' => 'Maria Cruz',
                'role' => 'Manager',
            ],
            [
                'username' => 'staff01',
                'full_name' => 'Ana Garcia',
                'role' => 'Staff',
            ],
            [
                'username' => 'cashier02',
                'full_name' => 'Pedro Sar',
                'role' => 'Cashier',
            ],
        ];

        return view('users.index', [
            'title' => 'User Accounts',
            'users' => $users,
        ]);
    }
}