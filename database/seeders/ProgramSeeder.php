<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('programs')->insert([
            [
                'name' => 'BSc in CSe - Bachelor of Science (Enginnering) in Computer Science & Engneering',
                'department_id' => 1
            ],
            [
                'name' => 'MSc in CSe - M.Sc. in Computer Science & Engneering',
                'department_id' => 1
            ],
            [
                'name' => 'BSS(Hons.) in Economics - Bachelor of Social Science (Honors) in Economic',
                'division_id' => 2
            ],
            [
                'name' => 'MSS(Hons.) in Economics - Bachelor of Social Science (Honors) in Economic',
                'division_id' => 2
            ],
            [
                'name' => 'BA (Hons.) in English - Bachelor Of Arts (Honors) in English',
                'division_id' => 3
            ],
            [
                'name' => 'MA in English - Master Of Arts in English ',
                'division_id' => 3
            ]
        ]);
    }
}
