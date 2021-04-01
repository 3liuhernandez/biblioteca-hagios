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
            'id' => 1,
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'role' => '0',
            'password' => bcrypt('1234')
        ]);

        User::create([
            'name' => 'student',
            'email' => 'student@gmail.com',
            'role' => '1',
            'password' => bcrypt('1234')
        ]);

        User::create([
            'name' => 'test',
            'email' => 'test@gmail.com',
            'role' => '1',
            'password' => bcrypt('1234')
        ]);
    }
}
