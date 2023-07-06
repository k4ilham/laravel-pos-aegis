<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'           => 'admin',
            'username'       => 'admin',
            'password'       => 'password',
            'role'           => 'admin',
            'remember_token' => str_random(10),
        ]);

        User::create([
            'name'           => 'kasir',
            'username'       => 'kasir',
            'password'       => 'password',
            'role'           => 'kasir',
            'remember_token' => str_random(10),
        ]);
    }
}
