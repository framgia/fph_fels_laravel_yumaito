<?php

use Illuminate\Database\Seeder;
Use App\User;
// Appフォルダー内の"UserTableSeeder.php"ファイル
// 現在のファイルの場所指定

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();
        // \DB　に行くと'users'テーブルに行く　－＞以前のデータ値を消す
        User::create([
        	// 'User'テーブル内に与えを入れる
        	'name' => 'lamin',
        	'email' => 'lamin@laravel.com',
        	'password' => bcrypt('lamin')
        ]);
    }
}
