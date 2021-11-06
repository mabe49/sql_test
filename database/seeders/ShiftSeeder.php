<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1;$i <= 15; $i ++){
            for($j = 1;$j <= 3; $j ++){
                for($k = 1;$k <= 30; $k ++){
                    DB::table('shifts')->insert([
                        [
                        'teacher_id' => $i,
                        'section_id' => $j,
                        'day_id' => $k,
                        'is_attendance' => ($i+$j+$k)%2,
                        ]
                    ]);
                } 
            }
        }

    }
}
