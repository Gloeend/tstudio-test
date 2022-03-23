<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentGroupeCourseWithTeacherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentGroupeCourseWithTeacteTable', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->enum('status', ['На согласовании', 'Согласовано', 'Отклонено']);
            $table->enum('duration', ['3 года', '4 года']);
            $table->index('id_student');
            $table->unsignedBigInteger('id_student');
            $table->unsignedBigInteger('id_course');
            $table->unsignedBigInteger('id_teacher');
            $table->unsignedBigInteger('id_studentGroupe');
            $table->foreign('id_student')->references('id')->on('student')->onDelete('cascade');
            $table->foreign('id_course')->references('id')->on('course')->onDelete('cascade');
            $table->foreign('id_teacher')->references('id')->on('teacher')->onDelete('cascade');
            $table->foreign('id_studentGroupe')->references('id')->on('studentGroupe')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('studentGroupeCourseWithTeacteTable');
    }
}
