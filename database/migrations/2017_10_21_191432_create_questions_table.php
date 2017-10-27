<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('category_id')->unsigned();            
            $table->integer('level_id')->unsigned();            
            $table->text('question');
            $table->string('option_1');
            $table->string('option_2');
            $table->string('option_3');
            $table->string('option_4');
            $table->string('answer');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
            
        });


    Schema::table('questions', function($table) {      
        $table->foreign('category_id')->references('id')->on('categories');
    });

    Schema::table('questions', function($table) {      
        $table->foreign('level_id')->references('id')->on('levels');
    });

}


      /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}