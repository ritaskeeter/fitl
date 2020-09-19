<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('question_id')->unsigned();
            $table->text('comment');
            $table->timestamps();
        });

        //Added by me-To reference the foreign key
        Schema::table('comments', function (Blueprint $table){
            $table->foreign('question_id')->references('id')->on('questions');
        });
        //End of addition-This is what references the foreign key with the ID in the Questions DB table
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Added by me-To drop the foreign key if we want to drop the comments migration
        Schema::table('comments', function (Blueprint $table){
            $table->dropForeign('comments_question_id_foreign');
        });
        //End of addition-This is what references the foreign key with the ID in the Questions DB table

        Schema::drop('comments');
    }
}
