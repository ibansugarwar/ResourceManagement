<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Attendances;

class attendanceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'date' => '2020-09-02',
            'email' => 'test@co.jp',
            'inTime' => '10:00:00',
        ];
        DB::table('attendances')->insert($param);
    }
}
