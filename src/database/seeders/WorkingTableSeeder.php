<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
        'user_id' => 1,
        'working_start' => '2020-04-01 08:30:00',
        'working_end' => '2020-04-01 08:30:00',
        ];
        DB::table('working_times')->insert($param);

        $param = [
        'user_id' => 2,
        'working_start' => '2020-04-01 08:30:00',
        'working_end' => '2020-04-01 08:30:00',
        ];
        DB::table('working_times')->insert($param);

        $param = [
        'user_id' => 3,
        'working_start' => '2020-04-01 08:30:00',
        'working_end' => '2020-04-01 08:30:00',
        ];
        DB::table('working_times')->insert($param);
    }
}
