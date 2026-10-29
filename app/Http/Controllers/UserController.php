<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        $users = User::orderBy('full_name')->get();

        return view('users.index', [
            'title' => 'User Accounts',
            'users' => $users,
        ]);
    }
}