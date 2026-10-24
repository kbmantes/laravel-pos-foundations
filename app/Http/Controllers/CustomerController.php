<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CustomerController extends Controller
{
    public function index(): View
    {
        $customers = [
            [
                'full_name' => 'Juan Carlos',
                'email' => 'juan@example.com',
                'phone' => '09171234567',
            ],
            [
                'full_name' => 'Maria Cruz',
                'email' => 'maria@example.com',
                'phone' => '09181234567',
            ],
            [
                'full_name' => 'Pedro Sar',
                'email' => 'pedro@example.com',
                'phone' => '09191234567',
            ],
            [
                'full_name' => 'Ana Garcia',
                'email' => 'ana@example.com',
                'phone' => '09201234567',
            ],
            [
                'full_name' => 'Carlos Mendoza',
                'email' => 'carlos@example.com',
                'phone' => '09211234567',
            ],
        ];

        return view('customers.index', [
            'title' => 'Customer Accounts',
            'customers' => $customers,
        ]);
    }
}