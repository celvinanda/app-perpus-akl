<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'Celvinanda Octiawan',
                'email' => 'celvinanda@gmail.com',
                'username' => 'Celvin22',
                'level' => '1',
                'jurusan' => 'admin',
                'angkatan' => 'staf',
                'password' => bcrypt(12345),
            ],
            [
                'name' => 'Asrul Hidayatul Khusna',
                'email' => 'asrul@gmail.com',
                'username' => 'Asrul',
                'level' => '2',
                'jurusan' => 'guru',
                'angkatan' => 'staf',
                'password' => bcrypt(12345),
            ], [
                'name' => 'Putri Merly D',
                'email' => 'putri@gmail.com',
                'username' => 'PutriM',
                'level' => '3',
                'jurusan' => 'akn',
                'angkatan' => '2022',
                'password' => bcrypt(12345),
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
