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
        DB::table('users')->insert([
            'name' => 'User1',
            'email' => 'marcos@email.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'user2',
            'email' => 'sistema@email.com',
            'password' => bcrypt('password'),
        ]);
    }
}