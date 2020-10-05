<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('questions', function (Blueprint $table) {
            //Added by me
            $table->integer('user_id')->unsigned()->nullable();
           
        });

        //Added by me -> Adding user_id to foreign key
        Schema::table('questions', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('questions', function (Blueprint $table) {
            //Added by me
            $table->dropForeign('questions_user_id_foreign');
            $table->dropColumn('user_id');
        });
    }
}
