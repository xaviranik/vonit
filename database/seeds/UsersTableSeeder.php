<?php

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
        App\User::create([
            'name' => 'Mr.Admin',
            'password' => bcrypt('vonitAdmin2000'),
            'email' => 'admin@vonit.com',
        ]);
    }
}
