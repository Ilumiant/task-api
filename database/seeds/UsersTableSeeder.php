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
            'name' => 'Jose',
            'email' => 'jose@mail.com',
            'password' => bcrypt('123123'),
            'role_id' => 1
        ]);


        User::create([
            'name' => 'Leidys',
            'email' => 'leidys@mail.com',
            'password' => bcrypt('123123'),
            'role_id' => 1
        ]);

        User::create([
            'name' => 'Antonio',
            'email' => 'antonio@mail.com',
            'password' => bcrypt('123123'),
            'role_id' => 1
        ]);
    }
}
