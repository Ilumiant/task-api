<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory as Faker;

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
            'name' => 'Darwin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123123'),
            'role_id' => 1
        ]);
    }
}
