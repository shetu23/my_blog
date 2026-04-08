<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\table;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@example.com',
                'password' => 12345678,
                'usertype' => 'admin'
            ],
            [
                'name' => 'brad',
                'email' => 'brad@example.com',
                'password' => 12345678,
                'usertype' => 'user'
            ],
            [
                'name' => 'yamin',
                'email' => 'yamin@example.com',
                'password' => 12345678,
                'usertype' => 'user'
            ]
        ];
        // DB::table(table: 'users')->insert(values: $data);
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
