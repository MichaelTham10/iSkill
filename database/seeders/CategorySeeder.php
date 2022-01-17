<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Ilmu Komputer',
            'image' => '../../assets/seeders/category/TI.png'
        ]);

        DB::table('categories')->insert([
            'name' => 'Ekonomi',
            'image' => '../../assets/seeders/category/ekonomi.jpg'
        ]);
    }
}
