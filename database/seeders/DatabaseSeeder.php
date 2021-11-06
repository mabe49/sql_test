<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
            DaySeeder::class,
            SectionSeeder::class,
            ShiftSeeder::class,
        ]);
        
        \App\Models\Student::factory(50)->create();
        \App\Models\Teacher::factory(15)->create();
        \App\Models\Subject::factory(5)->create();
        \App\Models\Course::factory(1000)->create();
        \App\Models\Booth::factory(500)->create();
        \App\Models\Lesson::factory(1000)->create(); //申し込みコマ＜登録コマになってしまう可能性あり
    }
}
