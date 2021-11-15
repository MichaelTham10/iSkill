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
            "description" => "Laravel merupakan salah satu framework yang ada di bahasa pemograman PHP. Di kelas ini anda akan belajar bagaimana membuat website dengan laravel, serta bagaimana laravel itu bekerja.",
            "rate" => 5,
            "image" => '../../assets/seeders/courses/laravel.png'

        ]);

        DB::table('courses')->insert([
            "name" => "Belajar Java Dasar",
            "category_id" => 1,
            "lecturer_id" => 1,
            "price" => 50000,
            "description" => "Java merupakan suatu bahasa yang paling sering digunakan saat ini. Di kelas ini anda akan mempelajari bagaimana dasar-dasar dari java, mulai dari tipe data, print, dan juga membuat menu.",
            "rate" => 5,
            "image" => '../../assets/dummy/dummy2.png'

        ]);
    }
}
