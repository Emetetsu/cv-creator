<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('resumes')->insert([
            'name' => 'Jerome B Mendoza',
            'email' => 'jeromemendoza12322@gmail.com',
            'phone' => '0920-108-2351',
            'summary' => 'A dedicated and results-driven IT professional with extensive experience in system administration, network management, and software development...',
            'education' => 'Bachelor of Science in Computer Science, Baliwag Polytechnic College, 2022; Associate Degree in Information Technology, Baliwag Polytechnic College, 2021; Graduate from Lydia D. Villangca Trade School as an Industrial Arts (IA)',
            'experience' => 'Non-Voice Data Annotator at Novalink BPO',
            'skills' => 'Data Analysis, Front-End Engineering (HTML, CSS, JavaScript), Back-End Development (PHP), Responsive Web Design',
        ]);
    }
}
