<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homeworks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lesson_id')->nullable();
            $table->integer('lesion_exercise_id');
            $table->integer('user_id');
            $table->string('content');
            $table->dateTime('time_commit_ex');
            $table->string('status'); // submit homework or not/ 0 yes, 1 no.
            $table->string('mark')->nullable();
            $table->string('comment')->nullable();
            $table->dateTime('time_marking')->nullable();
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
        Schema::dropIfExists('homeworks');
    }
}
