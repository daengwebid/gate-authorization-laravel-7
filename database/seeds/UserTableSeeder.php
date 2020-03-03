<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Anugrah Sandi',
            'email' => 'nuge@gmail.com',
            'password' => bcrypt('secret'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'Riski Amelia',
            'email' => 'riski@gmail.com',
            'password' => bcrypt('secret'),
            'role' => 'manager'
        ]);

        User::create([
            'name' => 'DaengWeb',
            'email' => 'daengweb@gmail.com',
            'password' => bcrypt('secret'),
            'role' => 'user'
        ]);
    }
}
