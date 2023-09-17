<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseModulClassQuizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_modul_class_quizes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("course_module_class_id")->unsigned()->nullable();
            $table->bigInteger("quiz_id")->unsigned()->nullable();
            $table->tinyInteger("creator")->unsigned()->nullable();
            $table->string("slug", 50)->nullable();
            $table->enum('status',['active','inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_modul_class_quizes');
    }
}