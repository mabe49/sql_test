<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 30; $i ++) { 
            DB::table('sections')->insert([
                [
                    'day_id' => $i,
                    'start_section' => '17:00',
                    'end_section' => '18:20',
                ],
                [
                    'day_id' => $i,
                    'start_section' => '18:30',
                    'end_section' => '19:50',
                ],
                [
                    'day_id' => $i,
                    'start_section' => '20:00',
                    'end_section' => '21:20',
                ],
            ]);
        }
    }
}
