<?php

namespace Database\Seeders;

use Carbon\Factory;
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
        // factory(User::class, 15)->create();
        $param = [
            'email' => 'aaa@co.jp',
            'name' => 'テストユーザー',
            'password' => 'password',
        ];
        DB::table('users')->insert($param);
    }
}
