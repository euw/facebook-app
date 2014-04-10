<?php

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
        Schema::create('articles', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->text('content');
            $table->text('excerpt');
            $table->string('image')->default('');
            $table->string('type')->default('page');
            $table->timestamp('publish_date');
            $table->tinyInteger('active')->default(0);
            $table->integer('user_id')->nullable()->default(1);
            $table->integer('tenant_id');
            $table->timestamps();
            $table->softDeletes();
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