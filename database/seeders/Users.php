<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $current_time = Carbon::now();
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'phone' => '998998427979',
                'password' => bcrypt('password'),
                'created_at' => $current_time,
                'updated_at' => $current_time,
                'is_admin'=> '1',
            ],
            [
                'name' => 'Stadion',
                'phone' => '998335060511',
                'password' => bcrypt('password'),
                'created_at' => $current_time,
                'updated_at' => $current_time,
                'is_admin'=> '2',
            ]
        ]);
    }
}
