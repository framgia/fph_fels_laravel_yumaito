<?php

use Illuminate\Database\Seeder;
use App\User;


class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        User::create([
        	'name' => 'lamin',
        	'email' => 'lamin@laravel.com',
        	'password'      => ''
        	'remember_token'=> ''




        ]);
    }
}
