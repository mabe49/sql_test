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
            for($j = 1;$j <= 90; $j ++){
                DB::table('shifts')->insert([
                    [
                    'teacher_id' => $i,
                    'section_id' => $j,
                    'is_attendance' => ($i+$j)%2,
                    ]
                ]);
            }
            
        }
    }
}
