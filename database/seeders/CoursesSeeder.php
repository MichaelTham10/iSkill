<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            "name" => "Mahir membuat website menggunakan Laravel Framework",
            "category_id" => 1,
            "lecturer_id" => 1,
            "price" => 150000,
            "rate" => 5,
            "image" => '../../assets/seeders/courses/laravel.png'

        ]);

        DB::table('courses')->insert([
            "name" => "Belajar Java Dasar",
            "category_id" => 1,
            "lecturer_id" => 1,
            "price" => 50000,
            "rate" => 5,
            "image" => '../../assets/dummy/dummy2.png'

        ]);
    }
}
