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
        DB::table('users')->truncate();
        App\User::create([
        	'name' => 'trungnv',
        	'email' =>'nguyentrung17891@gmail.com',
        	'password' => bcrypt('123456789')
        ]);
    }
}
