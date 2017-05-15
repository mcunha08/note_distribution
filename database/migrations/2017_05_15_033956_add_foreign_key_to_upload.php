<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToUpload extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('course_user', function (Blueprint $table) {
            $table->dropForeign('course_user_user_id_foreign');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');//TODO onDelete('cascade')?
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');//TODO onDelete('cascade')?
        });
        Schema::table('uploads', function (Blueprint $table) {
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');//TODO onDelete('cascade')?
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
