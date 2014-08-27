<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->integer('sender_id')->unsigned()->nullable();
            $table->foreign('sender_id')
                ->references('id')->on('users')
                ->onDelete('cascade');

            $table->integer('recipient_id')->unsigned()->nullable();
            $table->foreign('recipient_id')
                ->references('id')->on('users')
                ->onDelete('cascade');

            $table->boolean('accepted')->default(0);

            $table->integer('tenant_id')->unsigned()->nullable();
            $table->foreign('tenant_id')
                ->references('id')->on('tenants')
                ->onDelete('cascade');

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
        Schema::drop('users');
    }

}
