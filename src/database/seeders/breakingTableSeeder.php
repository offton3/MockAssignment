<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class breakingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
        'working_time_id' => 1,
        'breaking_start' => '2020-04-01 08:30:00',
        'breaking_end' => '2020-04-01 09:30:00',
        ];
        DB::table('breaking_times')->insert($param);

        $param = [
        'working_time_id' => 1,
        'breaking_start' => '2020-04-02 09:30:00',
        'breaking_end' => '2020-04-02 10:30:00',
        ];
        DB::table('breaking_times')->insert($param);

        $param = [
        'working_time_id' => 2,
        'breaking_start' => '2020-04-03 08:30:00',
        'breaking_end' => '2020-04-03 09:30:00',
        ];
        DB::table('breaking_times')->insert($param);

        $param = [
        'working_time_id' => 2,
        'breaking_start' => '2020-04-04 09:30:00',
        'breaking_end' => '2020-04-04 10:30:00',
        ];
        DB::table('breaking_times')->insert($param);
    }
}
