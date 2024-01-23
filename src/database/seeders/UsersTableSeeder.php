<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $param = [
        'name' => 'user1',
        'email' => 'user1@gmail.com',
        'password' => 'user1'
        ];
        DB::table('users')->insert($param);
        
           $param = [
        'name' => 'user2',
        'email' => 'user2@gmail.com',
        'password' => 'user2'
        ];
        DB::table('users')->insert($param);
           $param = [
        'name' => 'user3',
        'email' => 'user3@gmail.com',
        'password' => 'user3'
        ];
        DB::table('users')->insert($param);
           $param = [
        'name' => 'user4',
        'email' => 'user4@gmail.com',
        'password' => 'user4'
        ];
        DB::table('users')->insert($param);
           $param = [
        'name' => 'user5',
        'email' => 'user5@gmail.com',
        'password' => 'user5'
        ];
        DB::table('users')->insert($param);
    }
}
