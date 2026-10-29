<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PosSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('customers')->insert([
            [
                'full_name' => 'Juan Dela Cruz',
                'email' => 'juan@example.com',
                'phone' => '09171234567',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Maria Santos',
                'email' => 'maria@example.com',
                'phone' => '09181234567',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Pedro Reyes',
                'email' => 'pedro@example.com',
                'phone' => '09191234567',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Ana Garcia',
                'email' => 'ana@example.com',
                'phone' => '09201234567',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Carlos Mendoza',
                'email' => 'carlos@example.com',
                'phone' => '09211234567',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('users')->insert([
            [
                'username' => 'admin',
                'full_name' => 'System Administrator',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'John Santos',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'manager01',
                'full_name' => 'Maria Cruz',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'staff01',
                'full_name' => 'Ana Reyes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'cashier02',
                'full_name' => 'Pedro Garcia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}