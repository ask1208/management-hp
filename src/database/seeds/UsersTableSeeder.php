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
            'name' => 'kasai',
            'email' => 'test@test.com',
            'password' => bcrypt('test'),
        ]);
    }
}
