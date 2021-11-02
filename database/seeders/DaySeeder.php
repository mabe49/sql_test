<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1;$i <= 30; $i ++){
            DB::table('days')->insert([
            [
                'date' => '2021-11-'.$i,
                'is_open' => true,
            ]
        ]);
        }
        
    }
}
