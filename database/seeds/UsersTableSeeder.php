<?php

use Illuminate\Database\Seeder;
use App\User;

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
            'name' => 'Jane',
            'email' => 'jane@doe.com',
            'password' => bcrypt('jane123')
        ]);

        User::create([
            'name' => 'Joe',
            'email' => 'joe@doe.com',
            'password' => bcrypt('joe123')
        ]);

        User::create([
            'name' => 'Mikel',
            'email' => 'mikel@doe.com',
            'password' => bcrypt('123')
        ]);
    }
}
