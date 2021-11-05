<?php

use Brick\Math\BigInteger;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("category_id")->unsigned();
            $table->bigInteger("lecturer_id")->unsigned();
            $table->string("name");
            $table->bigInteger("price");
            $table->integer("rate");
            $table->string("image");
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('lecturer_id')->references('id')->on('lecturers');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
