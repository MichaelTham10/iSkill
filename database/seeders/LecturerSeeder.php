<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LecturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lecturers')->insert([
            'name' => 'Michael Thamniago',
            'image' => '../../assets/seeders/lecturer/Photo.png'
        ]);
    }
}
