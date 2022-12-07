<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tumanlars extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Andijon
        DB::table('tumanlars')->insert([
            [
                'name' => 'Andijon',
                'viloyat_id' => 1
            ],
            [
                'name' => 'Asaka',
                'viloyat_id' => 1
            ],
            [
                'name' => "Bo'ston",
                'viloyat_id' => 1
            ],
            [
                'name' => 'Buloqboshi',
                'viloyat_id' => 1
            ],
            [
                'name' => 'Baliqchi',
                'viloyat_id' => 1
            ],
            [
                'name' => 'Izboskan',
                'viloyat_id' => 1
            ],
            [
                'name' => 'Jalaquduq',
                'viloyat_id' => 1
            ],
            [
                'name' => 'Marhamat',
                'viloyat_id' => 1
            ],
            [
                'name' => 'Oltinkoʻl',
                'viloyat_id' => 1
            ],
            [
                'name' => 'Paxtaobod',
                'viloyat_id' => 1
            ],
            [
                'name' => 'Shahrixon',
                'viloyat_id' => 1
            ],
            [
                'name' => 'Ulugʻnor',
                'viloyat_id' => 1
            ],
            [
                'name' => 'Xoʻjaobod',
                'viloyat_id' => 1
            ],
        ]);

        // Namangan
        DB::table('tumanlars')->insert([
            [
                'name' => 'Chortoq',
                'viloyat_id' => 2
            ],
            [
                'name' => 'Chust',
                'viloyat_id' => 2
            ],
            [
                'name' => "Kosonsoy",
                'viloyat_id' => 2
            ],
            [
                'name' => 'Mingbuloq',
                'viloyat_id' => 2
            ],
            [
                'name' => 'Namangan',
                'viloyat_id' => 2
            ],
            [
                'name' => 'Norin',
                'viloyat_id' => 2
            ],
            [
                'name' => 'Pop',
                'viloyat_id' => 2
            ],
            [
                'name' => 'Toʻraqoʻrgʻon',
                'viloyat_id' => 2
            ],
            [
                'name' => 'Uchqoʻrgʻon',
                'viloyat_id' => 2
            ],
            [
                'name' => 'Uychi',
                'viloyat_id' => 2
            ],
            [
                'name' => 'Yangiqoʻrgʻon',
                'viloyat_id' => 2
            ],
            [
                'name' => 'Davlatobod',
                'viloyat_id' => 2
            ],
        ]);
    }
}
