<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTranscript extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transcript', function (Blueprint $table) {
                $table->unsignedBigInteger('subject_id');
				$table->unsignedBigInteger('student_id');
				$table->primary(array('subject_id', 'student_id'));
				$table->foreign('subject_id')->references('maMH')->on('subject');
				$table->foreign('student_id')->references('rollNo')->on('student');
                $table->integer('diem',10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transcript');
    }
}
