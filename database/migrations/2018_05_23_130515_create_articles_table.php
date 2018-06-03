<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles',function(Blueprint $table){
            $table->increments('id');
            $table->string('title');
            $table->string('author');
            $table->tinyInteger('state')->default(0);
            $table->tinyInteger('top')->default(0);
            $table->string('label')->default(null);
            $table->tinyInteger('category_id')->default(0);
            $table->string('content');
            $table->rememberToken();
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
        Schema::drop('articles');
    }
}
