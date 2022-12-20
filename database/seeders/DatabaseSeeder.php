<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            Users::class,
            viloyatlars::class,
            tumanlars::class,
            QfySeeder::class
        ]);


        // \App\Models\User::factory(10)->create();


    }
}
