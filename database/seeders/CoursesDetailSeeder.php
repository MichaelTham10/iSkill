<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course_details')->insert([
            'course_id' => 1,
            'title' => 'Intro Laravel',
            'video' => 'https://www.youtube.com/embed/eRZFGSCkAnw',
            'current' => true,
            'status' => false, 
        ]);
        DB::table('course_details')->insert([
            'course_id' => 1,
            'title' => 'Controller, Database, Model & Migration',
            'video' => 'https://www.youtube.com/embed/IrR1Vic4onQ',
            'current' => false,
            'status' => false, 
        ]);
        DB::table('course_details')->insert([
            'course_id' => 1,
            'title' => 'Insert Data dan Route',
            'video' => 'https://www.youtube.com/embed/6Teor-8GIoM',
            'current' => false,
            'status' => false, 
        ]);
        DB::table('course_details')->insert([
            'course_id' => 1,
            'title' => 'Update & Delete Data',
            'video' => 'https://www.youtube.com/embed/wOK0h9ausO4',
            'current' => false,
            'status' => false, 
        ]);
        DB::table('course_details')->insert([
            'course_id' => 1,
            'title' => 'Uplaod Aplikasi Ke Hosting',
            'video' => 'https://www.youtube.com/embed/KtUNSjXMK1U',
            'current' => false,
            'status' => false, 
        ]);
    }
}
