<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionRequiredsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_requireds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subject_id');
            $table->string('name_test');
            $table->integer('number_question');
            $table->time('time_required');
            $table->integer('number_of_question_to_pass');
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
        Schema::dropIfExists('question_requireds');
    }
}
