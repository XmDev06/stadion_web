<?php

namespace Database\Seeders;

use App\Models\Qfy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QfySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('qfy')->insert([
            [
                'name' => 'Chinobod',
                'tuman_id' => 5
            ],
            [
                'name' => "O'rmonbek",
                'tuman_id' => 5
            ],
            [
                'name' => "Baliqchi",
                'tuman_id' => 5
            ],
            [
                'name' => "Xo'jaobod",
                'tuman_id' => 5
            ],
            [
                'name' => 'Xaqqulobod',
                'tuman_id' => 5
            ]
        ]);
    }
}
