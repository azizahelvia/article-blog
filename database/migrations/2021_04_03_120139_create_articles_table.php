<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id', 11);
            $table->string('title', 100);
            $table->text('desc');
            $table->text('thumbnail');
        });

        // Schema::table('posts', function (Blueprint $table) {
        //     $table->unsignedBigInteger('category_id');
        
        //     $table->foreign('category_id')->references('id')->on('categories');
        // });

        // Schema:table('posts', function (Blueprint $table) {
        //     $table->unsignedBigInteger('user_id');

        //     $table->foreign('user_id')->references('id')->on('users');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
