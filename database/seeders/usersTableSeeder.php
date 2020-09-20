<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'email' => 'test2@co.jp',
            'name' => 'テストユーザー',
            'password' => 'password',
        ];
        DB::table('users')->insert($param);
    }
}
