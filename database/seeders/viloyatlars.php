<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class viloyatlars extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('viloyatlars')->insert([
            [
                'name' => 'Andijon',
            ],
            [
                'name' => 'Namangan',
            ],
            [
                'name' => "Farg'ona",
            ],
            [
                'name' => 'Toshkent',
            ],
            [
                'name' => 'Sirdaryo',
            ],
            [
                'name' => 'Samarqand',
            ],
            [
                'name' => 'Buxoro',
            ],
            [
                'name' => 'Xorazm',
            ],
            [
                'name' => 'Jizzax',
            ],
            [
                'name' => 'Qashqadaryo',
            ],
            [
                'name' => 'Navoiy',
            ],
            [
                'name' => 'Surxandaryo',
            ],
            [
                'name' => 'Nukus',
            ],
        ]);
    }
}
